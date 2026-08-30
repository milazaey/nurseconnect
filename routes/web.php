<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\DirectoryController;
use App\Http\Controllers\Patient\PatientDashboardController;
use App\Http\Controllers\Nurse\NurseDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;

// Halaman Publik
Route::get('/', [HomeController::class, 'index']);
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');
Route::get('/perawat-terdekat', [DirectoryController::class, 'nearby'])->name('nearby');

// Otentikasi
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'processRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (Bisa dikasih middleware auth nantinya)
Route::get('/patient/dashboard', [PatientDashboardController::class, 'index']);
Route::get('/nurse/dashboard', [NurseDashboardController::class, 'index']);
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);

// Cari bagian rute publik kamu dan tambahkan rute detail perawat
Route::get('/directory', [DirectoryController::class, 'index'])->name('directory');
Route::get('/directory/{id}', [DirectoryController::class, 'show'])->name('directory.show'); // Rute Baru
Route::get('/perawat-terdekat', [DirectoryController::class, 'nearby'])->name('nearby');
