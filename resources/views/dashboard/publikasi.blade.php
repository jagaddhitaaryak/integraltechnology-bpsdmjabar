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
                        <div class="row form-group mt-4 bg-light" style="border-radius: 10px">
                            {{-- input area --}}
                            <div class="col-lg-6 col-sm-12">
                                <form action="/dashboard/publikasi" method="POST">
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                        <h1 class="h2">Tambah Data Publikasi</h1>
                                    </div>
                                    @csrf
                                    <!-- Date -->
                                    <label for="tanggal" class="form-label">Tanggal</label>
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal') }}">
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
                                            <label for="nKegiatan" class="form-label">Nama Kegiatan</label>
                                            <input type="text" class="form-control @error('nKegiatan') is-invalid @enderror" id="nKegiatan" name="nKegiatan" required autofocus value="{{ old('nKegiatan') }}">
                                            @error('nKegiatan')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    <!-- Judul Flyer -->
                                    <div class="mb-3 mt-3">
                                            <label for="jFlyer" class="form-label">Judul Flyer</label>
                                            <input type="text" class="form-control @error('nFlyer') is-invalid @enderror" id="nFlyer" name="nFlyer" required autofocus value="{{ old('nFlyer') }}">
                                            @error('nFlyer')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    <!-- Link Publikasi Internal -->
                                    <div class="mb-3 mt-3">
                                            <label for="lPInternal" class="form-label">Link Publikasi Internal</label>
                                            <input type="text" class="form-control @error('nPInternal') is-invalid @enderror" id="nPInternal" name="nPInternal" required autofocus value="{{ old('nPInternal') }}">
                                            @error('nPInternal')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    <!-- Link Publikasi External -->
                                    <div class="mb-3 mt-3">
                                            <label for="lPExternal" class="form-label">Link Publikasi External</label>
                                            <input type="text" class="form-control @error('nExternal') is-invalid @enderror" id="nExternal" name="nExternal" required autofocus value="{{ old('nExternal') }}">
                                            @error('nExternal')
                                                <div class="invalid-feedback">
                                                {{ $message }}
                                                </div>
                                            @enderror
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
