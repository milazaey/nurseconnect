@extends('layouts.app')

@section('content')
<div class="space-y-24 py-10">

    <!-- HERO SECTION -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <span class="inline-flex items-center gap-2 bg-primary/10 text-primary-dark px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider">
                    <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                    Platform On-Demand Home Care Terpercaya
                </span>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-text-dark tracking-tight leading-tight">
                    Layanan Perawat Medis <br class="hidden sm:inline" />
                    <span class="text-primary">Langsung ke Rumah</span> Anda
                </h1>

                <p class="text-gray-600 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    Menghubungkan pasien pasca-rawat inap dan lansia dengan perawat profesional tersertifikasi (STR & Dikti terverifikasi). Solusi perawatan mandiri yang aman, cepat, dan transparan.
                </p>

                <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 pt-2">
                    <a href="/directory" class="bg-accent hover:bg-accent-hover text-white px-8 py-4 rounded-2xl font-bold text-base transition-all shadow-md hover:shadow-lg text-center">
                        Cari & Pesan Perawat
                    </a>
                    <a href="/register" class="bg-white hover:bg-gray-50 text-text-dark border border-gray-200 px-8 py-4 rounded-2xl font-semibold text-base transition-all text-center">
                        Daftar Jadi Mitra Perawat
                    </a>
                </div>

                <!-- Metrics Badge -->
                <div class="grid grid-cols-3 gap-4 pt-8 border-t border-gray-200/60 max-w-lg mx-auto lg:mx-0">
                    <div>
                        <p class="text-2xl sm:text-3xl font-extrabold text-text-dark">100%</p>
                        <p class="text-xs text-gray-500 font-medium mt-1">STR Terverifikasi</p>
                    </div>
                    <div>
                        <p class="text-2xl sm:text-3xl font-extrabold text-primary">50+</p>
                        <p class="text-xs text-gray-500 font-medium mt-1">Perawat Aktif</p>
                    </div>
                    <div>
                        <p class="text-2xl sm:text-3xl font-extrabold text-accent">4.9/5</p>
                        <p class="text-xs text-gray-500 font-medium mt-1">Kepuasan Pasien</p>
                    </div>
                </div>
            </div>

            <!-- Hero Visual Card -->
            <div class="lg:col-span-5 relative">
                <div class="bg-white p-4 rounded-3xl shadow-xl border border-gray-100 relative z-10">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&q=80&w=800"
                        alt="Layanan Perawat Homecare"
                        class="w-full h-80 object-cover rounded-2xl mb-4">

                    <div class="bg-base-bg p-4 rounded-xl border border-gray-100 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 font-bold">
                                ✓
                            </div>
                            <div>
                                <p class="text-sm font-bold text-text-dark">Layanan Standar RS</p>
                                <p class="text-xs text-gray-500">Tindakan medis sesuai SOP</p>
                            </div>
                        </div>
                        <span class="text-xs font-bold text-primary bg-primary/10 px-3 py-1 rounded-full">Aktif</span>
                    </div>
                </div>

                <!-- Background Accent Decorator -->
                <div class="absolute -bottom-6 -right-6 w-full h-full bg-primary/20 rounded-3xl -z-0"></div>
            </div>

        </div>
    </section>

    <!-- FITUR UNGGULAN (VALUE PROPOSITION) -->
    <section class="bg-white py-16 border-y border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-12">
                <h2 class="text-3xl font-bold text-text-dark">Mengapa Memilih NurseConnect?</h2>
                <p class="text-gray-500 text-sm mt-2">Sistem yang dirancang untuk kenyamanan keluarga dan keamanan pasien.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-base-bg p-8 rounded-3xl border border-gray-100 hover:border-primary/40 transition-all space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-primary/15 text-primary flex items-center justify-center text-xl font-bold">
                        📋
                    </div>
                    <h3 class="text-xl font-bold text-text-dark">Verifikasi Berkas Ketat</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Setiap perawat yang terdaftar wajib melewati verifikasi fisik STR (Surat Tanda Registrasi) dan ijazah oleh tim HRD kami.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-base-bg p-8 rounded-3xl border border-gray-100 hover:border-accent/40 transition-all space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-accent/15 text-accent flex items-center justify-center text-xl font-bold">
                        📍
                    </div>
                    <h3 class="text-xl font-bold text-text-dark">Pencarian Berbasis Lokasi</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Temukan perawat terdekat dari domisili Anda untuk merespons kebutuhan medis darurat maupun pendampingan rutin secara lebih cepat.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-base-bg p-8 rounded-3xl border border-gray-100 hover:border-primary/40 transition-all space-y-4">
                    <div class="w-12 h-12 rounded-2xl bg-primary/15 text-primary flex items-center justify-center text-xl font-bold">
                        💳
                    </div>
                    <h3 class="text-xl font-bold text-text-dark">Transparansi Tarif</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">
                        Tidak ada biaya tersembunyi. Tarif per jam atau per sesi tertera transparan sebelum Anda melakukan pemesanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ALUR KERJA (HOW IT WORKS) -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl font-bold text-text-dark">Alur Pemesanan Perawat</h2>
            <p class="text-gray-500 text-sm mt-2">Proses mudah dalam 3 langkah praktis</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
            <!-- Step 1 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm text-center space-y-3 relative">
                <span class="w-10 h-10 rounded-full bg-primary text-white font-bold text-lg flex items-center justify-center mx-auto mb-4">1</span>
                <h3 class="font-bold text-lg text-text-dark">Pilih Perawat & Jadwal</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Gunakan fitur direktori untuk memfilter perawat berdasarkan keahlian, jarak, dan ketersediaan waktu.</p>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm text-center space-y-3 relative">
                <span class="w-10 h-10 rounded-full bg-accent text-white font-bold text-lg flex items-center justify-center mx-auto mb-4">2</span>
                <h3 class="font-bold text-lg text-text-dark">Konfirmasi & Pembayaran</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Perawat akan menerima pesanan Anda dan mengonfirmasi rincian kebutuhan medis pasien.</p>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-6 rounded-3xl border border-gray-100 shadow-sm text-center space-y-3 relative">
                <span class="w-10 h-10 rounded-full bg-primary-dark text-white font-bold text-lg flex items-center justify-center mx-auto mb-4">3</span>
                <h3 class="font-bold text-lg text-text-dark">Perawat Datang ke Rumah</h3>
                <p class="text-xs text-gray-500 leading-relaxed">Perawat datang tepat waktu sesuai lokasi dan jadwal yang disepakati untuk melakukan tindakan medis.</p>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION BANNER -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-primary-dark to-primary text-white rounded-3xl p-8 sm:p-12 flex flex-col md:flex-row items-center justify-between gap-8 shadow-lg">
            <div class="space-y-2 text-center md:text-left">
                <h2 class="text-2xl sm:text-3xl font-extrabold">Butuh Pendampingan Medis Hari Ini?</h2>
                <p class="text-emerald-100 text-sm max-w-xl">Cari perawat terdekat yang siap memberikan perawatan lansia atau perawatan luka di rumah Anda.</p>
            </div>
            <a href="/directory" class="shrink-0 bg-accent hover:bg-accent-hover text-white px-8 py-4 rounded-2xl font-bold text-sm transition-all shadow-md">
                Cari Perawat Sekarang
            </a>
        </div>
    </section>

</div>
@endsection