<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\Umkm;
use App\Models\Post;
use App\Models\PerangkatDesa;
// Pastikan Anda sudah mengimport semua model yang ingin dihitung datanya

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah data di database
        $total_wisata = Wisata::count();
        $total_umkm = Umkm::count();
        $total_post = Post::count();
        $total_perangkat = PerangkatDesa::count();

        // Mengirim variabel ke view dashboard
        return view('admin.dashboard.index', compact(
            'total_wisata', 'total_umkm', 'total_post', 'total_perangkat'
        ));
    }
}