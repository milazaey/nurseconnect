@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4 mt-2">
        <div>
            <h3 class="fw-bold text-primary-custom mb-0">Halo, {{ Auth::user()->name }} 👋</h3>
            <p class="text-muted">Semoga harimu menyenangkan! Butuh bantuan medis apa hari ini?</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Shortcut Menu -->
        <div class="col-md-8">
            <div class="row g-3">
                <div class="col-sm-6">
                    <div class="card card-rounded shadow-sm border-0 bg-primary-custom text-white h-100 p-4">
                        <h5 class="fw-bold">Cari Perawat</h5>
                        <p class="small mb-4">Temukan perawat profesional sesuai kebutuhan medis Anda.</p>
                        <a href="{{ route('directory') }}" class="btn btn-custom bg-accent text-white mt-auto w-100">Cari Sekarang</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card card-rounded shadow-sm border-0 bg-light h-100 p-4">
                        <h5 class="fw-bold text-primary-custom">Perawat Terdekat</h5>
                        <p class="text-muted small mb-4">Pesan layanan cepat dari perawat di sekitar radius Anda.</p>
                        <a href="{{ route('nearby') }}" class="btn btn-outline-primary mt-auto w-100">Cek Lokasi</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jadwal Mendatang -->
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 h-100 p-4">
                <h5 class="fw-bold text-primary-custom border-bottom pb-2 mb-3">Jadwal Kunjungan</h5>

                <!-- Contoh Jadwal Aktif -->
                <div class="border rounded p-3 mb-3 border-start border-4 border-accent">
                    <p class="fw-bold mb-1 small">Besok, 09:00 WIB</p>
                    <p class="mb-0 text-muted small">Ns. Sarah Amalia, S.Kep</p>
                    <span class="badge bg-warning text-dark mt-2">Menunggu Kedatangan</span>
                </div>

                <button class="btn btn-sm btn-outline-secondary w-100">Lihat Riwayat Lengkap</button>
            </div>
        </div>
    </div>
</div>
@endsection