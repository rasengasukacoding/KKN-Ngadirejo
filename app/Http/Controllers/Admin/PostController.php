<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $profile = Profile::first(); // Memanggil data profil untuk diambil statistiknya
        
        return view('admin.post.index', compact('posts', 'profile'));
    }

    public function updateStats(Request $request)
    {
        $profile = Profile::first();
        if (!$profile) {
            $profile = new Profile();
        }

        // Menyimpan data statistik khusus KKN
        $profile->kkn_buku = $request->kkn_buku;
        $profile->kkn_peserta = $request->kkn_peserta;
        $profile->kkn_program = $request->kkn_program;
        $profile->kkn_hari = $request->kkn_hari;
        $profile->save();

        return back()->with('success', 'Statistik Ngadirejo Membaca berhasil diperbarui!');
    }
    
    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        // 1. Ambil semua teks dari form
        $data = $request->except('gambar');

        // 2. Cek apakah admin mengunggah file gambar
        if ($request->hasFile('gambar')) {
            // Simpan gambar ke folder storage/app/public/post
            $data['gambar'] = $request->file('gambar')->store('post', 'public');
        }

        // 3. Simpan ke database
        Post::create($data);

        // 4. Kembali dengan pesan sukses
        return redirect()->route('admin.post.index')->with('success', 'Artikel atau kegiatan berhasil diterbitkan!');
    }
    
    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->route('admin.post.index')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Artikel berhasil dihapus');
    }
}