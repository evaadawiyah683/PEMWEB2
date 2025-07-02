<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'epaw',
        'prodi' => 'Sistem Informasi'
    ]);
});

Route::get('/produk', function() {
    return view('produk.index');
});
Route::get('/produk/{id}', function($id) {
    return view('produk.index', ['id' => $id]);
});

Route::get('/prodi', [ProdiController::class, 'show'])->name('prodi.show');

// pasien
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('/pasien/tambah_pasien', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');

//kelurahan
Route:: get('/kelurahan', [KelurahanController::class, 'index']);
Route:: get('/kelurahan/tambah_kelurahan', [KelurahanController::class, 'create'])->name('kelurahan.create');
Route:: post('/kelurahan/store', [KelurahanController::class, 'store'])->name('kelurahan.store');