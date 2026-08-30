@extends('layouts.app')

@section('content')
<div class="bg-base-bg min-h-screen py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-text-dark">HRD & Admin Control Panel</h1>
            <p class="text-gray-500 text-sm mt-1">Verifikasi berkas perawat dan pantau transaksi platform.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <p class="text-sm font-semibold text-gray-500">Total Pasien</p>
                <p class="text-3xl font-bold text-text-dark mt-2">124</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                <p class="text-sm font-semibold text-gray-500">Perawat Aktif</p>
                <p class="text-3xl font-bold text-primary mt-2">45</p>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100 border-l-4 border-l-accent">
                <p class="text-sm font-semibold text-gray-500">Menunggu Verifikasi STR</p>
                <p class="text-3xl font-bold text-accent mt-2">3</p>
            </div>
        </div>
    </div>
</div>
@endsection