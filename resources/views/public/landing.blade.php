@extends('layouts.app')

@section('content')
<div class="row g-4 align-items-center mt-2">
    <!-- Kolom Kiri: Teks & CTA -->
    <div class="col-lg-6">
        <div class="card card-rounded shadow-sm border-0 p-5 bg-white h-100">
            <span class="badge bg-soft-accent text-accent badge-pill mb-4 w-auto d-inline-block" style="max-width: max-content;">
                ✦ Layanan Medis Ke Rumah
            </span>
            <h1 class="display-5 fw-bold text-primary-custom mb-3">
                Rawat Keluarga Tercinta Tanpa Harus Keluar Rumah.
            </h1>
            <p class="text-muted mb-4 fs-5">
                NurseConnect menghubungkan Anda dengan perawat profesional dan tersertifikasi di sekitar Anda. Pesan jadwal dengan fleksibel!
            </p>
            <div class="d-flex gap-3">
                <a href="{{ url('/directory') }}" class="btn btn-custom bg-accent w-100 fs-5 text-white shadow-sm text-decoration-none">Cari Perawat</a>
                <a href="{{ route('register') }}" class="btn btn-custom bg-primary-custom w-100 fs-5 shadow-sm text-decoration-none">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Gambar Banner -->
    <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&q=80&w=800"
            alt="Nurse Banner"
            class="img-fluid w-100 shadow-sm"
            style="height: 450px; object-fit: cover; border-radius: 24px;">
    </div>
</div>
@endsection