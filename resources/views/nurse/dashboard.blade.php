@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row mb-4 mt-2 align-items-center">
        <div class="col-md-8">
            <h3 class="fw-bold text-primary-custom mb-0">Dashboard Perawat 🩺</h3>
            <p class="text-muted">Selamat bertugas, {{ Auth::user()->name }}!</p>
        </div>
        <div class="col-md-4 text-md-end">
            <!-- Toggle Status Kerja -->
            <div class="form-check form-switch d-inline-block">
                <input class="form-check-input" type="checkbox" id="statusKerja" checked style="transform: scale(1.5);">
                <label class="form-check-label ms-2 fw-bold text-success" for="statusKerja">Tersedia Hari Ini</label>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Statistik -->
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 text-center">
                <h6 class="text-muted mb-2">Total Kunjungan</h6>
                <h2 class="fw-bold text-primary-custom mb-0">24</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 text-center">
                <h6 class="text-muted mb-2">Rating Rata-rata</h6>
                <h2 class="fw-bold text-accent mb-0">⭐ 4.9</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-rounded shadow-sm border-0 p-4 text-center">
                <h6 class="text-muted mb-2">Pendapatan Bulan Ini</h6>
                <h2 class="fw-bold text-success mb-0">Rp 3.5M</h2>
            </div>
        </div>

        <!-- Pekerjaan Mendatang -->
        <div class="col-12 mt-5">
            <h5 class="fw-bold text-primary-custom mb-3">Tugas Mendatang</h5>
            <div class="card card-rounded shadow-sm border-0">
                <div class="card-body p-0">
                    <table class="table table-hover mb-0">
                        <thead class="bg-light text-muted">
                            <tr>
                                <th class="p-3">Nama Pasien</th>
                                <th class="p-3">Layanan</th>
                                <th class="p-3">Waktu</th>
                                <th class="p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-3 fw-bold">Bpk. Ahmad Subarjo</td>
                                <td class="p-3">Perawatan Luka</td>
                                <td class="p-3 text-accent fw-bold">Hari ini, 14:00 WIB</td>
                                <td class="p-3">
                                    <button class="btn btn-sm btn-custom bg-primary-custom">Lihat Detail</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection