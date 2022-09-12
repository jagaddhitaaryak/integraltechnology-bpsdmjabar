@extends('dashboard.layouts.main')

@section('title', 'Publikasi')

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
                                    <a href="/dashboard/publikasi/tambah-data" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                                @endcan
                            </div>
                        </div>
                        <div class="row form-group mt-2">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-bordered table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Judul Flyer</th>
                                            <th>Link Publikasi Internal</th>
                                            <th>Link Publikasi External</th>
                                        </tr>
                                    </thead>
                                    @if ($publikasi->count() > 0)
                                        @foreach ($publikasi as $data)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->judul_flyer }}</td>
                                                <td>{{ $data->link_pub_intern }}</td>
                                                <td>{{ $data->link_pub_extern }}</td>
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
