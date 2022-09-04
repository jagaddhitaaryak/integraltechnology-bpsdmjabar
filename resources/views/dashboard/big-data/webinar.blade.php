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
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="tab-content" id="nav-tabContent">
                    <section class="container">
                        <div class="row form-group">
                            <div class="col-lg-6 col-sm-12">
                                <form action="/dashboard/webinar" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" placeholder="Nama Kegiatan Webinar"
                                            aria-label="Nama Kegiatan Webinar" width="50%" name="nama_kegiatan">
                                    </div>
                                    <!-- Bidang Penyelenggara -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Bidang Penyelenggara"
                                            aria-label="Bidang Penyelenggara" width="50%" name="bidang_penyelenggara">
                                    </div>
                                    <!-- Jumlah Peserta -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Jumlah Peserta"
                                            aria-label="Jumlah Peserta" width="50%" name="jml_peserta">
                                    </div>
                                    <!-- Link Sertifikat -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Link Sertifikat"
                                            aria-label="Link Sertifikat" width="50%" name="link_sertifikat">
                                    </div>
                                    <!-- Upload Foto Kegiatan -->
                                    <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="inputGroupFile02" name="foto_kegiatan" accept=".jpg, .png">
                                        <label class="input-group-text" for="inputGroupFile02"><i
                                                class="fa-solid fa-upload"></i></label>
                                    </div>
                                    <!-- Upload Data Peserta -->
                                    <label for="formFile" class="form-label">Upload Data Peserta</label>
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
