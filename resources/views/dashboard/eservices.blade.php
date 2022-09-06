@extends('dashboard.layouts.main')

@section('title', 'E - Services')

@section('content')

<section>
    {{-- success message --}}
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
    {{-- end success message --}}

    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="tab-content" id="nav-tabContent">
                    <section class="container">
                        <div class="row form-group mt-4 bg-light" style="border-radius: 10px">
                            @can('super_admin')
                                {{-- input data area --}}
                            <div class="col-lg-6">
                                <h1>Input Data</h1>
                                <form action="/dashboard/eservices" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Date -->
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" name="tanggal" placeholder="Tanggal">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                        @error('tanggal')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Nama Kegiatan -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan"
                                            aria-label="Nama Kegiatan" width="50%">
                                    </div>
                                    <!-- Jumlah Peserta -->
                                    <div class="input-group mb-3 mt-3">
                                        <input type="text" name="jml_peserta" class="form-control" placeholder="Jumlah Peserta"
                                            aria-label="Jumlah Peserta" width="50%">
                                    </div>
                                    <!-- Jadwal Kegiatan -->
                                    <label for="formFile" class="form-label">Jadwal Kegiatan</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="jadwal" class="form-control" accept=".pdf">
                                        <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
                                    </div>
                                    <!-- Upload Data Peserta -->
                                    <label for="formFile" class="form-label">Upload Data Peserta</label>
                                    <div class="input-group mb-3">
                                        <input type="file" name="data_peserta" class="form-control" accept=".pdf">
                                        <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                            </div>
                            {{-- end --}}
                            
                            {{-- view data --}}
                            <div class="col-lg-6">
                                <h1>Data</h1>
                                <table class="table">
                                    <thead>
                                        <th>Tanggal</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Jumlah Peserta</th>
                                        <th>Jadwal Kegiatan</th>
                                        <th>Data Peserta</th>
                                    </thead>
                                    {{-- <tr>
                                        <td>{{ $eservices[0]->tanggal }}</td>
                                        <td>{{ $eservices[0]->nama_kegiatan }}</td>
                                        <td>{{ $eservices[0]->jml_peserta }}</td>
                                        <td><a href="{{ $eservices[0]->jadwal }}">Download</a></td>
                                        <td><a href="{{ url('/eservices[0]/download', $eservices[0]->data_peserta) }}">Download</a></td>
                                    </tr> --}}
                                </table>
                                <form action="download.php" method="post">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                </form>
                            </div>
                            {{-- end --}}
                            @endcan
                            
                            <div class="col-lg-12">
                                <form class="d-flex" role="search">
                                <a href="/dashboard/" class="btn btn-dark mb-3">Tambah Data</a>
                                    <input class="form-control me-2 mb-3" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success mb-3" type="submit">Search</button>
                                </form>
                                <table class="table">
                                    <thead>
                                        <th>Tanggal</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Jumlah Peserta</th>
                                        <th>Jadwal Kegiatan</th>
                                        <th>Data Peserta</th>
                                    </thead>
                                    @foreach ($eservices as $data)
                                    <tr>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>{{ $data->nama_kegiatan }}</td>
                                        <td>{{ $data->jml_peserta }}</td>
                                        <td><a href="{{ $data->jadwal }}">Download</a></td>
                                        <td><a href="{{ url('/data/download', $data->data_peserta) }}">Download</a></td>
                                    </tr>
                                    @endforeach
                                </table>
                                <form action="download.php" method="post">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Download File" />
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
