@extends('dashboard.layouts.main')

@section('title', 'Webinar')

@section('content')
    <!-- List Grup -->
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- Webinar -->
                        <section class="container">
                            <form>    
                                <div class="row form-group">
                                    <div class="col-12">   
                                        <!-- Date -->
                                        <div class="input-group date" id="datepicker" >
                                            <input type="text" class="form-control" placeholder="Tanggal">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <!-- Nama Kegiatan -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Nama Kegiatan Webinar" aria-label="Nama Kegiatan Webinar" width="50%">
                                        </div>
                                        <!-- Bidang Penyelenggara -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Bidang Penyelenggara" aria-label="Bidang Penyelenggara" width="50%">
                                        </div>
                                        <!-- Jumlah Peserta -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                        </div>
                                        <!-- Link Sertifikat -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Link Sertifikat" aria-label="Link Sertifikat" width="50%">
                                        </div>
                                        <!-- Upload Foto Kegiatan -->
                                        <label for="formFile" class="form-label">Upload Foto Kegiatan</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                        </div>
                                        <!-- Upload Data Peserta -->
                                        <label for="formFile" class="form-label">Upload Data Peserta</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02"><i class="fa-solid fa-upload"></i></label>
                                        </div>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                        <form action="download.php" method="post">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Tutup Webinar -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup List Grup -->
@endsection