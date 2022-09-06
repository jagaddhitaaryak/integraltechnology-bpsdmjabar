@extends('dashboard.layouts.main')

@section('title', 'Big Data')

@section('content')
    <section>
        {{-- success message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end success message --}}
    <div class="btn-group col-lg-6" role="group" aria-label="Basic radio toggle button group">
        <a href="/dashboard/webinar">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-danger" style="border-start-start-radius: 1000px;" for="btnradio1">Webinar</label>
        </a>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
        <label class="btn btn-warning" for="btnradio1"><a href="/dashboard/pelatihan">Pelatihan</label></a>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
        <label class="btn btn-success" style="border-end-end-radius: 1000px;" for="btnradio1"><a href="/dashboard/sertifikasi">Sertifikasi</label></a>
    </div>       
@endsection