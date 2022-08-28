@extends('dashboard.layouts.main')

@section('title', 'E - Services')

@section('content')
    <!-- List Grup -->
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- E-Services -->
                        <section class="container">
                            <form>    
                                <img class="rounded mx-auto d-block" src="/img/eservice.png" alt="" width="30%" height="30%">
                                <div class="row form-group">
                                    <div class="col-sm-12">   
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
                                            <input type="text" class="form-control" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%">
                                        </div>
                                        <!-- Jumlah Peserta -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
                                        </div>
                                        <!-- Jadwal Kegiatan -->
                                        <label for="formFile" class="form-label">Jadwal Kegiatan</label>
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
                        <!-- Tutup E-Services -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup List Grup -->
@endsection