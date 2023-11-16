<?php

namespace App\Http\Controllers;

use App\Mail\SAJCoEmailRigester;
use App\Models\Client;
use App\Models\EmailFailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SAJCoController extends Controller
{
    protected function save()
    {
        $_data = [
            [
                'name' => 'سليمان محمد سليمان',
                'email' => 'suleiman@sajco.com.sa',
            ],
            [
                'name' => 'يوسف أحمد عسيلان',
                'email' => 'yousef@sajco.com.sa',
            ],
            [
                'name' => 'عماد محمد سليمان',
                'email' => 'emws@sajco.com.sa',
            ],
            [
                'name' => 'مراد محمد سليمان',
                'email' => 'murad@sajco.com.sa',
            ],
            [
                'name' => 'بدر وهبي سليمان',
                'email' => 'bader@sajco.com.sa',
            ],
            [
                'name' => 'زياد وهبي سليمان',
                'email' => 'ziad@sajco.com.sa',
            ],
            [
                'name' => 'أحمد عماد سليمان',
                'email' => 'Ahmad@sajco.com.sa',
            ],
            [
                'name' => 'محمد وهبي سليمان',
                'email' => 'mohammed.suleiman@sajco.com.sa',
            ],
            [
                'name' => 'فهد عماد سليمان',
                'email' => 'Fahad@sajco.com.sa',
            ],
            [
                'name' => 'سلطان سليمان سليمان',
                'email' => 'sultan@sajco.com.sa',
            ],
            [
                'name' => 'عبدالعزيز سليمان سليمان',
                'email' => 'abdulaziz@sajcoinvest.com',
            ],
            [
                'name' => 'فيصل مراد سليمان',
                'email' => 'faisal@sajco.com.sa',
            ],
            [
                'name' => 'فراس يوسف عسيلان',
                'email' => 'f.osailan@sajco.com.sa',
            ],
            [
                'name' => 'أنور',
                'email' => 'anwar@sajco.com.sa',
            ],
            [
                'name' => 'نادية فارسي',
                'email' => 'nadia.farsi@sajco.com.sa',
            ],
            [
                'name' => 'شذا',
                'email' => 'salsarra@sajco.com.sa',
            ],
            [
                'name' => 'خالد الموسى',
                'email' => 'khaled.mkmk@hotmail.com',
            ],
        ];

        foreach ($_data as $data) {
            $this->sendEmail($data);
        }

        Session::flash('success', 'The form send successfully');
        return redirect(route('register'));
    }

    function sendEmail($_data){
        $data['first_name'] = $_data['name'];
        $data['last_name'] = 'NAN';
        $data['email'] = $_data['email'];
        $data['job_title'] = 'NAN';
        $data['company_name'] = 'SAJCo';
        $data['mobile'] = "SAJ Company VIP";
        $data['industry'] = 'NAN';
        $data['interested'] = 'Vip Sponsors';

        try {

            $client = Client::query()->create($data);
            $url = route('presence',[
                'uuid' => \Str::uuid(),
                'id' => $client->id
            ]);

            $qr = QrCode::size(300)
                ->format('png')
                ->gradient(49, 49, 48, 192, 136, 2, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);


            $output_file = \Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])
                ->bcc(['rx_email@scesummit-sa.com', 'Dareen@xs-conferences.com'])
                ->send(new SAJCoEmailRigester([
                'name' => $data['first_name'],
                'qr' => $qr
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
    }
}
