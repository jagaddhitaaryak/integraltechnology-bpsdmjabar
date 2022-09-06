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
                        <img class="rounded mx-auto d-block" src="/img/eservice.png" alt="" width="25%" height="25%">
                        <div class="row form-group mt-4">
                            <a href="/dashboard/eservices/tambah">
                                <button class="btn btn-primary">Tambah Data</button>
                            </a>
                            <div class="col-lg-12">
                                <h1>Data</h1>
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
