<?php

use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Auth;
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
    return view('landing');
})->name('home');

//Keperluan
Route::resource('kelurahan', KelurahanController::class);
//Pasien
Route::resource('pasien', PasienController::class);
Route::get('pasien/kartu/{id}', [PasienController::class, 'kartu_pasien'])->name('kartu.pasien');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
