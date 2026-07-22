<?php

use Illuminate\Support\Facades\Route;

// ==========================================
// IMPORT CONTROLLER ADMIN
// ==========================================
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UmkmController;
use App\Http\Controllers\Admin\WisataController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\LembagaDesaController;
use App\Http\Controllers\Admin\PerangkatDesaController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Auth\LoginController;

// ==========================================
// IMPORT CONTROLLER FRONTEND
// ==========================================
use App\Http\Controllers\HomeController;

// ==========================================
// 1. ROUTE PUBLIK (FRONTEND PENGUNJUNG)
// ==========================================
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/wisata', [HomeController::class, 'wisata'])->name('wisata');
Route::get('/umkm', [HomeController::class, 'umkm'])->name('umkm');
Route::get('/kegiatan-berita', [HomeController::class, 'post'])->name('kegiatan');
Route::get('/perangkat-desa', [HomeController::class, 'perangkat'])->name('perangkat');
Route::get('/lembaga-desa', [HomeController::class, 'lembaga'])->name('lembaga');

Route::get('/about', function () { return view('About'); })->name('about');
Route::get('/lokasi', function () { return view('Lokasi'); })->name('lokasi');


// ==========================================
// 2. ROUTE AUTH (KHUSUS ADMIN)
// ==========================================
Route::prefix('admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});


// ==========================================
// 3. ROUTE ADMIN (BACKEND PENGELOLA)
// ==========================================
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    
    // Redirect /admin langsung ke dashboard
    Route::get('/', function () { return redirect()->route('admin.dashboard'); });
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/profil', [ProfileController::class, 'index'])->name('profil.index');
    Route::post('/profil', [ProfileController::class, 'update'])->name('profil.update');

    // PERBAIKAN: Rute khusus untuk update statistik KKN (Harus di atas resource post)
    Route::put('/post/stats', [PostController::class, 'updateStats'])->name('post.stats');

    // CRUD Resource
    Route::resource('umkm', UmkmController::class);
    Route::resource('wisata', WisataController::class);
    Route::resource('post', PostController::class);
    Route::resource('lembaga', LembagaDesaController::class);
    Route::resource('perangkat', PerangkatDesaController::class);
    
});