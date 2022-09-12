<?php

namespace App\Http\Controllers;

use App\Models\Publikasi;
use App\Http\Requests\StorePublikasiRequest;
use App\Http\Requests\UpdatePublikasiRequest;
use Illuminate\Http\Request;

class PublikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.publikasi.index', [
            'title' => 'Publikasi',
            'publikasi' => Publikasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.publikasi.tambah', [
            'title' => 'Publikasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required',
            'judul_flyer' => 'required',
            'link_pub_intern' => 'required',
            'link_pub_extern' => 'required'
        ]);

        Publikasi::create($validatedData);

        return redirect('/dashboard/publikasi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Publikasi $publikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Publikasi $publikasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublikasiRequest  $request
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublikasiRequest $request, Publikasi $publikasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publikasi $publikasi)
    {
        //
    }
}
