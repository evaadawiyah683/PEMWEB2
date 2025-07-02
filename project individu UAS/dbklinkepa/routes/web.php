<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\UnitKerjaController; 
use App\Http\Controllers\DashboardController;

// Landing Page
Route::get('/', function () {
    return view('landing'); // ganti welcome ke landing kalau kamu udah buat landing.blade.php
});

// Dashboard (satu ini aja yaa)
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Pasien
Route::get('/pasien', [PasienController::class, 'index'])->name('pasien.index');
Route::get('/pasien/tambah_pasien', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');
Route::put('/pasien/update/{id}', [PasienController::class, 'update'])->name('pasien.update');
Route::delete('/pasien/delete/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');

// Kelurahan
Route::get('/kelurahan', [KelurahanController::class, 'index']);
Route::get('/kelurahan/tambah_kelurahan', [KelurahanController::class, 'create'])->name('kelurahan.create');
Route::post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');
Route::get('/kelurahan/edit/{id}', [KelurahanController::class, 'edit'])->name('kelurahan.edit');
Route::put('/kelurahan/update/{id}', [KelurahanController::class, 'update'])->name('kelurahan.update');
Route::delete('/kelurahan/delete/{id}', [KelurahanController::class, 'destroy'])->name('kelurahan.destroy');

// Periksa
Route::get('/periksa', [PeriksaController::class, 'index'])->name('periksa.index');
Route::get('/periksa/tambah_periksa', [PeriksaController::class, 'create'])->name('periksa.create');
Route::post('/periksa', [PeriksaController::class, 'store'])->name('periksa.store');
Route::get('/periksa/edit/{id}', [PeriksaController::class, 'edit'])->name('periksa.edit');
Route::put('/periksa/update/{id}', [PeriksaController::class, 'update'])->name('periksa.update');
Route::delete('/periksa/delete/{id}', [PeriksaController::class, 'destroy'])->name('periksa.destroy');

// Paramedik
Route::get('/paramedik', [ParamedikController::class, 'index'])->name('paramedik.index');
Route::get('/paramedik/tambah_paramedik', [ParamedikController::class, 'create'])->name('paramedik.create');
Route::post('/paramedik', [ParamedikController::class, 'store'])->name('paramedik.store');
Route::get('/paramedik/edit/{id}', [ParamedikController::class, 'edit'])->name('paramedik.edit');
Route::put('/paramedik/update/{id}', [ParamedikController::class, 'update'])->name('paramedik.update');
Route::delete('/paramedik/delete/{id}', [ParamedikController::class, 'destroy'])->name('paramedik.destroy');

// Unit Kerja Routes
Route::get('/unitkerja', [UnitKerjaController::class, 'index'])->name('unit_kerja.index');
Route::get('/unitkerja/tambah_unit_kerja', [UnitKerjaController::class, 'create'])->name('unit_kerja.create');
Route::post('/unitkerja', [UnitKerjaController::class, 'store'])->name('unit_kerja.store');
Route::get('/unitkerja/edit/{id}', [UnitKerjaController::class, 'edit'])->name('unit_kerja.edit');
Route::put('/unitkerja/update/{id}', [UnitKerjaController::class, 'update'])->name('unit_kerja.update');
Route::delete('/unitkerja/delete/{id}', [UnitKerjaController::class, 'destroy'])->name('unit_kerja.destroy');

require __DIR__.'/auth.php';
