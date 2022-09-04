<?php

use App\Http\Controllers\AplikasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EservicesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\PublikasiController;
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

// Route::get('/sidebar', function () {
//     return view('dashboard/sidebar', [
//         "title" => "E-services"
//     ]);
// })->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::prefix('dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');
    Route::resource('/eservices', EservicesController::class)->middleware('auth');
    Route::get('/eservices/download/{file}', [DashboardController::class, 'download']);

    Route::resource('/aplikasi', AplikasiController::class)->middleware('auth');

    Route::get('/webinar', [DashboardController::class, 'webinar'])->middleware('auth');
    Route::get('/pelatihan', [DashboardController::class, 'pelatihan'])->middleware('auth');
    Route::get('/sertifikasi', [DashboardController::class, 'sertifikasi'])->middleware('auth');

    Route::resource('/multimedia', MultimediaController::class)->middleware('auth');
    Route::resource('/publikasi', PublikasiController::class)->middleware('auth');

    // Route::get('/publikasi', [DashboardController::class, 'publikasi'])->middleware('auth');
});
