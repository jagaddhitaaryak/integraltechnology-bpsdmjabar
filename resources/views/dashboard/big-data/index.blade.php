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
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-6">
                        <h3>Data</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a href="/print" class="btn btn-sm btn-success"><i class="fa-solid fa-print"></i> Cetak</a>
                        @can('super_admin') 
                        <a href="/dashboard/big-data/tambah-data" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                        @endcan
                    </div>
                </div>
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
                        <div class="col-12 py-3">
                            <div class="row form-group mt-2">
                                <div class="col-lg-12 table-responsive">
                                    <table class="table table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                        <thead>
                                            <th>Tanggal</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Bidang Penyelenggara</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Link Sertifikat</th>
                                            <th>Foto Kegiatan</th>
                                            <th>Data Peserta</th>
                                        </thead>
                                        @if ($webinar->count())
                                            @foreach ($webinar as $data)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->bidang_penyelenggara }}</td>
                                                <td>{{ $data->jml_peserta }}</td>
                                                <td>{{ $data->link_sertifikat }}</td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data!</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end webinar --}}

                    {{-- pelatihan --}}
                    <div class="tab-pane fade" id="nav-pelatihan" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="col-12 py-3">
                            <div class="row form-group mt-2">
                                <div class="col-lg-12">
                                    <table class="table table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                        <thead>
                                            <th>Tanggal</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Bidang Penyelenggara</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Link Sertifikat</th>
                                            <th>Foto Kegiatan</th>
                                            <th>Data Peserta</th>
                                        </thead>
                                        @if ($pelatihan->count())
                                            @foreach ($pelatihan as $data)
                                            <tr>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->bidang_penyelenggara }}</td>
                                                <td>{{ $data->jml_peserta }}</td>
                                                <td>{{ $data->link_sertifikat }}</td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data!</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end pelatihan --}}

                    {{-- sertfifikasi --}}
                    <div class="tab-pane fade" id="nav-sertifikasi" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                        <div class="col-12 py-3">
                            <div class="row form-group mt-2">
                                <div class="col-lg-12 table-responsive">
                                    <table class="table table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                        <thead>
                                            <th>Tanggal</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Bidang Penyelenggara</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Link Sertifikat</th>
                                            <th>Foto Kegiatan</th>
                                            <th>Data Peserta</th>
                                        </thead>
                                        @if ($sertifikasi->count())
                                            @foreach ($sertifikasi as $data)
                                            <tr>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->bidang_penyelenggara }}</td>
                                                <td>{{ $data->jml_peserta }}</td>
                                                <td>{{ $data->link_sertifikat }}</td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="7" class="text-center">Tidak ada data!</td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end sertifikasi --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
