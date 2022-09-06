@extends('dashboard.layouts.main')

@section('title', 'Webinar')

@section('content')

<section>
    {{-- success message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end success message --}}
    <div class="container mt-3" style="border-radius: 10px; background: #B22222">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="tab-content" id="nav-tabContent">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Tambah Data Webinar</h1>
                    </div>
                    <section class="container">
                        <div class="row form-group">
                            <div class="col-lg-6 col-sm-12">
                                <form action="/dashboard/webinar" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Date -->
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Nama Kegiatan -->
                                    <div class="mb-3 mt-3">
                                        <label for="nWebinar" class="form-label">Nama Kegiatan Webinar</label>
                                        <input type="text" class="form-control @error('nWebinar') is-invalid @enderror" id="nWebinar" name="nWebinar" required autofocus value="{{ old('nWebinar') }}">
                                        @error('nWebinar')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Bidang Penyelenggara -->
                                    <div class="mb-3 mt-3">
                                        <label for="bPenyelengggara" class="form-label">Bidang Penyelenggara</label>
                                        <input type="text" class="form-control @error('bPenyelengggara') is-invalid @enderror" id="bPenyelengggara" name="bPenyelengggara" required autofocus value="{{ old('bPenyelengggara') }}">
                                        @error('bPenyelengggara')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Jumlah Peserta -->
                                    <div class="mb-3 mt-3">
                                        <label for="jPeserta" class="form-label">Jumlah Peserta</label>
                                        <input type="text" class="form-control @error('jPeserta') is-invalid @enderror" id="jPeserta" name="jPeserta" required autofocus value="{{ old('jPeserta') }}">
                                        @error('jPeserta')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Link Sertifikat -->
                                    <div class="mb-3 mt-3">
                                        <label for="lSertifikasi" class="form-label">Link Sertifikasi</label>
                                        <input type="text" class="form-control @error('lSertifikasi') is-invalid @enderror" id="lSertifikasi" name="lSertifikasi" required autofocus value="{{ old('lSertifikasi') }}">
                                        @error('lSertifikasi')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Upload Foto Kegiatan -->
                                    <label for="formFile" class="form-label" style="color: black;">Upload Foto Kegiatan</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="foto_kegiatan" accept=".jpg, .png">
                                        <label class="input-group-text" for="inputGroupFile02"><i
                                                class="fa-solid fa-upload"></i></label>
                                    </div>
                                    <!-- Upload Data Peserta -->
                                    <label for="formFile" class="form-label" style="color: black;">Upload Data Peserta</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="data_peserta" accept=".pdf">
                                        <label class="input-group-text" for="inputGroupFile02"><i
                                                class="fa-solid fa-upload"></i></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>

                            <div class="col-lg-6">
                                <h2>view</h2>
                                <form action="download.php" method="post">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Tutup Webinar -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection