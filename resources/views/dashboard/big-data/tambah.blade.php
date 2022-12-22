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
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-webinar" type="button" role="tab aria-controls="nav-home" aria-selected="true">Webinar</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-pelatihan" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Pelatihan</button>
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-sertifikasi" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Sertifikasi</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    {{-- webinar --}}
                    <div class="tab-pane fade show active" id="nav-webinar" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="col-12 py-3 bg-dark">
                            <form action="/dashboard/big-data/webinar/tambah-data" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Date -->
                                <label for="" class="form-label">Tanggal</label>
                                <div class="input-group date mb-3">
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" autocomplete="off" required>
                                </div>
                                <!-- Nama Kegiatan -->
                                <label for="" class="form-label">Nama Kegiatan</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Kegiatan Webinar" aria-label="Nama Kegiatan Webinar" width="50%" name="nama_kegiatan" required>
                                </div>
                                <!-- Bidang Penyelenggara -->
                                <label for="" class="form-label">Bidang Penyelenggara</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%" name="bidang_penyelenggara" required>
                                </div>
                                <!-- Jumlah Peserta -->
                                <label for="jumlah" class="form-label">Jumlah Peserta</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%" name="jml_peserta" required>
                                </div>
                                <!-- Link Sertifikat -->
                                <label for="" class="form-label">Link Sertifikat</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%" name="link_sertifikat" required>
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
                    </div>
                    {{-- end webinar --}}

                    {{-- pelatihan --}}
                    <div class="tab-pane fade" id="nav-pelatihan" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="col-12 py-3 bg-dark">
                            <form action="/dashboard/pelatihan" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Date -->
                                <label for="" class="form-label">Tanggal</label>
                                <div class="input-group date mb-3">
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" autocomplete="off" required>
                                </div>
                                <!-- Nama Kegiatan -->
                                <label for="" class="form-label">Nama Kegiatan</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Kegiatan Pelatihan" aria-label="Nama Kegiatan Pelatihan" width="50%" name="nama_kegiatan" required>
                                </div>
                                <!-- Bidang Penyelenggara -->
                                <label for="" class="form-label">Bidang Penyelenggara</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%" name="bidang_penyelenggara" required>
                                </div>
                                <!-- Jumlah Peserta -->
                                <label for="jumlah" class="form-label">Jumlah Peserta</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%" name="jml_peserta" required>
                                </div>
                                <!-- Link Sertifikat -->
                                <label for="" class="form-label">Link Sertifikat</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%" name="link_sertifikat" required>
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
                    </div>
                    {{-- end pelatihan --}}

                    {{-- sertfifikasi --}}
                    <div class="tab-pane fade" id="nav-sertifikasi" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <div class="col-12 py-3 bg-dark">
                            <form action="/dashboard/sertifikasi" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Date -->
                                <label for="" class="form-label">Tanggal</label>
                                <div class="input-group date mb-3">
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tanggal" autocomplete="off" required>
                                </div>
                                <!-- Nama Kegiatan -->
                                <label for="" class="form-label">Nama Kegiatan</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nama Kegiatan Sertifikasi" aria-label="Nama Kegiatan Sertifikasi" width="50%" name="nama_kegiatan" required>
                                </div>
                                <!-- Bidang Penyelenggara -->
                                <label for="" class="form-label">Bidang Penyelenggara</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%" name="bidang_penyelenggara" required>
                                </div>
                                <!-- Jumlah Peserta -->
                                <label for="jumlah" class="form-label">Jumlah Peserta</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%" name="jml_peserta" required>
                                </div>
                                <!-- Link Sertifikat -->
                                <label for="" class="form-label">Link Sertifikat</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%" name="link_sertifikat" required>
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
                    </div>
                    {{-- end sertifikasi --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
