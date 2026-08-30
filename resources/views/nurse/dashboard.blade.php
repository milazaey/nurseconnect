@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-text-dark">Portal Perawat</h1>
            <p class="text-gray-500 text-sm mt-1">Atur ketersediaan slot dan pantau permintaan pasien.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Permintaan Masuk -->
            <div class="lg:col-span-2 bg-white p-6 rounded-3xl border border-gray-100 shadow-sm">
                <h2 class="font-bold text-lg text-text-dark border-b pb-3 mb-4">Permintaan Booking Baru</h2>
                <div class="border border-gray-200 p-4 rounded-2xl flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div>
                        <h3 class="font-bold text-text-dark">Keluarga Bpk. Budi</h3>
                        <p class="text-sm text-gray-600">Rawat Luka Pasca-Operasi • 2 Hari Lagi, 13:00 WIB</p>
                    </div>
                    <div class="flex gap-2 w-full sm:w-auto">
                        <button class="w-full sm:w-auto bg-gray-100 hover:bg-gray-200 text-gray-700 px-4 py-2 rounded-xl text-sm font-medium transition-colors">Tolak</button>
                        <button class="w-full sm:w-auto bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-xl text-sm font-medium transition-colors">Terima</button>
                    </div>
                </div>
            </div>

            <!-- Status Akun -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm h-fit space-y-4">
                <h2 class="font-bold text-lg text-text-dark border-b pb-3">Status Verifikasi</h2>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600">✓</div>
                    <div>
                        <p class="font-bold text-sm text-text-dark">STR Aktif</p>
                        <p class="text-xs text-gray-500">Terverifikasi HRD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection