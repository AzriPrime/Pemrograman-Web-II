@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center py-5">
        <h1 class="display-4 mb-4 fw-bold">Halo</h1>
        <p class="lead text-muted mb-5">Ini adalah website hasil praktikum 6 yang dibangun menggunakan framework Laravel dengan konsep MVC.</p>
        
        <div class="card p-4 bg-white shadow-sm mx-auto" style="max-width: 500px;">
            <div class="card-body">
                <h5 class="card-title text-uppercase text-secondary mb-3" style="font-size: 0.85rem; letter-spacing: 1.5px;"> Modul-6</h5>
                <h3 class="fw-bold mb-1 text-dark">{{ $nama }}</h3>
                <p class="text-primary mb-0 font-monospace">NIM: {{ $nim }}</p>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ url('/profile') }}" class="btn btn-primary btn-lg px-4 py-2">Lihat Profil Lengkap</a>
        </div>
    </div>
</div>
@endsection
