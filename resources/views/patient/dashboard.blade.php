@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8 flex justify-between items-end">
            <div>
                <h1 class="text-3xl font-bold text-text-dark">Dashboard Pasien</h1>
                <p class="text-gray-500 text-sm mt-1">Selamat datang kembali, pantau jadwal perawatan Anda di sini.</p>
            </div>
            <a href="/directory" class="bg-accent hover:bg-accent-hover text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-all shadow-sm">
                + Cari Perawat Baru
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Sesi Aktif -->
            <div class="lg:col-span-2 bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                <h2 class="font-bold text-lg text-text-dark border-b pb-3 mb-4">Sesi Perawatan Mendatang</h2>
                <div class="bg-primary/10 border border-primary/20 p-4 rounded-2xl flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-text-dark">Ns. Sarah Amalia, S.Kep</h3>
                        <p class="text-sm text-gray-600">Pendampingan Lansia • Besok, 09:00 WIB</p>
                    </div>
                    <span class="bg-primary text-white text-xs px-3 py-1 rounded-full font-semibold">Terkonfirmasi</span>
                </div>
            </div>

            <!-- Riwayat -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm h-fit">
                <h2 class="font-bold text-lg text-text-dark border-b pb-3 mb-4">Riwayat Medis</h2>
                <p class="text-sm text-gray-500 italic">Belum ada riwayat perawatan selesai.</p>
            </div>
        </div>
    </div>
</div>
@endsection