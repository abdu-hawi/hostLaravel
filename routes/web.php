<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('speakers', function () {
    return view('speakers');
})->name('speakers');
Route::get('agenda', function () {
    return view('agenda');
})->name('agenda');
Route::get('media_partners', function () {
    return view('media_partners');
})->name('media_partners');
Route::get('sponsors', function () {
    return view('sponsors');
})->name('sponsors');
Route::get('news', function () {
    return view('news');
})->name('news');
Route::get('register', function () {
    return view('register');
})->name('register');
Route::get('contact_us', function () {
    return view('contact_us');
})->name('contact_us');
// Route::get('email', function () {
//     $data = [
//         "first_name" => "Abdu",
//         "last_name" => "Hawi",
//         "email" => "ahhh42@gmail.com",
//     ];
//     //dispatch(new \App\Jobs\SendEmailsJob($data));
//     sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
//     return "Done";
// });
Route::get('email', function () {
    $_data = Client::query()->get();
    //dd($_data);
    //dispatch(new \App\Jobs\SendEmailsJob($data));
    foreach ($_data as $data) {
        // sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
        if (Mail::to($data['email'])->send(new SendEmailRigester($data['first_name'] . ' ' . $data['last_name']))) {
            echo "Done " . $data['id'] . "<br>";
        } else {
            echo "Fails " . $data['id'] . "<br>";
        }
    }
    // $data = [
    //     "name" => "Abdu",
    // ];
    // Mail::to('ahhh42@gmail.com')->send(new SendEmailRigester($data));
    return "Done " . Carbon::now();
});
Route::post('contact_us', [ContactController::class, 'save'])->name('contact_us');
Route::post('clients', [ClientController::class, 'save'])->name('clients');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/clients', [App\Http\Controllers\HomeController::class, 'clients'])->name('admin.clients');
Route::get('admin/contact_forms', [App\Http\Controllers\HomeController::class, 'contact_forms'])->name('admin.contact_forms');
