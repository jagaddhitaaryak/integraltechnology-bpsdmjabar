@extends('dashboard.layouts.main')

@section('title', 'Multimedia')

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
        <form action="/dashboard/multimedia/edit/{id}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <!-- Date -->
            <label for="tanggal" class="form-label">Tanggal</label>
            <div class="input-group mb-3">
                <input id="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Tanggal" autocomplete="off" value="{{ old('tanggal', $multimedia->tanggal) }}" required>

                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Nama Kegiatan -->
            <label for="namaKegiatan" class="form-label">Nama Kegiatan</label>
            <div class="input-group mb-3">
                <input id="namaKegiatan" type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" name="nama_kegiatan" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%" value="{{ old('nama_kegiatan', $multimedia->nama_kegiatan) }}" required>
                @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Link Video -->
            <label for="link" class="form-label">Link Video</label>
            <div class="input-group mb-3">
                <input id="link" type="text" name="link_video" class="form-control @error('link_video') is-invalid @enderror" placeholder="Link Video" aria-label="Link Video" width="50%" value="{{ old('link_video', $multimedia->link_video) }}" required>
                @error('link_video')
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
