<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->get();
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        // Validasi yang disesuaikan dengan input form Anda
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        // Ubah 'foto' menjadi 'gambar' agar sinkron dengan database dan view
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('umkm', 'public');
        }

        Umkm::create($data);

        return redirect()
            ->route('admin.umkm.index')
            ->with('success', 'Data UMKM berhasil ditambahkan');
    }

    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $umkm->update($request->all());
        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil diperbarui');
    }

    public function destroy(Umkm $umkm)
    {
        $umkm->delete();
        return back()->with('success', 'Data UMKM berhasil dihapus');
    }
}