<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        // Ambil data profil pertama. Jika database kosong, nilai ini akan null.
        $profile = Profile::first(); 
        
        return view('admin.profil.index', compact('profile'));
    }

    public function update(Request $request)
    {
        // Cari profil pertama. Jika belum ada, buat instansiasi baru.
        $profile = Profile::first();
        if (!$profile) {
            $profile = new Profile();
        }

        // Isi data dari form
        $profile->sejarah = $request->sejarah;
        $profile->visi = $request->visi;
        $profile->misi = $request->misi;

        $profile->jumlah_penduduk = $request->jumlah_penduduk;
        $profile->jumlah_laki = $request->jumlah_laki;
        $profile->jumlah_perempuan = $request->jumlah_perempuan;
        $profile->jumlah_kk = $request->jumlah_kk;
        
        // Cek jika admin mengupload logo baru
        if ($request->hasFile('logo')) {
            // Hapus logo lama jika ada
            if ($profile->logo) {
                Storage::disk('public')->delete($profile->logo);
            }
            // Simpan logo baru
            $profile->logo = $request->file('logo')->store('profil', 'public');
        }

        // Simpan ke database
        $profile->save();

        return back()->with('success', 'Profil desa berhasil disimpan!');
    }
}