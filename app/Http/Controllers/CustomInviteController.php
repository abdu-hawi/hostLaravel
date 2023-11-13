<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use App\Models\EmailFailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CustomInviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function save(Request $request)
    {
        $data = $request->validate([
            "first_name" => "required | string",
            "last_name" => "required | string",
            "job_title" => "required | string",
            "company_name" => "required | string",
            "mobile" => "required | regex:/^([0-9\s\-\+\(\)]*)$/",
            "email" => "required | email | unique:clients,email",
            "industry" => "required | string",
            "interested" => "required | string",
        ]);

        try {
            $client = Client::query()->create($data);
            $url = route('presence',[
                'uuid' => \Str::uuid(),
                'id' => $client->id
            ]);

            $vip = 'VIP SCES Invitation';
                $qr = QrCode::size(300)
                ->format('png')
                ->gradient(49, 49, 48, 192, 136, 2, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);


            $output_file = \Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])
            ->cc(['adel@xs-conferences.com'])
            ->bcc('ahhh42@gmail.com')
            ->send(new SendEmailRigester([
                'name' => $data['first_name'].' '.$data['last_name'],
                'qr' => $qr,
                'isEmail' => false,
                'vip' => $vip,
                'cc' => 'cc'
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
        Session::flash('success', 'The invite send successfully');
        return redirect(route('register'));
    }
}
