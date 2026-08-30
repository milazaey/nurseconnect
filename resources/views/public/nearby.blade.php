@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 text-center mb-5">
        <h2 class="fw-bold text-dark">Temukan Perawat Terdekat</h2>
        <p class="text-muted">Izinkan akses lokasi untuk melihat perawat profesional yang siap melayani di sekitar area Anda.</p>

        <!-- Tombol untuk meminta akses lokasi -->
        <button class="btn btn-primary btn-lg mt-3 rounded-pill px-4 shadow-sm">
            📍 Gunakan Lokasi Saat Ini
        </button>
    </div>

    <!-- Kotak Dummy untuk Peta / Hasil -->
    <div class="col-md-10">
        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
            <div class="card-body bg-light d-flex align-items-center justify-content-center" style="height: 400px; border: 2px dashed #dee2e6;">
                <div class="text-center">
                    <h5 class="text-secondary fw-bold mb-2">🗺️ Area Peta Akan Muncul di Sini</h5>
                    <p class="text-muted small">Nanti kita bisa integrasikan dengan Google Maps API atau Leaflet.js</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection