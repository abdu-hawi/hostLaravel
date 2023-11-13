<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailsJob;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use App\Models\EmailFailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DiplomaticController extends Controller
{
    protected function save(Request $request)
    {
        $_data = $request->validate([
            "name" => "required | string",
            "email" => "required | email | unique:clients,email",
            "embassy" => "required | string",
            "communicatoin" => "required | string",
         ]);


        //dispatch(new SendEmailsJob($data));
        //sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
        // dd($client->id);
        $data['first_name'] = $_data['name'];
        $data['last_name'] = 'NAN';
        $data['email'] = $_data['email'];
        $data['job_title'] = 'NAN';
        $data['company_name'] = $_data['embassy'];
        $data['mobile'] = $_data['communicatoin'];
        $data['industry'] = 'NAN';
        $data['interested'] = "Diplomatic";
        try {
            $client = Client::query()->create($data);
            $url = route('presence',[
                'uuid' => \Str::uuid(),
                'id' => $client->id
            ]);
            $qr = QrCode::size(300)
                ->format('png')
                ->gradient(48, 49, 48, 115, 197, 99, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);

            $output_file = \Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])->send(new SendEmailRigester([
                'name' => $data['first_name'],
                'qr' => $qr,
                'isEmail' => false
            ]))) {
                $client->query()->update([
                    'is_sent_email' => true
                ]);
            } else {
                EmailFailer::query()->create([
                    'email' => $data['email'],
                    'fails' => 'Unkown Error'
                ]);
            }

            if (Storage::disk('public')->exists('qr/'.$output_file)) {
                Storage::disk('public')->delete('qr/'.$output_file);
            }

        } catch (\Exception $ex) {
            EmailFailer::query()->create([
                'email' => $data['email'],
                'fails' => $ex->getMessage()
            ]);
        }
        Session::flash('success', 'The diplomatic save successfully');
        return redirect(route('admin.diplomatic'));
    }
}
