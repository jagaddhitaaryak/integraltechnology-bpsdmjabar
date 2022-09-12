@extends('dashboard.layouts.main')

@section('title', 'Dashboard')

@section('content')
    <!-- List Grup  -->
    <section style="height: 70vh">
        <div class="container mt-3">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Selamat datang di halaman dashboard, {{ auth()->user()->name }} !!</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Tutup List Grup -->
@endsection