<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/home', function () {
    return view('home');
});
use App\Http\Controllers\AuthController;

// tampilkan form
Route::get('/daftar', function () {
    return view('daftar');
});

// proses daftar
Route::post('/daftar', [AuthController::class, 'daftar'])->name('daftar');

Route::get('/login', function () {
    return view('login');
});
Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/laporan-saya', function () {
    return 'Halaman Laporan Saya';
});

Route::get('/kelola-laporan', function () {
    return 'Halaman Kelola Laporan';
});

Route::get('/notifikasi', function () {
    $notifikasi = [
        [
            'judul' => 'Laporan Ditolak',
            'deskripsi' => 'Laporan air toilet mati telah Ditolak',
            'waktu' => '5 Menit yang lalu',
            'icon' => 'danger'
        ],
        [
            'judul' => 'Laporan Diproses',
            'deskripsi' => 'Laporan kursi lab rusak sedang ditangani oleh admin',
            'waktu' => '1 Jam yang lalu',
            'icon' => 'warning'
        ],
        [
            'judul' => 'Laporan Selesai',
            'deskripsi' => 'Laporan PC Lab diperbaiki sudah selesai',
            'waktu' => 'Kemarin',
            'icon' => 'secondary'
        ],
    ];

    return view('notifikasi', compact('notifikasi'));
});



Route::get('/logout', function () {
    return redirect('/');
});
Route::get('/buat_laporan', function () {
    return view('product.buat_laporan');
});

Route::get('/kelola-akun', [ProfileController::class, 'index'])->name('profile');

Route::post('/update-foto', [ProfileController::class, 'updateFoto'])->name('update.foto');

Route::post('/update-email', [ProfileController::class, 'updateEmail'])->name('update.email');

Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('update.password');
