<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use App\Http\Requests\StorePelatihanRequest;
use App\Http\Requests\UpdatePelatihanRequest;
use Illuminate\Http\Request;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.big-data.pelatihan', [
            'title' => 'Pelatihan'
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
     * @param  \App\Http\Requests\StorePelatihanRequest  $request
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
            'foto_kegiatan' => 'file | mimes:pdf',
            'data_peserta' => 'file | mimes:pdf'
        ]);

        if ($request->file('foto_kegiatan')) {
            $path = public_path() . '/files/pelatihan/foto-kegiatan/';

            $validatedData['foto_kegiatan'] = $request->file('foto_kegiatan')->getClientOriginalName();
            $request->file('foto_kegiatan')->move($path, $validatedData['foto_kegiatan']);
        }

        if ($request->file('data_peserta')) {
            $path = public_path() . '/files/pelatihan/data-peserta/';

            $validatedData['data_peserta'] = $request->file('data_peserta')->getClientOriginalName();
            $request->file('data_peserta')->move($path, $validatedData['data_peserta']);
        }

        Pelatihan::create($validatedData);

        return redirect('/dashboard/big-data')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePelatihanRequest  $request
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePelatihanRequest $request, Pelatihan $pelatihan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelatihan  $pelatihan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelatihan $pelatihan)
    {
        //
    }
}
