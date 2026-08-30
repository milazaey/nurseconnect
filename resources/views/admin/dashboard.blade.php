@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-4 mt-2">
        <h3 class="fw-bold text-primary-custom mb-0">Admin Control Panel ⚙️</h3>
        <p class="text-muted">Pantau aktivitas sistem NurseConnect hari ini.</p>
    </div>

    <!-- Statistik Sistem -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 bg-primary-custom text-white">
                <p class="mb-1">Total Pasien</p>
                <h2 class="fw-bold mb-0">1,204</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 bg-accent text-white">
                <p class="mb-1">Perawat Terdaftar</p>
                <h2 class="fw-bold mb-0">342</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 bg-light border-start border-4 border-warning">
                <p class="mb-1 text-muted">Pesanan Aktif Hari Ini</p>
                <h2 class="fw-bold text-dark mb-0">58</h2>
            </div>
        </div>
    </div>

    <!-- Menunggu Verifikasi -->
    <h5 class="fw-bold text-primary-custom mb-3">Perawat Menunggu Verifikasi (STR)</h5>
    <div class="card card-rounded shadow-sm border-0 p-4">
        <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
            <div>
                <h6 class="fw-bold mb-1">Rizky Febrian, S.Kep</h6>
                <p class="text-muted small mb-0">Mendaftar 2 jam yang lalu</p>
            </div>
            <div>
                <button class="btn btn-sm btn-success me-2">Setujui</button>
                <button class="btn btn-sm btn-outline-danger">Tolak</button>
            </div>
        </div>
    </div>
</div>
@endsection