<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LembagaDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Wajib di-import untuk menghapus logo

class LembagaDesaController extends Controller
{
    public function index()
    {
        $lembaga_desas = LembagaDesa::latest()->get();
        return view('admin.lembaga.index', compact('lembaga_desas'));
    }

    public function create()
    {
        return view('admin.lembaga.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Logika menyimpan logo ke folder storage/app/public/lembaga
        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('lembaga', 'public');
        }

        LembagaDesa::create($data);
        return redirect()->route('admin.lembaga.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(LembagaDesa $lembaga)
    {
        return view('admin.lembaga.edit', compact('lembaga'));
    }

    public function update(Request $request, LembagaDesa $lembaga)
    {
        $data = $request->all();

        // Logika mengganti logo baru dan menghapus logo lama
        if ($request->hasFile('logo')) {
            if ($lembaga->logo) {
                Storage::disk('public')->delete($lembaga->logo);
            }
            $data['logo'] = $request->file('logo')->store('lembaga', 'public');
        }

        $lembaga->update($data);
        return redirect()->route('admin.lembaga.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(LembagaDesa $lembaga)
    {
        // Hapus file fisik gambar logo dari storage sebelum data dihapus
        if ($lembaga->logo) {
            Storage::disk('public')->delete($lembaga->logo);
        }

        $lembaga->delete();
        return back()->with('success', 'Data berhasil dihapus');
    }
}