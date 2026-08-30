@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4 mt-2">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('directory') }}" class="text-decoration-none text-muted">Cari Perawat</a></li>
            <li class="breadcrumb-item active fw-bold text-primary-custom" aria-current="page">Profil Perawat</li>
        </ol>
    </nav>

    <div class="row g-4">
        <!-- Kolom Kiri: Profil & Foto -->
        <div class="col-lg-4">
            <div class="card card-rounded shadow-sm border-0 text-center p-4">
                <img src="https://images.unsplash.com/photo-1594824813566-7885a3964478?auto=format&fit=crop&q=80&w=400"
                    class="rounded-circle mx-auto mb-3 object-fit-cover shadow-sm"
                    alt="Nurse Profile"
                    style="width: 150px; height: 150px;">
                <h4 class="fw-bold text-primary-custom mb-1">Ns. Sarah Amalia, S.Kep</h4>
                <p class="text-accent fw-bold mb-3">Spesialis Perawatan Lansia</p>

                <div class="d-flex justify-content-center gap-2 mb-4">
                    <span class="badge bg-light text-dark border px-3 py-2">⭐ 4.9 (120 Ulasan)</span>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success px-3 py-2">Terverifikasi</span>
                </div>

                <hr class="text-muted">

                <div class="text-start mt-3">
                    <p class="text-muted small mb-2"><i class="bi bi-geo-alt-fill text-accent me-2"></i> Domisili: Jakarta Selatan</p>
                    <p class="text-muted small mb-2"><i class="bi bi-briefcase-fill text-accent me-2"></i> Pengalaman: 5 Tahun</p>
                    <p class="text-muted small mb-2"><i class="bi bi-card-checklist text-accent me-2"></i> No. STR: 123456789012345</p>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Detail & Booking -->
        <div class="col-lg-8">
            <div class="card card-rounded shadow-sm border-0 p-4 mb-4">
                <h5 class="fw-bold text-primary-custom mb-3">Tentang Perawat</h5>
                <p class="text-muted" style="line-height: 1.8;">
                    Saya adalah perawat profesional lulusan Universitas Indonesia dengan pengalaman 5 tahun menangani pasien lansia. Saya terbiasa dengan perawatan pasca stroke, pemasangan NGT, perawatan luka decubitus, serta pendampingan aktivitas harian lansia (ADL).
                </p>

                <h5 class="fw-bold text-primary-custom mt-4 mb-3">Layanan Medis</h5>
                <div class="d-flex flex-wrap gap-2 mb-3">
                    <span class="badge bg-light text-dark border p-2">Pendampingan Lansia</span>
                    <span class="badge bg-light text-dark border p-2">Perawatan Luka</span>
                    <span class="badge bg-light text-dark border p-2">Pemasangan Infus/NGT</span>
                    <span class="badge bg-light text-dark border p-2">Cek Tanda Vital</span>
                </div>
            </div>

            <!-- Form Pemesanan Singkat -->
            <div class="card card-rounded shadow-sm border-0 p-4 bg-primary-custom text-white">
                <h5 class="fw-bold mb-3">Pesan Layanan</h5>
                <p class="small mb-4">Pilih tanggal untuk menjadwalkan kunjungan perawat ke rumah Anda.</p>
                <form action="#" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small">Tanggal Kunjungan</label>
                            <input type="date" class="form-control rounded-pill">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small">Durasi Layanan</label>
                            <select class="form-select rounded-pill">
                                <option>1 Kali Kunjungan (Visit)</option>
                                <option>Shift 8 Jam</option>
                                <option>Shift 12 Jam</option>
                                <option>Live-in (24 Jam)</option>
                            </select>
                        </div>
                        <div class="col-12 mt-4">
                            <!-- Kalau user belum login, arahkan ke login. Kalau sudah, submit -->
                            <button type="submit" class="btn btn-custom bg-accent text-white w-100 rounded-pill fs-5 shadow-sm">
                                Lanjutkan Pemesanan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection