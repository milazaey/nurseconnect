@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header Halaman -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-text-dark">Direktori & Smart Search Perawat</h1>
            <p class="text-gray-500 text-sm mt-1">Temukan perawat tersertifikasi terdekat sesuai kebutuhan medis keluarga Anda.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- PANEL FILTER (Kiri) -->
            <div class="lg:col-span-1 bg-white p-6 rounded-3xl border border-gray-100 shadow-sm h-fit space-y-6">
                <h2 class="font-bold text-lg text-text-dark border-b pb-3">Filter Pencarian</h2>

                <!-- Filter Jarak -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-2">Jarak Maksimal</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 text-sm text-text-dark focus:outline-none focus:border-primary">
                        <option value="5"> s/d 5 Km (Terdekat)</option>
                        <option value="10"> s/d 10 Km</option>
                        <option value="20"> s/d 20 Km</option>
                    </select>
                </div>

                <!-- Filter Jenis Tindakan -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-2">Jenis Layanan</label>
                    <div class="space-y-2 text-sm text-text-dark">
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" checked class="rounded text-primary focus:ring-primary">
                            <span>Rawat Pasca-Inap</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" checked class="rounded text-primary focus:ring-primary">
                            <span>Pendampingan Lansia</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="rounded text-primary focus:ring-primary">
                            <span>Ganti Perban / Luka</span>
                        </label>
                        <label class="flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" class="rounded text-primary focus:ring-primary">
                            <span>Pasang Infus / Catheter</span>
                        </label>
                    </div>
                </div>

                <!-- Filter Slot Jam Kerja -->
                <div>
                    <label class="block text-xs font-semibold text-gray-600 uppercase mb-2">Ketersediaan Slot</label>
                    <select class="w-full bg-gray-50 border border-gray-200 rounded-xl px-3 py-2 text-sm text-text-dark focus:outline-none focus:border-primary">
                        <option>Semua Slot Waktu</option>
                        <option>Pagi (08.00 - 12.00)</option>
                        <option>Siang (13.00 - 17.00)</option>
                        <option>Malam (18.00 - 21.00)</option>
                    </select>
                </div>

                <button class="w-full bg-primary hover:bg-primary-dark text-white font-medium py-2.5 rounded-xl text-sm transition-all shadow-sm">
                    Terapkan Filter
                </button>
            </div>

            <!-- NURSES LISTING (Kanan) -->
            <div class="lg:col-span-3 space-y-4">

                <!-- Card Perawat 1 -->
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex flex-col sm:flex-row items-center gap-6 hover:border-primary/50 transition-all">
                    <img src="https://images.unsplash.com/photo-1594824813566-7885a3964478?auto=format&fit=crop&q=80&w=200" alt="Nurse" class="w-24 h-24 rounded-2xl object-cover shrink-0">

                    <div class="flex-grow space-y-2 text-center sm:text-left">
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
                            <h3 class="font-bold text-lg text-text-dark">Ns. Sarah Amalia, S.Kep</h3>
                            <span class="bg-emerald-50 text-emerald-600 border border-emerald-200 text-xs px-2.5 py-0.5 rounded-full font-semibold flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Verified STR
                            </span>
                        </div>
                        <p class="text-xs text-gray-500">Lulusan S1 Keperawatan • Pengalaman 2 Tahun</p>

                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-600 pt-1">
                            <span class="flex items-center gap-1">📍 1.2 km dari Anda</span>
                            <span class="flex items-center gap-1">⭐ 4.9 (28 Sesi)</span>
                            <span class="font-bold text-primary">Rp 150.000 / Sesi</span>
                        </div>
                    </div>

                    <a href="/nurse/1" class="shrink-0 bg-accent hover:bg-accent-hover text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-all shadow-sm">
                        Lihat Slot & Detail
                    </a>
                </div>

                <!-- Card Perawat 2 -->
                <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm flex flex-col sm:flex-row items-center gap-6 hover:border-primary/50 transition-all">
                    <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?auto=format&fit=crop&q=80&w=200" alt="Nurse" class="w-24 h-24 rounded-2xl object-cover shrink-0">

                    <div class="flex-grow space-y-2 text-center sm:text-left">
                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
                            <h3 class="font-bold text-lg text-text-dark">Bagus Rian, A.Md.Kep</h3>
                            <span class="bg-emerald-50 text-emerald-600 border border-emerald-200 text-xs px-2.5 py-0.5 rounded-full font-semibold flex items-center gap-1">
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Verified STR
                            </span>
                        </div>
                        <p class="text-xs text-gray-500">Fresh Graduate D3 Keperawatan • Spesialis Medis Ringan</p>

                        <div class="flex flex-wrap items-center justify-center sm:justify-start gap-4 text-xs text-gray-600 pt-1">
                            <span class="flex items-center gap-1">📍 3.5 km dari Anda</span>
                            <span class="flex items-center gap-1">⭐ 5.0 (12 Sesi)</span>
                            <span class="font-bold text-primary">Rp 120.000 / Sesi</span>
                        </div>
                    </div>

                    <a href="/nurse/1" class="shrink-0 bg-accent hover:bg-accent-hover text-white px-5 py-2.5 rounded-xl font-medium text-sm transition-all shadow-sm">
                        Lihat Slot & Detail
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection