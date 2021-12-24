<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\DetailKkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Calender Admin
Route::get('/calender', function () {
    return view('calender');
});

// Clender Penduduk
Route::get('/calenderp', function () {
    return view('calenderPenduduk');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profil',[ProfilController::class, 'index'])->name('profil');
// Admin
Route::resource('users', UserController::class);

// Penduduk
Route::resource('penduduks', PendudukController::class);

// Kelahiran
Route::resource('kelahirans', KelahiranController::class);
Route::get('/kelahirans/{id}/report', [KelahiranController::class,'report']);

// Kematian
Route::resource('kematians', KematianController::class);
Route::get('/kematians/{id}/report', [KematianController::class,'report']);

// Kartu Keluarga
Route::resource('kartuKeluargas', KartuKeluargaController::class);

// Detail Kartu Keluarga
Route::resource('detailKks', DetailKkController::class);