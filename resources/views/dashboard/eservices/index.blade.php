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
        {{-- <img class="rounded mx-auto d-block" src="/img/eservice.png" alt="" width="25%" height="25%"> --}}
        <div class="row">
            <div class="col-sm-12 mt-2">
                <div class="tab-content" id="nav-tabContent">
                    <section class="container">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <h3>Data {{ $title }}</h3>
                            </div>
                            <div class="col-lg-6 col-12 text-right">
                                <a href="/print" class="btn btn-sm btn-success"><i class="fa-solid fa-print"></i> Cetak</a>
                                @can('super_admin') 
                                    <a href="/dashboard/eservices/tambah-data" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                                @endcan
                            </div>
                        </div>
                        <div class="row form-group mt-2">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Jumlah Peserta</th>
                                            <th>Jadwal Kegiatan</th>
                                            <th>Data Peserta</th>
                                        </tr>
                                    </thead>
                                    @if ($eservices->count() > 0)
                                        @foreach ($eservices as $data)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->jml_peserta }}</td>
                                                <td><a class="btn btn-sm btn-primary " href="{{ $data->jadwal }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                                <td><a class="btn btn-sm btn-primary" href="{{ url('/data/download', $data->data_peserta) }}"><i class="fa-solid fa-download"></i>  Download</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data!</td>
                                        </tr>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
