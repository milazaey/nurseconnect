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
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-gray-200/60 mt-8">
                    <div>
                        <p class="text-2xl font-bold text-text-dark">100%</p>
                        <p class="text-xs text-gray-500">Perawat Terverifikasi</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-primary">24/7</p>
                        <p class="text-xs text-gray-500">Dukungan Akses</p>
                    </div>
                    <div>
                        <p class="text-2xl font-bold text-accent">4.9/5</p>
                        <p class="text-xs text-gray-500">Rating Kepuasan</p>
                    </div>
                </div>
            </div>

            <!-- Hero Image Banner -->
            <div class="lg:col-span-5 relative">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    <img src="https://images.unsplash.com/photo-1576765608535-5f04d1e3f289?auto=format&fit=crop&q=80&w=800" alt="Home Care Nurse" class="rounded-3xl shadow-xl object-cover w-full h-[450px]">
                </div>
            </div>

        </div>
    </section>

</div>
@endsection