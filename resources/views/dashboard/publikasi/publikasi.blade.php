@extends('dashboard.layouts.main')

@section('title', 'Publikasi')

@section('content')
<!-- List Grup -->
<section>
    {{-- success message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end success message --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="tab-content" id="nav-tabContent">
                    <section class="container">
                        <img class="rounded mx-auto d-block" src="/img/publikasi.png" alt="" width="25%" height="25%">
                        <div class="row form-group mt-4">
                            {{-- input area --}}
                            <div class="col-lg-6 col-sm-12">
                                <form action="/dashboard/publikasi" method="POST">
                                    @csrf
                                    <!-- Date -->
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" placeholder="Tanggal" name="tanggal" autocomplete="off">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <!-- Nama Kegiatan -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Nama Kegiatan" width="50%" name="nama_kegiatan">
                                    </div>
                                    <!-- Judul Flyer -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Link Video" width="50%" name="link_video">
                                    </div>
                                    <!-- Link Publikasi Internal -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Link Publikasi Internal" width="50%" name="link_pub_intern">
                                    </div>
                                    <!-- Link Publikasi External -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Link Publikasi External"
                                            aria-label="Link Publikasi External" width="50%" name="link_pub_extern">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                            {{-- end --}}
                            
                            {{-- view area --}}
                            <div class="col-lg-6 col-sm-12">
                                <h1>View</h1>
                                <form action="download.php" method="post">
                                    <input type="submit" class="btn btn-primary" name="submit"
                                        value="Download File" />
                                </form>
                            </div>
                            {{-- view area --}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tutup List Grup -->
@endsection
