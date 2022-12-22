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

    @can('super_admin')
    {{-- input data area --}}
    <div class="col-lg-12">
        <h3>Edit Data</h3>
        <form action="/dashboard/big-data/webinar/{{ $webinar->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <!-- Date -->
            <label for="" class="form-label">Tanggal</label>
            <div class="input-group date mb-3">
                <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" autocomplete="off" value="{{ old('tanggal', $webinar->tanggal) }}" required>
            </div>
            <!-- Nama Kegiatan -->
            <label for="" class="form-label">Nama Kegiatan</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Kegiatan Pelatihan" aria-label="Nama Kegiatan Pelatihan" width="50%" name="nama_kegiatan" value="{{ old('nama_kegiatan', $webinar->nama_kegiatan) }}" required>
            </div>
            <!-- Bidang Penyelenggara -->
            <label for="" class="form-label">Bidang Penyelenggara</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%" name="bidang_penyelenggara" value="{{ old('bidang_penyelenggara', $webinar->bidang_penyelenggara) }}" required>
            </div>
            <!-- Jumlah Peserta -->
            <label for="jumlah" class="form-label">Jumlah Peserta</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%" name="jml_peserta" value="{{ old('jml_peserta', $webinar->jml_peserta) }}" required>
            </div>
            <!-- Link Sertifikat -->
            <label for="" class="form-label">Link Sertifikat</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%" name="link_sertifikat" value="{{ old('link_sertifikat', $webinar->link_sertifikat) }}" required>
            </div>
            <!-- Upload Foto Kegiatan -->
            <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="foto_kegiatan" accept=".pdf">
                <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
            </div>
            <!-- Upload Data Peserta -->
            <label for="formFile" class="form-label">Upload Data Peserta</label>
            <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02" name="data_peserta" accept=".pdf">
                <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
    {{-- end --}}
    @endcan


</section>
@endsection
