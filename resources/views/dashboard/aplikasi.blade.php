@extends('dashboard.layouts.main')

@section('title', 'Aplikasi')

@section('content')
    <!-- List Grup -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content" id="nav-tabContent">
                        <!-- Aplikasi -->
                        <section class="container">
                            <form>
                                <img class="rounded mx-auto d-block" src="/img/aplikasi.png" alt="" width="30%" height="30%">
                                <div class="row form-group mt-3">
                                    <div class="col-sm-12">
                                        <!-- Nama Aplikasi -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Nama Aplikasi"
                                                aria-label="Nama Aplikasi" width="50%">
                                        </div>
                                        <!-- Link Aplikasi -->
                                        <div class="input-group mb-3 mt-3">
                                            <input type="text" class="form-control" placeholder="Link Aplikasi"
                                                aria-label="Link Aplikasi" width="50%">
                                        </div>
                                        <!-- Deskripsi Aplikasi -->
                                        <div class="input-group mb-3 mt-3">
                                            <textarea class="form-control" placeholder="Deskripsi"
                                                id="floatingTextarea2" style="height: 100px"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-primary">Simpan</button>
                                        <form action="download.php" method="post">
                                            <input type="submit" class="btn btn-primary" name="submit"
                                                value="Download File" />
                                        </form>
                                    </div>
                                </div>
                            </form>
                        </section>
                        <!-- Tutup Aplikasi -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup List Grup -->
@endsection
