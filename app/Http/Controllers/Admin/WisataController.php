<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata; // Wajib di-import
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    public function index()
    {
        // VARIABEL INI HARUS $wisatas
        $wisatas = Wisata::latest()->get();
        return view('admin.wisata.index', compact('wisatas'));
    }

    public function create()
    {
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('wisata', 'public');
        }

        Wisata::create($data);
        return redirect()->route('admin.wisata.index')->with('success', 'Destinasi Wisata berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Request $request, $id)
    {
        $wisata = Wisata::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($wisata->gambar) {
                Storage::disk('public')->delete($wisata->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('wisata', 'public');
        }

        $wisata->update($data);
        return redirect()->route('admin.wisata.index')->with('success', 'Destinasi Wisata berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);

        if ($wisata->gambar) {
            Storage::disk('public')->delete($wisata->gambar);
        }

        $wisata->delete();
        return redirect()->route('admin.wisata.index')->with('success', 'Destinasi Wisata berhasil dihapus.');
    }
}