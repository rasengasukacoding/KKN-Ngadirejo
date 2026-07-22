<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Wisata;
use App\Models\Umkm;
use App\Models\PerangkatDesa;
use App\Models\LembagaDesa;
// PERBAIKAN 1: Wajib import model Profile
use App\Models\Profile; 

class HomeController extends Controller
{
    // ==============================================
    // 1. Halaman Beranda (Sekilas/Preview)
    // ==============================================
    public function index() 
    {
        // Ambil 3 kegiatan terbaru
        $posts = Post::latest()->take(3)->get();
        
        // Ambil 6 wisata terbaru (agar animasi marquee panjang & bagus)
        $wisatas = Wisata::latest()->take(6)->get();
        
        // Ambil data profil (untuk bagian "Sekilas Tentang Desa")
        $profile = Profile::first();
        
        return view('Home', compact('posts', 'wisatas', 'profile'));
    }
    
    // ==============================================
    // 2. Halaman Profil Desa Lengkap
    // ==============================================
    public function profil()
    {
        // PERBAIKAN 2: Ambil data profil pertama dari database
        $profile = Profile::first(); 
        
        // Kirim data profil tersebut ke file blade pengujung
        return view('Profile-Desa', compact('profile')); 
    }

    // ==============================================
    // 3. Halaman Wisata Lengkap
    // ==============================================
    public function wisata()
    {
        $wisatas = Wisata::all(); 
        return view('Wisata', compact('wisatas'));
    }

    // ==============================================
    // 4. Halaman UMKM Lengkap
    // ==============================================
    public function umkm()
    {
        $umkms = Umkm::all();
        return view('Umkm', compact('umkms'));
    }

    // ==============================================
    // 5. Halaman Kegiatan & Berita Lengkap
    // ==============================================
    public function post()
    {
        $posts = Post::latest()->get();
        return view('Kegiatan-Berita', compact('posts'));
    }

    // ==============================================
    // 6. Halaman Perangkat Desa Lengkap
    // ==============================================
    public function perangkat()
    {
        $perangkats = PerangkatDesa::all();
        return view('Perangkat-Desa', compact('perangkats'));
    }

    // ==============================================
    // 7. Halaman Lembaga Desa Lengkap
    // ==============================================
    public function lembaga()
    {
        $lembaga_desas = LembagaDesa::all();
        return view('Lembaga-Desa', compact('lembaga_desas'));
    }
}