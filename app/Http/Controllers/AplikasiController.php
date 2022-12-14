<?php

namespace App\Http\Controllers;

use App\Models\Aplikasi;
use \Illuminate\Http\Request;

class AplikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.aplikasi.index', [
            'title' => 'Aplikasi',
            'aplikasi' => Aplikasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.aplikasi.tambah', [
            'title' => 'Aplikasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAplikasiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_apl' => 'required',
            'link_apl' => 'required',
            'desc_apl' => 'required'
        ]);

        Aplikasi::create($validatedData);

        return redirect('/dashboard/aplikasi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function show(Aplikasi $aplikasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aplikasi $aplikasi, $id)
    {
        $aplikasi = Aplikasi::find($id);
        return view('dashboard.aplikasi.edit', [
            'aplikasi' => $aplikasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAplikasiRequest  $request
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama_apl' => 'required',
            'link_apl' => 'required',
            'desc_apl' => 'required'
        ];

        $validatedData = $request->validate($rules);

        // if (file('jadwal')) {
        //     file('jadwal');
        // } else {
        //     $request->file('jadwal') = $request->file('jadwal');
        // }

        Aplikasi::where('id', $id)
            ->update($validatedData);

        return redirect('/dashboard/aplikasi')->with('success', 'Data Aplikasi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aplikasi  $aplikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aplikasi::where('id', $id)->delete();
        return redirect('/dashboard/aplikasi')->with('success', 'Data berhasil dihapus!');
    }
}
