@extends('layouts.app')

@section('content')
<div class="row g-4">
    <!-- Kolom Kiri: Teks & CTA -->
    <div class="col-lg-7">
        <div class="card card-rounded shadow-sm h-100 p-5 bg-white">
            <span class="badge bg-soft-accent text-accent badge-pill mb-4 w-auto d-inline-block" style="max-width: max-content;">
                ✦ Layanan Medis Ke Rumah
            </span>
            <h1 class="display-5 fw-bold text-primary-custom mb-3">
                Layanan Perawat Medis <br> <span class="text-accent">Langsung ke Rumah</span> Anda
            </h1>
            <p class="text-muted mb-4 fs-5">
                Menghubungkan pasien pasca-rawat inap dengan perawat profesional tersertifikasi. Cepat, aman, dan transparan.
            </p>
            <div class="d-flex gap-3">
                <a href="{{ route('register') }}" class="btn btn-custom bg-primary-custom">Pesan Perawat</a>
                <a href="{{ url('/directory') }}" class="btn btn-custom btn-light border">Lihat Katalog ></a>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Gambar/Hero Visual -->
    <div class="col-lg-5">
        <div class="card card-rounded shadow-sm h-100 bg-primary-custom position-relative overflow-hidden" style="min-height: 350px;">
            <!-- Placeholder untuk gambar perawat. Nanti kamu bisa ganti src-nya pakai gambar sungguhan -->
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?fit=crop&w=600&q=80"
                class="w-100 h-100 object-fit-cover opacity-75" alt="Perawat">

            <!-- Box Rating Melayang khas desain referensi -->
            <div class="position-absolute bottom-0 end-0 m-4 bg-white p-3 rounded-4 shadow">
                <span class="fw-bold fs-5 text-dark">4.9/5 ★</span>
                <p class="text-muted small mb-0">Rating Kepuasan</p>
            </div>
        </div>
    </div>
</div>
@endsection@extends('layouts.app')

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
                <a href="{{ route('directory') }}" class="btn btn-custom bg-accent w-100 fs-5 text-white shadow-sm">Cari Perawat</a>
                <a href="{{ route('register') }}" class="btn btn-custom bg-primary-custom w-100 fs-5 shadow-sm">Daftar Sekarang</a>
            </div>
        </div>
    </div>

    <!-- Kolom Kanan: Gambar -->
    <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1576091160550-2173ff9e5ee5?auto=format&fit=crop&q=80&w=800"
            alt="Nurse Banner"
            class="img-fluid w-100 shadow-sm"
            style="height: 450px; object-fit: cover; border-radius: 24px;">
    </div>
</div>
@endsection