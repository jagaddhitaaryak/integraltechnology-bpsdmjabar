@extends('dashboard.layouts.main')

@section('title', 'Multimedia')

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
                                    <a href="/dashboard/multimedia/tambah-data" class="btn btn-sm btn-primary"><i class="fa-solid fa-plus"></i> Tambah Data</a>
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
                                            <th>Link Video</th>
                                            @can('super_admin')
                                            <th>Aksi</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    @if ($multimedia->count() > 0)
                                        @foreach ($multimedia as $data)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
                                                <td>{{ $data->nama_kegiatan }}</td>
                                                <td>{{ $data->link_video }}</td>
                                                @can('super_admin')
                                                <td>
                                                    <a href="/dashboard/multimedia/{{ $data->id }}/edit" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                                    <form action="/dashboard/multimedia/delete/{{ $data->id }}" method="post" class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                                                    </form>
                                                </td>
                                                @endcan
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
