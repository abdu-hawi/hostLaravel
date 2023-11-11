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
use Illuminate\Support\Facades\Storage;

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

Route::group(['middleware'=>'Lang'],function (){
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
});

Route::get('/lang/{lang}',function ($lang){
    if (session()->has('lang')){
        session()->forget('lang');
    }
    session()->put('lang',$lang);
    return back();
})->name('lang');



Route::get('pdf', function () {
    return view('pdf');
})->name('pdf');
// read QR Code
Route::get('presence/{uuid}/{id}', function () {
    return view('welcome');
})->name('presence');

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
    $url = route('presence',[
        'uuid' => Str::uuid(),
        'id' => 2
    ]);
    $qr = QrCode::size(300)
        ->format('png')
        ->gradient(48, 48, 49, 99, 99, 197, 'diagonal')
        ->backgroundColor(246, 248, 250)
        ->generate($url);

    $output_file = Str::uuid().time().'.png';
    Storage::disk('public')->put('qr/'.$output_file, $qr);

    $qr = url('').'/storage/qr/'.$output_file;

    Mail::to('ahhh42@gmail.com')->send(new SendEmailRigester([
        'name' => 'Abdu Hawi',
        'qr' => $qr,
    ]));
    if (Storage::disk('public')->exists('qr/'.$output_file)) {
        Storage::disk('public')->delete('qr/'.$output_file);
    }

    return 'Abdu';
})->middleware('auth');

Route::get('email', function () {
    $_data = Client::query()->get();
    foreach ($_data as $data) {
        try {
            $url = route('presence',[
                'uuid' => Str::uuid(),
                'id' => $data->id
            ]);
            $qr = QrCode::size(300)
                ->format('png')
                ->gradient(48, 48, 49, 99, 99, 197, 'diagonal')
                ->backgroundColor(246, 248, 250)
                ->generate($url);

            $output_file = Str::uuid().time().'.png';
            Storage::disk('public')->put('qr/'.$output_file, $qr);

            $qr = url('').'/storage/qr/'.$output_file;

            if (Mail::to($data['email'])->send(new SendEmailRigester([
                'name' => $data['first_name'].' '.$data['last_name'],
                'qr' => $qr,
                'isEmail' => true
            ]))) {
                $data->query()->update([
                    'is_sent_email' => true,
                ]);
                echo $data['email'].Carbon::now().'<br>';
            } else {
                EmailFailer::query()->create([
                    'email' => $data['email'],
                    'fails' => 'Unkown Error',
                ]);
                echo 'Fails '.$data['email'].'<br>';
            }
            if (Storage::disk('public')->exists('qr/'.$output_file)) {
                Storage::disk('public')->delete('qr/'.$output_file);
            }
        } catch (\Exception $ex) {
            // dd($ex->getMessage());
            EmailFailer::query()->create([
                'email' => $data['email'],
                'fails' => $ex->getMessage(),
            ]);
        }
    }

    return 'Done '.Carbon::now();
})->middleware('auth');
