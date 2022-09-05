<?php

namespace App\Http\Controllers;

use App\Models\Sertifikasi;
use App\Http\Requests\StoreSertifikasiRequest;
use App\Http\Requests\UpdateSertifikasiRequest;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required',
            'bidang_penyelenggara' => 'required',
            'jml_peserta' => 'required',
            'link_sertifikat' => 'required',
            'foto_kegiatan' => 'required | file | mimes:png,jpg,jpeg',
            'data_peserta' => 'required | file | mimes:pdf'
        ]);

        if ($request->file('foto_kegiatan')) {
            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->store('foto-kegiatan');
        }

        if ($request->file('data_peserta')) {
            $validatedData['data_peserta'] = $request->file('data_peserta')->store('data-peserta');
        }

        Sertifikasi::create($validatedData);

        return redirect('/dashboard/webinar')->with('success', 'Data berhasil ditambahkan!');
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
