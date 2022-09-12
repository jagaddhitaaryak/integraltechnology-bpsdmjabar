@extends('dashboard.layouts.main')

@section('title', 'Publikasi')

@section('content')

<section>
    {{-- success message --}}
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    {{-- end success message --}}

    @can('super_admin')
    {{-- input data area --}}
    <div class="col-lg-12">
        <h3>Input Data</h3>
        <form action="/dashboard/publikasi/tambah-data" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Date -->
            <label for="tanggal" class="form-label">Tanggal</label>
            <div class="input-group mb-3">
                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" autocomplete="off" value="{{ old('tanggal') }}" required>
                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Nama Kegiatan -->
            <label for="namaKegiatan" class="form-label">Nama Kegiatan</label>
            <div class="input-group mb-3">
                <input id="namaKegiatan" type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%" value="{{ old('nama_kegiatan') }}" required>
                @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Judul Flyer -->
            <label for="flyer" class="form-label">Judul Flyer</label>
            <div class="input-group mb-3">
                <input id="flyer" type="text" name="judul_flyer" class="form-control @error('judul_flyer') is-invalid @enderror" placeholder="Judul Flyer" aria-label="Judul Flyer" width="50%" value="{{ old('judul_flyer') }}" required>
                @error('judul_flyer')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <!-- Link Publikasi Intern -->
            <label for="pubInter" class="form-label">Link Publikasi Internal</label>
            <div class="input-group mb-3">
                <input id="pubInter" type="text" name="link_pub_intern" class="form-control @error('link_pub_intern') is-invalid @enderror" placeholder="Link Publikasi Internal" aria-label="Link Publikasi Internal" width="50%" value="{{ old('link_pub_intern') }}" required>
                @error('link_pub_intern')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Link Publikasi Extern -->
            <label for="pubExtern" class="form-label">Link Publikasi External</label>
            <div class="input-group mb-3">
                <input id="pubExtern" type="text" name="link_pub_extern" class="form-control @error('link_pub_extern') is-invalid @enderror" placeholder="Link Publikasi External" aria-label="Link Publikasi External" width="50%" value="{{ old('link_pub_extern') }}" required>
                @error('link_pub_extern')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    {{-- end --}}
    @endcan


</section>
@endsection
