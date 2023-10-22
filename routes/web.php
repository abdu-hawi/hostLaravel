<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Models\Client;
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
    // $_data = Client::query()->get();
    // //dispatch(new \App\Jobs\SendEmailsJob($data));
    // foreach ($_data as $data) {
    //     sendMail($data['email'], "Thank you for register", $data['first_name'] . ' ' . $data['last_name']);
    // }

    // $from = "no_replay@scesummit-sa.com";
    // $to = "ahhh42@gmail.com";
    // $subject = "Checking PHP mail";
    // $message = "PHP mail works just fine";
    // $headers = "From:" . $from;
    // if (mail($to, $subject, $message, $headers)) {
    //     echo "The email message was sent.";
    // } else {
    //     echo "The email message was not sent.";
    // }

    echo sendMail("ahhh42@gmail.com", "Thank you for register", "Abdu Hawi");

    return "Done";
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
