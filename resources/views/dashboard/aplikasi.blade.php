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
                        <div class="row form-group mt-4 bg-light" style="border-radius: 10px">
                            <div class="col-lg-6">
                                <form action="/dashboard/aplikasi" method="POST">
                                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                                            <h1 class="h2">Tambah Data Aplikasi</h1>
                                    </div>
                                    @csrf
                                    <!-- Nama Aplikasi -->
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Aplikasi</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Link Aplikasi -->
                                    <div class="mb-3">
                                        <label for="linkAplikasi" class="form-label">Link Aplikasi</label>
                                        <input type="text" class="form-control @error('linkAplikasi') is-invalid @enderror" id="linkAplikasi" name="linkAplikasi" required autofocus value="{{ old('linkAplikasi') }}">
                                        @error('linkAplikasi')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <!-- Deskripsi Aplikasi -->
                                    <div class="mb-3">
                                        <label for="body" class="form-label">Deskripsi</label>
                                        @error('body')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>
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

<script>
      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
      })
</script>
@endsection
