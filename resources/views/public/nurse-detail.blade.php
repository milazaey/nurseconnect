@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen py-10">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <a href="/directory" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-primary mb-6 transition-colors">
            ← Kembali ke Direktori
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- PROFIL PERAWAT (Kiri) -->
            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col sm:flex-row gap-6 items-start">
                    <img src="https://images.unsplash.com/photo-1594824813566-7885a3964478?auto=format&fit=crop&q=80&w=300" class="w-32 h-32 rounded-2xl object-cover shrink-0">
                    <div class="space-y-3">
                        <span class="bg-emerald-50 text-emerald-600 border border-emerald-200 text-xs px-3 py-1 rounded-full font-semibold">
                            ✓ Verified STR & Ijazah Dikti
                        </span>
                        <h1 class="text-2xl font-bold text-text-dark">Ns. Sarah Amalia, S.Kep</h1>
                        <p class="text-sm text-gray-500">Perawat Mandiri • Spesialis Pasca-Operasi & Pendampingan Lansia</p>
                        <div class="flex items-center gap-4 text-xs text-gray-600 pt-2">
                            <span>📍 Kemang, Jakarta Selatan</span>
                            <span>⭐ 4.9 (28 Rating)</span>
                        </div>
                    </div>
                </div>

                <!-- Bio & Pendidikan -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm space-y-4">
                    <h3 class="font-bold text-lg text-text-dark">Tentang & Pengalaman</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Lulusan S1 Keperawatan Universitas Indonesia dengan pengalaman 2 tahun di unit perawatan intensif. Berfokus pada pelayanan perawatan luka medis, manajemen infus, serta pemantauan tanda-tanda vital harian pasien di rumah.
                    </p>
                    <div class="border-t pt-4">
                        <h4 class="font-semibold text-xs text-gray-400 uppercase tracking-wider mb-2">Legalitas Berkas</h4>
                        <div class="flex gap-4 text-xs font-medium text-primary">
                            <span>📄 STR Active (No: 310293812)</span>
                            <span>🎓 Ijazah S.Kep (Verified)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PICKER SLOT & BOOKING (Kanan) -->
            <div class="lg:col-span-1">
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm sticky top-28 space-y-6">
                    <h3 class="font-bold text-lg text-text-dark border-b pb-3">Pesan Sesi Perawatan</h3>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Pilih Tanggal</label>
                        <input type="date" value="2026-08-30" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 text-sm text-text-dark">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-gray-600 mb-2">Pilih Slot Jam Ketersediaan</label>
                        <div class="grid grid-cols-2 gap-2 text-xs">
                            <button class="border border-primary bg-primary/10 text-primary py-2 rounded-xl font-medium">09:00 - 11:00 WIB</button>
                            <button class="border border-gray-200 hover:border-primary text-gray-600 py-2 rounded-xl font-medium">13:00 - 15:00 WIB</button>
                            <button class="border border-gray-200 hover:border-primary text-gray-600 py-2 rounded-xl font-medium">16:00 - 18:00 WIB</button>
                            <button class="border border-gray-200 opacity-50 bg-gray-100 text-gray-400 py-2 rounded-xl cursor-not-allowed">19:00 (Full)</button>
                        </div>
                    </div>

                    <div class="border-t border-b py-3 flex justify-between items-center text-sm">
                        <span class="text-gray-500">Biaya Layanan / Sesi</span>
                        <span class="font-bold text-lg text-primary">Rp 150.000</span>
                    </div>

                    <a href="/patient/dashboard" class="w-full block text-center bg-accent hover:bg-accent-hover text-white font-medium py-3 rounded-xl text-sm transition-all shadow-sm">
                        Konfirmasi Booking
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection