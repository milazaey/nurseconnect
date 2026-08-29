<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\DirectoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Patient\PatientDashboardController;
use App\Http\Controllers\Nurse\NurseDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;

// --- 1. PUBLIC ROUTES ---
Route::get('/', [HomeController::class, 'index']);
Route::get('/directory', [DirectoryController::class, 'index']);
Route::get('/nurse/{id}', [DirectoryController::class, 'show']);

// --- 2. AUTH ROUTES ---
Route::get('/login', [AuthController::class, 'showLogin']);
Route::get('/register/patient', [AuthController::class, 'showRegisterPatient']);
Route::get('/register/nurse', [AuthController::class, 'showRegisterNurse']);

// --- 3. PATIENT ROUTES ---
Route::prefix('patient')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [PatientDashboardController::class, 'index']);
});

// --- 4. NURSE ROUTES ---
Route::prefix('nurse')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [NurseDashboardController::class, 'index']);
});

// --- 5. ADMIN HRD ROUTES ---
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
});
