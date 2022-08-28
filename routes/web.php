<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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
    return view('front/landingpage', [
        "title" => "BPSDM Jabar",
        "active" => ""
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/sidebar', function () {
    return view('dashboard/sidebar', [
        "title" => "E-services"
    ]);
})->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::prefix('dashboard')->group(function () {
    Route::get('/home', [DashboardController::class, 'index'])->middleware('auth');
    Route::get('/eservices', [DashboardController::class, 'eservices'])->middleware('auth');
    Route::get('/aplikasi', [DashboardController::class, 'aplikasi'])->middleware('auth');
    Route::get('/webinar', [DashboardController::class, 'webinar'])->middleware('auth');
    Route::get('/pelatihan', [DashboardController::class, 'pelatihan'])->middleware('auth');
    Route::get('/sertifikasi', [DashboardController::class, 'sertifikasi'])->middleware('auth');
    Route::get('/multimedia', [DashboardController::class, 'multimedia'])->middleware('auth');
    Route::get('/publikasi', [DashboardController::class, 'publikasi'])->middleware('auth');
});
