@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header & Search Bar -->
    <div class="card card-rounded shadow-sm border-0 bg-primary-custom text-white p-5 mb-5 mt-3 text-center">
        <h2 class="fw-bold mb-3">Temukan Perawat Terbaik Untuk Anda</h2>
        <p class="mb-4">Cari berdasarkan nama, spesialisasi, atau lokasi terdekat.</p>

        <form action="#" method="GET" class="d-flex flex-column flex-md-row gap-2 justify-content-center mx-auto" style="max-width: 800px;">
            <input type="text" name="search" class="form-control form-control-lg rounded-pill px-4" placeholder="Cari nama perawat...">
            <select name="spesialisasi" class="form-select form-select-lg rounded-pill px-4">
                <option value="">Semua Spesialisasi</option>
                <option value="lansia">Perawatan Lansia</option>
                <option value="pasca-operasi">Pasca Operasi</option>
                <option value="bayi">Perawatan Bayi & Anak</option>
                <option value="umum">Perawatan Umum</option>
            </select>
            <button type="submit" class="btn btn-custom bg-accent text-white px-5 rounded-pill shadow-sm">Cari</button>
        </form>
    </div>

    <!-- Hasil Pencarian / List Perawat -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary-custom">Hasil Pencarian (12 Perawat)</h4>
        <a href="{{ route('nearby') }}" class="btn btn-outline-primary rounded-pill">📍 Lihat yang Terdekat</a>
    </div>

    <div class="row g-4">
        <!-- Card Perawat 1 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-rounded shadow-sm border-0 h-100">
                <img src="https://images.unsplash.com/photo-1594824813566-7885a3964478?auto=format&fit=crop&q=80&w=400"
                    class="card-img-top" alt="Nurse" style="height: 220px; object-fit: cover; border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="fw-bold text-primary-custom mb-0">Ns. Sarah Amalia, S.Kep</h5>
                        <span class="badge bg-success rounded-pill">⭐ 4.9</span>
                    </div>
                    <p class="text-accent fw-bold small mb-3">Spesialis Perawatan Lansia</p>

                    <ul class="list-unstyled text-muted small mb-4">
                        <li class="mb-1"><i class="bi bi-geo-alt"></i> Jakarta Selatan (Bisa ke rumah)</li>
                        <li class="mb-1"><i class="bi bi-briefcase"></i> Pengalaman 5 Tahun</li>
                        <li><i class="bi bi-card-checklist"></i> STR Aktif</li>
                    </ul>

                    <!-- Link mengarah ke halaman detail -->
                    <a href="{{ url('/directory/1') }}" class="btn btn-custom bg-primary-custom w-100 shadow-sm">Lihat Profil & Jadwal</a>
                </div>
            </div>
        </div>

        <!-- Card Perawat 2 -->
        <div class="col-md-6 col-lg-4">
            <div class="card card-rounded shadow-sm border-0 h-100">
                <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=400"
                    class="card-img-top" alt="Nurse" style="height: 220px; object-fit: cover; border-top-left-radius: 24px; border-top-right-radius: 24px;">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="fw-bold text-primary-custom mb-0">Bagus Rian, A.Md.Kep</h5>
                        <span class="badge bg-success rounded-pill">⭐ 4.8</span>
                    </div>
                    <p class="text-accent fw-bold small mb-3">Perawatan Umum & Luka</p>

                    <ul class="list-unstyled text-muted small mb-4">
                        <li class="mb-1"><i class="bi bi-geo-alt"></i> Jakarta Barat (Bisa ke rumah)</li>
                        <li class="mb-1"><i class="bi bi-briefcase"></i> Pengalaman 3 Tahun</li>
                        <li><i class="bi bi-card-checklist"></i> STR Aktif</li>
                    </ul>

                    <a href="{{ url('/directory/2') }}" class="btn btn-custom bg-primary-custom w-100 shadow-sm">Lihat Profil & Jadwal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection