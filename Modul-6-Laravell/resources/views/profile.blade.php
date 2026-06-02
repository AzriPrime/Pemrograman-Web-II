@extends('layouts.app')

@section('content')
<div class="row g-4">
    <!-- Kolom Profil Identitas -->
    <div class="col-lg-4">
        <div class="card p-4 text-center">
            <div class="mb-3">
                <img src="{{ asset($student['gambar']) }}" alt="{{ $student['nama'] }}" class="profile-img">
            </div>
            <h4 class="fw-bold mb-1">{{ $student['nama'] }}</h4>
            <p class="text-muted font-monospace mb-3">NIM: {{ $student['nim'] }}</p>
            
            <hr>
            
            <div class="text-start">
                <div class="mb-3">
                    <label class="fw-bold text-secondary small">Asal Prodi</label>
                    <p class="mb-0 text-dark">{{ $student['asal_prodi'] }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="fw-bold text-secondary small">Hobi</label>
                    <p class="mb-0 text-dark">{{ $student['hobi'] }}</p>
                </div>
                
                <div class="mb-3">
                    <label class="fw-bold text-secondary small">Skill</label>
                    <div>
                        @php $skills = explode(',', $student['skill']); @endphp
                        @foreach($skills as $skill)
                            <span class="badge bg-secondary me-1 mb-1">{{ trim($skill) }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kolom Kegiatan/Pengalaman -->
    <div class="col-lg-8">
        <h3 class="fw-bold mb-4">Pengalaman Berkesan</h3>
        <div class="row g-4">
            @foreach($experiences as $exp)
                <div class="col-md-6">
                    <div class="card h-100 d-flex flex-column">
                        <img src="{{ asset($exp['image']) }}" class="card-img-top experience-img" alt="{{ $exp['title'] }}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark">{{ $exp['title'] }}</h5>
                            <p class="text-primary small font-monospace mb-2">{{ $exp['time'] }}</p>
                            <p class="card-text text-muted flex-grow-1">
                                {{ Str::limit($exp['description'], 100) }}
                            </p>
                            <a href="{{ url('experience/' . $exp['id']) }}" class="btn btn-outline-primary btn-sm mt-3">Detail Kegiatan</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
