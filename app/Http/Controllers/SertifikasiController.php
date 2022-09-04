<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use App\Http\Requests\StoreSertifikasiRequest;
use App\Http\Requests\UpdateSertifikasiRequest;

class SertifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.big-data.sertifikasi', [
            'title' => 'Sertifikasi'
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
     * @param  \App\Http\Requests\StoreSertifikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSertifikasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSertifikasiRequest  $request
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSertifikasiRequest $request, Sertifikasi $sertifikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikasi  $sertifikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikasi $sertifikasi)
    {
        //
    }
}
