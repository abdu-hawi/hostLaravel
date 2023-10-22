<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailsJob;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ClientController extends Controller
{
    protected function save(Request $request)
    {
        $data = $request->validate([
            "first_name" => "required | string",
            "last_name" => "required | string",
            "job_title" => "required | string",
            "company_name" => "required | string",
            "mobile" => "required",
            // "full_number" => "required",
            "mobile-country-code" => "required",
            "email" => "required | email",
            "industry" => "required | string",
            "interested" => "required | string",
            "GDRP" => "accepted",
        ], [
            "GDRP.accepted" => "You must accept privacy policy"
        ]);

        Client::query()->create($data);
        //dispatch(new SendEmailsJob($data));
        //sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
        Mail::to($data['email'])->send(new SendEmailRigester($data['first_name'] . ' ' . $data['last_name']));
        Session::flash('success', 'The form send successfully');
        return redirect(route('register'));
    }
}
