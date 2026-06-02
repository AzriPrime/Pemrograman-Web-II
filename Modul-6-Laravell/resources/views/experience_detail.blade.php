@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <!-- Back Button -->
        <a href="{{ url('/profile') }}" class="btn btn-outline-secondary mb-4">&larr; Kembali ke Profil</a>
        
        <div class="card p-4 bg-white shadow-sm">
            <h2 class="fw-bold mb-1 text-dark">{{ $experience['title'] }}</h2>
            <p class="text-primary font-monospace mb-4">{{ $experience['time'] }}</p>
            
            <div class="mb-4">
                <img src="{{ asset($experience['image']) }}" alt="{{ $experience['title'] }}" class="experience-detail-img">
            </div>
            
            <div class="mb-4">
                <h5 class="fw-bold text-secondary mb-2">Deskripsi Kegiatan</h5>
                <p class="text-dark" style="line-height: 1.6;">{{ $experience['description'] }}</p>
            </div>
            
            <div class="p-3 bg-light border-start border-primary border-4 rounded">
                <h5 class="fw-bold text-primary mb-1">Kesan yang Dirasakan</h5>
                <p class="mb-0 text-muted"><em>"{{ $experience['impression'] }}"</em></p>
            </div>
        </div>
    </div>
</div>
@endsection
