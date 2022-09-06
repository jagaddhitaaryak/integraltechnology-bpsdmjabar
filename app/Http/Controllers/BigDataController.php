<?php

namespace App\Http\Controllers;

use App\Models\BigData;
use Illuminate\Http\Request;

class BigDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.bigdata', [
            'title' => 'BigData'
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
     * @param  \App\Models\BigData  $bigData
     * @return \Illuminate\Http\Response
     */
    public function show(BigData $bigData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BigData  $bigData
     * @return \Illuminate\Http\Response
     */
    public function edit(BigData $bigData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BigData  $bigData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BigData $bigData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BigData  $bigData
     * @return \Illuminate\Http\Response
     */
    public function destroy(BigData $bigData)
    {
        //
    }
}
