<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\DirectoryController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Nurse\NurseDashboardController;
use App\Http\Controllers\Patient\PatientDashboardController;

// Rute Publik
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');
Route::get('/perawat-terdekat', [DirectoryController::class, 'nearby'])->name('nearby');

// Rute Authentication (Hanya untuk yang belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'processRegister']);
});

// Logout bisa dipanggil pake GET untuk mempermudah development (kalau di production mending pakai POST)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute Dashboard (Hanya bisa diakses kalau udah login)
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
    Route::get('/nurse/dashboard', [NurseDashboardController::class, 'index']);
    Route::get('/patient/dashboard', [PatientDashboardController::class, 'index']);
});
