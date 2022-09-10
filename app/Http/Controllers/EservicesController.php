<?php

namespace App\Http\Controllers;

use App\Models\Eservices;
use Illuminate\Http\Request;

class EservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Eservices $eservices)
    {

        return view('dashboard.eservices.index', [
            'title' => 'E - Services',
            'eservices' => Eservices::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.eservices.tambah', [
            'title' => 'E - Services'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'tanggal' => 'required',
            'nama_kegiatan' => 'required',
            'jml_peserta' => 'required',
            'jadwal' => 'file | mimes:pdf',
            'data_peserta' => 'file | mimes:pdf'
        ]);

        if ($request->file('jadwal')) {
            $validatedData['jadwal'] = $request->file('jadwal')->store('jadwal-kegiatan');
        }

        if ($request->file('data_peserta')) {
            $validatedData['data_peserta'] = $request->file('data_peserta')->store('data-peserta');
        }

        Eservices::create($validatedData);

        return redirect('/dashboard/eservices')->with('success', 'Data berhasil ditambahkan!');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EServices  $eServices
     * @return \Illuminate\Http\Response
     */
    public function show(EServices $eServices)
    {
        // return view('dashboard.eservices', [
        //     'eservices' => Eservices::all()
        // ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EServices  $eServices
     * @return \Illuminate\Http\Response
     */
    public function edit(EServices $eServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EServices  $eServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EServices $eServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EServices  $eServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eservices $eServices)
    {
        //
    }
}
