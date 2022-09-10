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
                            <div class="col-6">
                                <h3>Data {{ $title }}</h3>
                            </div>
                            <div class="col-6 text-right">
                                <a href="/print" class="btn btn-sm btn-success"><i class="fa-solid fa-print"></i> Cetak</a>
                                @can('super_admin') 
                                <a href="/dashboard/aplikasi/tambah-data" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
                                @endcan
                            </div>
                        </div>
                        <div class="row form-group mt-2">
                            <div class="col-lg-12 table-responsive">
                                <table class="table table-dark table-striped align-items-center" id="dataTable" style="width: 100%">
                                    <thead>
                                        <th>Nama Aplikasi</th>
                                        <th>Link Aplikasi</th>
                                        <th>Deskripsi Aplikasi</th>
                                    </thead>
                                    @if ($aplikasi->count())
                                        @foreach ($aplikasi as $data)
                                        <tr>
                                            <td>{{ $data->nama_apl }}</td>
                                            <td>{{ $data->link_apl }}</td>
                                            <td>{{ $data->desc_apl }}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="text-center">Tidak ada data!</td>
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
