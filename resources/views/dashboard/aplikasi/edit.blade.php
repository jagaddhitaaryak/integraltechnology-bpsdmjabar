@extends('dashboard.layouts.main')

@section('title', 'Aplikasi')

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
        <h3>Edit Data</h3>
        <form action="/dashboard/aplikasi/{{ $aplikasi->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <!-- Nama Kegiatan -->
            <label for="namaApl" class="form-label">Nama Aplikasi</label>
            <div class="input-group mb-3">
                <input id="namaApl" type="text" class="form-control @error('nama_apl') is-invalid @enderror" name="nama_apl" placeholder="Nama Aplikasi" aria-label="Nama Aplikasi" width="50%" value="{{ old('nama_apl', $aplikasi->nama_apl) }}" required>
                @error('nama_apl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- Jumlah Peserta -->
            <label for="linkApl" class="form-label">Link Aplikasi</label>
            <div class="input-group mb-3">
                <input id="linkApl" type="text" name="link_apl" class="form-control @error('link_apl') is-invalid @enderror" placeholder="Link Aplikasi" aria-label="Link Aplikasi" width="50%" value="{{ old('link_apl', $aplikasi->link_apl) }}" required>
                @error('link_apl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <label for="descApl" class="form-label">Deskripsi Aplikasi</label>
            <div class="input-group mb-3">
                <input id="" type="hidden" name="desc_apl" value="{{ old('desc_apl', $aplikasi->desc_apl) }}">
                <textarea id="descApl" name="desc_apl" class="form-control @error('desc_apl') is-invalid @enderror" width="50%" value="{{ old('desc_apl', $aplikasi->desc_apl) }}" required></textarea>
                @error('desc_apl')
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
