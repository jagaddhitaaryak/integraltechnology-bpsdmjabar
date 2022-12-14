<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use App\Http\Requests\StoreMultimediaRequest;
use App\Http\Requests\UpdateMultimediaRequest;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.multimedia.index', [
            'title' => 'Multimedia',
            'multimedia' => Multimedia::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.multimedia.tambah', [
            'title' => 'Multimedia'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMultimediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required',
            'link_video' => 'required'
        ]);

        Multimedia::create($validatedData);

        return redirect('/dashboard/multimedia')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function show(Multimedia $multimedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function edit(Multimedia $multimedia, $id)
    {
        $multimedia = Multimedia::find($id);
        return view('dashboard.multimedia.edit', [
            'multimedia' => $multimedia
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMultimediaRequest  $request
     * @param  \App\Models\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'tanggal' => 'required',
            'nama_kegiatan' => 'required',
            'link_video' => 'required'
        ];
        $validatedData = $request->validate($rules);
        Multimedia::where('id', $id)->update($validatedData);

        return redirect('/dashboard/multimedia')->with('success', 'Data Multimedia berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Multimedia  $multimedia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Multimedia::where('id', $id)->delete();
        return redirect('/dashboard/multimedia')->with('success', 'Data berhasil dihapus!');
    }
}
