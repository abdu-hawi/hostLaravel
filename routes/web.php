<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiplomaticController;
use App\Http\Controllers\HomeController;
use App\Mail\SendEmailRigester;
use App\Models\Client;
use App\Models\EmailFailer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
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

Route::post('clients', [ClientController::class, 'save'])->name('clients');
Route::post('admin/diplomatic', [DiplomaticController::class, 'save'])->name('admin.diplomatic');

Route::post('contact_us', [ContactController::class, 'save'])->name('contact_us');
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('admin/clients', [HomeController::class, 'clients'])->name('admin.clients');
Route::get('admin/contact_forms', [HomeController::class, 'contact_forms'])->name('admin.contact_forms');
Route::get('admin/diplomatic', [HomeController::class, 'diplomatic'])->name('admin.diplomatic');

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

Route::get("qr", function(){
    return SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)
    ->gradient(48, 49, 48, 115, 197, 99, 'diagonal')
    ->backgroundColor(246, 248, 250)
    ->generate("A");
});

Route::get('admin/testEmail', function(){
    $url = route('presence',[
        'uuid' => \Str::uuid(),
        'id' => 111
    ]);
    $qr = SimpleSoftwareIO\QrCode\Facades\QrCode::size(300)
        // ->format('png')
        ->gradient(48, 49, 48, 115, 197, 99, 'diagonal')
        ->backgroundColor(246, 248, 250)
        ->generate($url);


    return view('emails.diplomatic', [
        'data' => [
            'name' => "Abdu Hawi",
            'qr' => $qr,
        ],
        'contact_us' => route('contact_us'),
        'xs_logo' => asset('wp-content/uploads/2023/01/xs-conference-1-light.png'),
        'c3_logo' => asset('wp-content/uploads/2023/01/C3-conference-1-e1675154716886-150x150.jpg'),
        'sce_summit_logo' => asset('wp-content/uploads/2023/07/logo_black.jpg'),
    ]);
});
