<?php

use Illuminate\Support\Facades\Route;

// --- 1. LANDING & PUBLIC ---
Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/directory', function () {
    return view('pages.directory');
});

Route::get('/nurse/1', function () {
    return view('pages.nurse-detail');
});

// --- 2. AUTHENTICATION (LOGIN & REGISTER) ---
Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register/patient', function () {
    return view('pages.auth.register-patient');
});

Route::get('/register/nurse', function () {
    return view('pages.auth.register-nurse');
});

// --- 3. DASHBOARD PASIEN / USER ---
Route::get('/patient/dashboard', function () {
    return view('pages.patient.dashboard');
});

// --- 4. DASHBOARD PERAWAT (SET SLOT & VERIFIKASI) ---
Route::get('/nurse/dashboard', function () {
    return view('pages.nurse.dashboard');
});

// --- 5. DASHBOARD ADMIN HRD (VERIFIKASI STR/IJAZAH) ---
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});