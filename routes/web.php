<?php

use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\BigDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EservicesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PublikasiController;
use App\Http\Controllers\SertifikasiController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

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
    return view('front.landingpage', [
        "title" => "BPSDM Jabar",
        "active" => ""
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::prefix('dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');

    Route::get('/eservices', [EservicesController::class, 'index']);
    Route::get('/eservices/tambah-data', [EservicesController::class, 'create']);
    Route::post('/eservices/tambah-data', [EservicesController::class, 'store']);
    Route::get('/eservices/{id}/edit', [EservicesController::class, 'edit']);
    Route::put('/eservices/{id}', [EservicesController::class, 'update']);
    Route::delete('/eservices/delete/{id}', [EservicesController::class, 'destroy']);

    Route::get('/aplikasi', [AplikasiController::class, 'index']);
    Route::get('/aplikasi/tambah-data', [AplikasiController::class, 'create']);
    Route::post('/aplikasi/tambah-data', [AplikasiController::class, 'store']);
    Route::get('/aplikasi/{id}/edit', [AplikasiController::class, 'edit']);
    Route::put('/aplikasi/{id}', [AplikasiController::class, 'update']);
    Route::delete('/aplikasi/delete/{id}', [AplikasiController::class, 'destroy']);

    Route::get('/big-data', [BigDataController::class, 'index']);
    Route::get('/big-data/tambah-data', [BigDataController::class, 'create']);

    Route::resource('/big-data/webinar', WebinarController::class)->middleware('auth');
    Route::resource('/big-data/pelatihan', PelatihanController::class)->middleware('auth');
    Route::resource('/big-data/sertifikasi', SertifikasiController::class)->middleware('auth');

    Route::get('/multimedia', [MultimediaController::class, 'index']);
    Route::get('/multimedia/tambah-data', [MultimediaController::class, 'create']);
    Route::post('/multimedia/tambah-data', [MultimediaController::class, 'store']);
    Route::get('/multimedia/{id}/edit', [MultimediaController::class, 'edit']);
    Route::put('/multimedia/{id}', [MultimediaController::class, 'update']);
    Route::delete('/multimedia/delete/{id}', [MultimediaController::class, 'destroy']);

    Route::get('/publikasi', [PublikasiController::class, 'index']);
    Route::get('/publikasi/tambah-data', [PublikasiController::class, 'create']);
    Route::post('/publikasi/tambah-data', [PublikasiController::class, 'store']);
    Route::get('/publikasi/{id}/edit', [PublikasiController::class, 'edit']);
    Route::put('/publikasi/{id}', [PublikasiController::class, 'update']);
    Route::delete('/publikasi/delete/{id}', [PublikasiController::class, 'destroy']);
});
