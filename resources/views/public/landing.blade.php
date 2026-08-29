@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center">
    <span class="inline-block bg-primary/10 text-primary px-4 py-1.5 rounded-full text-xs font-semibold tracking-wide uppercase mb-4">
        Platform On-Demand Home Care
    </span>
    <h1 class="text-4xl md:text-6xl font-extrabold text-text-dark tracking-tight leading-tight mb-6">
        Layanan Perawat Medis Mandiri <br class="hidden md:inline" /> Langsung ke Rumah Anda
    </h1>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">
        Menghubungkan perawat tersertifikasi (STR & Ijazah terverifikasi) dengan pasien pasca-rawat inap atau lansia secara instan & transparan.
    </p>
    <div class="flex justify-center gap-4">
        <a href="/directory" class="bg-accent hover:bg-accent-hover text-white px-8 py-3.5 rounded-2xl font-semibold text-base shadow-md transition-all">
            Cari Perawat Terdekat
        </a>
    </div>
</div>
@endsection