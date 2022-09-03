<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dashboard', [
            'title' => 'Dashboard'
        ]);
    }

    public function aplikasi()
    {
        return view('dashboard.aplikasi', [
            'title' => 'Aplikasi'
        ]);
    }

    public function webinar()
    {
        return view('dashboard.big-data.webinar', [
            'title' => 'Webinar'
        ]);
    }

    public function pelatihan()
    {
        return view('dashboard.big-data.pelatihan', [
            'title' => 'Pelatihan'
        ]);
    }

    public function sertifikasi()
    {
        return view('dashboard.big-data.sertifikasi', [
            'title' => 'Sertifikasi'
        ]);
    }

    public function multimedia()
    {
        return view('dashboard.multimedia', [
            'title' => 'Multimedia'
        ]);
    }

    public function publikasi()
    {
        return view('dashboard.publikasi', [
            'title' => 'Publikasi'
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
