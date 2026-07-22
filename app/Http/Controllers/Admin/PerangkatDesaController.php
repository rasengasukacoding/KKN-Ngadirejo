<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa; // Wajib di-import
use Illuminate\Support\Facades\Storage;

class PerangkatDesaController extends Controller
{
    public function index()
    {
        // VARIABEL INI HARUS $perangkats
        $perangkats = PerangkatDesa::latest()->get();
        return view('admin.perangkat.index', compact('perangkats'));
    }

    public function create()
    {
        return view('admin.perangkat.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('perangkat', 'public');
        }

        PerangkatDesa::create($data);
        return redirect()->route('admin.perangkat.index')->with('success', 'Data Perangkat Desa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);
        return view('admin.perangkat.edit', compact('perangkat'));
    }

    public function update(Request $request, $id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($perangkat->gambar) {
                Storage::disk('public')->delete($perangkat->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('perangkat', 'public');
        }

        $perangkat->update($data);
        return redirect()->route('admin.perangkat.index')->with('success', 'Data Perangkat Desa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $perangkat = PerangkatDesa::findOrFail($id);

        if ($perangkat->gambar) {
            Storage::disk('public')->delete($perangkat->gambar);
        }

        $perangkat->delete();
        return redirect()->route('admin.perangkat.index')->with('success', 'Data Perangkat Desa berhasil dihapus.');
    }
}