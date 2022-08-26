<?php

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
        "title" => "BPSDM Jabar"
    ]);
});

Route::get('/login', function () {
    return view('front/login', [
        "title" => "Login"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard/sidebar/dashboard', [
        "title" => "Dashboard"
    ]);
});

Route::get('/dashboard/eservices', function () {
    return view('dashboard/sidebar/eservices', [
        "title" => "E-services"
    ]);
});

Route::get('/dashboard/aplikasi', function () {
    return view('dashboard/sidebar/aplikasi', [
        "title" => "Aplikasi"
    ]);
});

Route::get('/dashboard/big-data', function () {
    return view('dashboard/sidebar/big-data', [
        "title" => "Big Data"
    ]);
});
Route::get('/dashboard/webinar', function () {
    return view('dashboard/sidebar/big-data/webinar', [
        "title" => "Webinar"
    ]);
});
Route::get('/dashboard/pelatihan', function () {
    return view('dashboard/sidebar/big-data/pelatihan', [
        "title" => "Pelatihan"
    ]);
});
Route::get('/dashboard/sertifikasi', function () {
    return view('dashboard/sidebar/big-data/sertifikasi', [
        "title" => "Sertifikasi"
    ]);
});

Route::get('/dashboard/multimedia', function () {
    return view('dashboard/sidebar/multimedia', [
        "title" => "Multimedia"
    ]);
});

Route::get('/dashboard/publikasi', function () {
    return view('dashboard/sidebar/publikasi', [
        "title" => "Publikasi"
    ]);
});
