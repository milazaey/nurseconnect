@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="text-center mb-5 mt-3">
        <h2 class="fw-bold text-primary-custom">Perawat Terdekat di Sekitar Anda</h2>
        <p class="text-muted">Deteksi lokasi Anda untuk menemukan perawat profesional dalam radius 5-10 km.</p>
        <button class="btn btn-custom bg-primary-custom px-4 py-2 mt-2 shadow-sm">📍 Deteksi Lokasi Saya</button>
    </div>

    <div class="row g-4">
        <!-- Card Perawat 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-rounded shadow-sm border-0 h-100">
                <img src="https://images.unsplash.com/photo-1594824813566-7885a3964478?auto=format&fit=crop&q=80&w=400"
                    class="card-img-top" alt="Nurse" style="height: 220px; object-fit: cover; border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary-custom mb-1">Ns. Sarah Amalia, S.Kep</h5>
                    <p class="text-muted small mb-3">
                        <span class="text-accent fw-bold">📍 1.2 km</span> dari Anda (Sangat Dekat)
                    </p>
                    <span class="badge bg-success mb-3 rounded-pill px-3 py-2">Tersedia Hari Ini</span>
                    <p class="text-muted text-sm mb-4">Spesialis pendampingan lansia dan rawat pasca-inap. Tersertifikasi STR Nasional.</p>
                    <a href="#" class="btn btn-custom bg-accent w-100 text-white">Lihat Profil & Pesan</a>
                </div>
            </div>
        </div>

        <!-- Card Perawat 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-rounded shadow-sm border-0 h-100">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=400"
                    class="card-img-top" alt="Nurse" style="height: 220px; object-fit: cover; border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary-custom mb-1">Bagus Rian, A.Md.Kep</h5>
                    <p class="text-muted small mb-3">
                        <span class="text-accent fw-bold">📍 3.5 km</span> dari Anda
                    </p>
                    <span class="badge bg-warning text-dark mb-3 rounded-pill px-3 py-2">Tersedia Besok</span>
                    <p class="text-muted text-sm mb-4">Berpengalaman dalam tindakan medis ringan, pasang infus, dan ganti perban.</p>
                    <a href="#" class="btn btn-custom bg-accent w-100 text-white">Lihat Profil & Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection