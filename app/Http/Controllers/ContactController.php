<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    protected function save(Request $request)
    {
        $data = $request->validate([
            "name" => "required | string",
            "email" => "required | email",
            "subject" => "required | string",
            "massege" => "required | string",
            "GDRP" => "accepted",
        ], [
            "GDRP.accepted" => "You must accept privacy policy"
        ]);

        Contact::query()->create($data);
        //dispatch(new SendEmailsJob($data));
        Session::flash('success', 'The form send successfully');
        return redirect(route('contact_us'));
    }
}
