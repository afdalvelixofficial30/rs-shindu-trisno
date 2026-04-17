<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PoliklinikController;
use App\Http\Controllers\ArticleController;

// Halaman Utama (Landing)
Route::get('/', [LandingController::class, 'index'])->name('home');

// Halaman-halaman Terpisah
Route::get('/profil', function () { return view('pages.profil'); })->name('profil');

// Tentang Kami Sub-pages
Route::get('/tentang/visi-misi', function () { return view('pages.visi_misi'); })->name('visi-misi');
Route::get('/tentang/sambutan-karumkit', function () { return view('pages.sambutan'); })->name('sambutan');
Route::get('/tentang/struktur-organisasi', function () { return view('pages.struktur_organisasi'); })->name('struktur-organisasi');

// Layanan
Route::get('/layanan/24-jam', function () { return view('pages.layanan_24jam'); })->name('layanan-24-jam');
Route::get('/layanan/rawat-inap', function () { return view('pages.rawat_inap'); })->name('rawat-inap');
Route::get('/layanan/mcu', function () { return view('pages.mcu'); })->name('mcu');
Route::get('/layanan/penunjang-medis', function () { return view('pages.penunjang'); })->name('penunjang');

// Tim Medis
Route::get('/tim-medis/dokter', function () { return view('pages.dokter'); })->name('dokter');
Route::get('/jadwal-poliklinik', [PoliklinikController::class, 'index'])->name('jadwal-poliklinik');

// Informasi Pasien
Route::get('/informasi/tata-tertib', function () { return view('pages.tata_tertib'); })->name('tata-tertib');
Route::get('/informasi/alur-pendaftaran', function () { return view('pages.alur_pendaftaran'); })->name('alur-pendaftaran');
Route::get('/informasi/jaminan-layanan', function () { return view('pages.jaminan_layanan'); })->name('jaminan-layanan');

// Galeri & Media
Route::get('/galeri', function () { return view('pages.galeri'); })->name('galeri');
Route::get('/pengumuman', [ArticleController::class, 'pengumuman'])->name('pengumuman');
Route::get('/artikel-kesehatan', [ArticleController::class, 'artikel'])->name('artikel');

// Berita & Edukasi
Route::get('/berita', [ArticleController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [ArticleController::class, 'show'])->name('berita.show');

// Custom Admin Panel (Iterasi 1 - Desain Dasbor)
Route::prefix('panel-admin')->name('admin.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('polikliniks', \App\Http\Controllers\Admin\PoliklinikController::class)->except(['show']);
});
