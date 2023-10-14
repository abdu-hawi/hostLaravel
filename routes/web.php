<?php

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
})->name('home');
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
