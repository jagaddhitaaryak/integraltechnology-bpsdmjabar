<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Models\Sertifikasi;
use App\Models\Webinar;
use Illuminate\Http\Request;

class BigDataController extends Controller
{
    function index()
    {
        return view('dashboard.big-data.index', [
            'title' => 'Big Data',
            'webinar' => Webinar::latest()->paginate(3),
            'pelatihan' => Pelatihan::latest()->paginate(3),
            'sertifikasi' => Sertifikasi::latest()->paginate(3)
        ]);
    }
}
