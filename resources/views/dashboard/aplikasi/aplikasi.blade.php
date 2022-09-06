@extends('dashboard.layouts.main')

@section('title', 'Aplikasi')

@section('content')
<section>
    {{-- error message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end error message --}}
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-content" id="nav-tabContent">
                    <section class="container">
                        <img class="rounded mx-auto d-block" src="/img/aplikasi.png" alt="" width="30%" height="30%">
                        <div class="row form-group mt-4">
                            <div class="col-lg-6">
                                <form action="/dashboard/aplikasi" method="POST">
                                    @csrf
                                    <!-- Nama Aplikasi -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Nama Aplikasi" width="50%" name="nama_apl">
                                    </div>
                                    <!-- Link Aplikasi -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" placeholder="Link Aplikasi" width="50%" name="link_apl">
                                    </div>
                                    <!-- Deskripsi Aplikasi -->
                                    <div class="input-group mb-3 mt-3">
                                        <textarea class="form-control" placeholder="Deskripsi" style="height: 100px" name="desc_apl"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                            
                            <div class="col-lg-6">
                                <h1>View</h1>
                                <form action="download.php" method="post">
                                    <input type="submit" class="btn btn-primary" name="submit"
                                        value="Download File" />
                                </form>
                            </div>
                        </div>
                    </section>
                    <!-- Tutup Aplikasi -->
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Tutup List Grup -->
@endsection
