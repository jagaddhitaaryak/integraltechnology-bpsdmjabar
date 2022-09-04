@extends('dashboard.layouts.main')

@section('title', 'Multimedia')

@section('content')
    <section>
        {{-- error message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end error message --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <div class="tab-content" id="nav-tabContent">
                        <section class="container">
                            <img class="rounded mx-auto d-block" src="/img/multimedia.png" alt="" width="20%" height="20%">
                            <div class="row form-group mt-4">
                                <div class="col-lg-6 col-sm-12">   
                                    <form action="/dashboard/multimedia" method="POST">
                                        @csrf
                                        <!-- Date -->
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" class="form-control" placeholder="Tanggal" name="tanggal">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <!-- Nama Kegiatan -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%" name="nama_kegiatan">
                                        </div>
                                        <!-- Link Video -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Link Video" aria-label="Link Video" width="50%" name="link_video">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                                
                                <div class="col-lg-6 col-sm-12">
                                    <h1>View</h1>
                                    <form action="download.php" method="post">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection