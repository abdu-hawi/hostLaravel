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
                'name' => 'عدنان',
                'email' => 'adnan@sajco.com.sa',
            ],
            [
                'name' => 'محمد الفاهوم',
                'email' => 'mfahoum@sajco.com.sa',
            ],
            [
                'name' => 'الكيالي',
                'email' => 'mkayyali@sajco.com.sa',
            ],
            [
                'name' => 'وقاص',
                'email' => 'wakkas.ismail@sajco.com.sa',
            ],
            [
                'name' => 'عاطف',
                'email' => 'atef@sajco.com.sa',
            ],
            [
                'name' => 'هيثم',
                'email' => 'haytham.fayed@sajco',
            ],
            [
                'name' => 'محمد العيسى',
                'email' => 'malessa@sajco.com.sa',
            ],
            [
                'name' => 'فادي',
                'email' => 'fadi.azazi@sajco.com.sa',
            ],
            [
                'name' => 'شادي',
                'email' => 'shady.abbass@sajco.com.sa',
            ],
            [
                'name' => 'خالد القلفاط',
                'email' => 'kh.alkolfat@sajco.com.sa',
            ],
            [
                'name' => 'عزام',
                'email' => 'sazzam@sajco.com.sa',
            ],
            [
                'name' => 'aabulibdeh@sajco.com.sa',
                'email' => 'علي ابو لبدة',
            ],
            [
                'name' => 'عبدالمحسن',
                'email' => 'aalrammah@sajco.com.sa',
            ],
            [
                'name' => 'امتياز',
                'email' => 'imthiyaz@sajco.com.sa',
            ],
            [
                'name' => 'مشعل الحربي',
                'email' => 'maeshal@sajco.com.sa',
            ],
            [
                'name' => 'عبدالكريم',
                'email' => 'mabdulkarim@sajco.com.sa',
            ],
        ];

        // foreach ($_data as $data) {
        //     $this->sendEmail($data);
        // }

        $this->sendEmail([
            'name' => 'عبده حاوي',
            'email' => 'ahhh42@gmail.com',
        ]);

        Session::flash('success', 'The form send successfully');

        return redirect(route('register'));
    }

    public function sendEmail($_data)
    {
        $data['first_name'] = $_data['name'];
        $data['last_name'] = 'NAN';
        $data['email'] = $_data['email'];
        $data['job_title'] = 'NAN';
        $data['company_name'] = 'SAJCo';
        $data['mobile'] = 'SAJ Company VIP';
        $data['industry'] = 'NAN';
        $data['interested'] = 'Vip Sponsors';

        try {
            $client = Client::query()->create($data);
            $url = route('presence', [
                'uuid' => \Str::uuid(),
                'id' => $client->id,
            ]);

            $qr = QrCode::size(300)
                ->format('png')
                ->backgroundColor(246, 248, 250)
                ->generate($url);

            $output_file = \Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])
                ->bcc(['rx_email@scesummit-sa.com', 'Dareen@xs-conferences.com'])
                ->send(new SAJCoEmailRigester([
                'name' => $data['first_name'],
                'qr' => $qr,
            ]))) {
                $client->query()->update([
                    'is_sent_email' => true,
                ]);
            } else {
                EmailFailer::query()->create([
                    'email' => $data['email'],
                    'fails' => 'Unkown Error',
                ]);
            }

            if (Storage::disk('public')->exists('qr/'.$output_file)) {
                Storage::disk('public')->delete('qr/'.$output_file);
            }
        } catch (\Exception $ex) {
            EmailFailer::query()->create([
                'email' => $data['email'],
                'fails' => $ex->getMessage(),
            ]);
        }
    }
}
