<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use App\Models\EmailFailer;
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

Route::post('contact_us', [ContactController::class, 'save'])->name('contact_us');
Route::post('clients', [ClientController::class, 'save'])->name('clients');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/clients', [App\Http\Controllers\HomeController::class, 'clients'])->name('admin.clients');
Route::get('admin/contact_forms', [App\Http\Controllers\HomeController::class, 'contact_forms'])->name('admin.contact_forms');

Route::get('qr_email', function () {
    // $qr = QrCode::size(300)
    //     ->format('png')
    //     ->gradient(48, 48, 49, 99, 99, 197, "diagonal")
    //     ->backgroundColor(246, 248, 250)
    //     ->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9');
    // return view('emails.sample', [
    //     'data' => [
    //         'name' => 'Abdu Hawi',
    //         'qr' => $qr
    //     ],
    //     'contact_us' => route('contact_us'),
    //     'xs_logo' => asset('wp-content/uploads/2023/01/xs-conference-1-light.png'),
    //     'c3_logo' => asset('wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg'),
    //     'sce_summit_logo' => asset('wp-content/uploads/2023/07/logo_black.jpg')
    // ]);

    // $qr = QrCode::size(300)
    //     ->format('png')
    //     ->gradient(48, 48, 49, 99, 99, 197, "diagonal")
    //     ->backgroundColor(246, 248, 250)
    //     ->generate('https://techvblogs.com/blog/generate-qr-code-laravel-9');

    $qr = QrCode::size(300)
        ->format('png')
        ->gradient(48, 48, 49, 99, 99, 197, "diagonal")
        ->backgroundColor(246, 248, 250)
        ->generate("https://techvblogs.com/blog/generate-qr-code-laravel-9");
    print_r($qr);
    return gettype($qr);
    Mail::to('ahhh42@gmail.com')->send(new SendEmailRigester([
        "name" => "Abdu Hawi",
        "qr" => $qr
    ]));
    return "Abdu";
});

Route::get('email', function () {
    $_data = Client::query()->where('is_sent_email', false)->get();
    foreach ($_data as $data) {
        try {
            if (Mail::to($data['email'])->send(new SendEmailRigester($data['first_name'] . ' ' . $data['last_name']))) {
                $data->query()->update([
                    'is_sent_email' => true
                ]);
                echo $data['email'] . Carbon::now() . "<br>";
            } else {
                EmailFailer::query()->create([
                    'email' => $data['email'],
                    'fails' => 'Unkown Error'
                ]);
                echo "Fails " . $data['email'] . "<br>";
            }
        } catch (\Exception $ex) {
            // dd($ex->getMessage());
            EmailFailer::query()->create([
                'email' => $data['email'],
                'fails' => $ex->getMessage()
            ]);
        }
    }
    return "Done " . Carbon::now();
})->middleware('auth');
