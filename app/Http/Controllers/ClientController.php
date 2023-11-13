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

class ClientController extends Controller
{
    protected function save(Request $request)
    {
        $data = $request->validate([
            "first_name" => "required | string",
            "last_name" => "required | string",
            "job_title" => "required | string",
            "company_name" => "required | string",
            "mobile" => "required | regex:/^([0-9\s\-\+\(\)]*)$/",
            // "full_number" => "required",
            "mobile-country-code" => "required",
            "email" => "required | email | unique:clients,email",
            "industry" => "required | string",
            "interested" => "required | string",
            "GDRP" => "accepted",
            "registeration_code" => "string | sometimes | nullable | regex:(VIP-SCES)"
        ], [
            "GDRP.accepted" => "You must accept privacy policy"
        ]);

        // registeration_code

        //dispatch(new SendEmailsJob($data));
        //sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
        // dd($client->id);
        try {

            $client = Client::query()->create($data);
            $url = route('presence',[
                'uuid' => \Str::uuid(),
                'id' => $client->id
            ]);

            $vip = false;
            if($data['registeration_code']){
                $vip = 'VIP SCES Invitation';
                $qr = QrCode::size(300)
                ->format('png')
                ->gradient(49, 49, 48, 192, 136, 2, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);
            }else{
                $qr = QrCode::size(300)
                ->format('png')
                ->gradient(48, 48, 49, 99, 99, 197, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);
            }


            $output_file = \Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])
                ->bcc(['rx_email@scesummit-sa.com'])
                ->send(new SendEmailRigester([
                'name' => $data['first_name'].' '.$data['last_name'],
                'qr' => $qr,
                'isEmail' => false,
                'vip' => $vip,
                'cc' => false
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
        Session::flash('success', 'The form send successfully');
        return redirect(route('register'));
    }
}
