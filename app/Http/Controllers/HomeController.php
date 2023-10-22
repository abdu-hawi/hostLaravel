<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clients = Client::query()->paginate(10);
        return view('home', compact('clients'));
    }

    public function clients()
    {
        $clients = Client::query()->paginate(10);
        return view('admin.clients', compact('clients'));
    }
    public function contact_forms()
    {
        $contacts = Contact::query()->paginate(10);
        return view('admin.contact_form', compact('contacts'));
    }
}
