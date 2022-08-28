@extends('dashboard.layouts.main')

@section('title', 'Multimedia')

@section('content')
    <!-- List Grup -->
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12 mt-2">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- Multimedia -->
                        <section class="container">
                            <form>
                                <img src="/img/multimedia.png" alt="" width="30%" height="30%">
                                <div class="row form-group">
                                    <div class="col-sm-12">   
                                        <!-- Date -->
                                        <div class="input-group date" id="multimedia" >
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
                                        <!-- Link Video -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Link Video" aria-label="Link Video" width="50%">
                                        </div>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                        <form action="download.php" method="post">
                                            <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Tutup Multimedia -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup List Grup -->
@endsection