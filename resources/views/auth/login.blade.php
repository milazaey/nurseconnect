@extends('layouts.app')

@section('content')
<div class="row justify-content-center align-items-center mt-5">
    <div class="col-md-5">
        <div class="card card-rounded shadow-sm p-4 border-0">
            <div class="card-body text-center">
                <h3 class="fw-bold text-primary-custom mb-1">Selamat Datang</h3>
                <p class="text-muted mb-4">Masuk untuk melanjutkan ke akun Anda.</p>

                <!-- Tampilkan Error jika login gagal -->
                @if ($errors->any())
                <div class="alert alert-danger small text-start p-2 rounded-3">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3 text-start">
                        <label class="form-label fw-semibold text-secondary small">Email</label>
                        <!-- Tambahkan name="email" -->
                        <input type="email" name="email" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-4 text-start">
                        <label class="form-label fw-semibold text-secondary small">Password</label>
                        <!-- Tambahkan name="password" -->
                        <input type="password" name="password" class="form-control rounded-pill px-3 py-2 bg-light border-0" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="btn btn-custom bg-accent w-100 fs-5 text-white">Masuk Sekarang</button>
                </form>

                <p class="mt-4 text-muted small">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-primary-custom fw-bold text-decoration-none">Daftar di sini</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection