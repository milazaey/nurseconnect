@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center mt-4 mb-5">
    <div class="col-md-5">
        <div class="card card-rounded shadow-sm p-4 border-0">
            <div class="card-body text-center">
                <h3 class="fw-bold text-primary-custom mb-1">Buat Akun Baru</h3>
                <p class="text-muted mb-4">Gabung untuk mencari atau memberikan layanan perawatan.</p>

                <!-- Tampilkan Error validasi -->
                @if ($errors->any())
                <div class="alert alert-danger small text-start p-2 rounded-3">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ url('/register') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary small">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Masukkan nama lengkap" required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary small">Email</label>
                        <input type="email" name="email" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Masukkan email" required>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary small">Mendaftar Sebagai</label>
                        <select name="role" class="form-select rounded-pill px-3 py-2 bg-light border-0" required>
                            <option value="" disabled selected>Pilih Peran Anda</option>
                            <option value="patient">Pasien / Keluarga Pasien</option>
                            <option value="nurse">Perawat Profesional</option>
                            <option value="admin">Administrator (HRD)</option>
                        </select>
                    </div>

                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary small">Password</label>
                        <input type="password" name="password" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Buat password (min. 8 karakter)" required>
                    </div>

                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold text-secondary small">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Ketik ulang password" required>
                    </div>

                    <button type="submit" class="btn btn-custom bg-primary-custom w-100 fs-5 text-white">Daftar Sekarang</button>
                </form>

                <p class="mt-4 text-muted small">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-accent fw-bold text-decoration-none">Masuk di sini</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection