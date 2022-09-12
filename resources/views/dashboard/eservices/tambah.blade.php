@extends('dashboard.layouts.main')

@section('title', 'E - Services')

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
        <form action="/dashboard/eservices/tambah-data" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Date -->
            <label for="jumlah" class="form-label">Tanggal</label>
            <div class="input-group mb-3">
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" autocomplete="off" value="{{ old('tanggal') }}" required>

                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Nama Kegiatan -->
            <label for="jumlah" class="form-label">Nama Kegiatan</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%" value="{{ old('nama_kegiatan') }}" required>
                @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Jumlah Peserta -->
            <label for="jumlah" class="form-label">Jumlah Peserta</label>
            <div class="input-group mb-3">
                <input id="jumlah" type="text" name="jml_peserta" class="form-control @error('jml_peserta') is-invalid @enderror" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%" value="{{ old('jml_peserta') }}" required>
                @error('jml_peserta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Jadwal Kegiatan -->
            <label for="jadwal" class="form-label">Jadwal Kegiatan</label>
            <div class="input-group mb-3">
                <input id="jadwal" type="file" name="jadwal" class="form-control" accept=".pdf">
                <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
            </div>
            <!-- Upload Data Peserta -->
            <label for="dapes" class="form-label">Upload Data Peserta</label>
            <div class="input-group mb-3">
                <input id="dapes" type="file" name="data_peserta" class="form-control" accept=".pdf">
                <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    {{-- end --}}
    @endcan


</section>
@endsection
