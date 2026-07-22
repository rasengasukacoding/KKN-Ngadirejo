@extends('admin.layouts.app')
@section('title', 'Tambah UMKM')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <form action="{{ route('admin.umkm.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Produk / Usaha</label>
            <input type="text" name="nama" class="form-control p-2" placeholder="Contoh: Keripik Pisang Berkah..." required>
        </div>
        
        <div class="mb-3">
            <label>Pemilik</label>
            <input  type="text" name="pemilik" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kontak</label>
            <input type="text" name="kontak" class="form-control" placeholder="08xxxxxxxxxx">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Deskripsi Singkat</label>
            <textarea name="deskripsi" class="form-control p-2" rows="4" placeholder="Jelaskan tentang produk ini..." required></textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Gambar Produk</label>
            <input type="file" name="gambar" class="form-control p-2" accept="image/*" required>
            <small class="text-muted mt-1 d-block">Format yang diizinkan: JPG, JPEG, PNG.</small>
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.umkm.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
        </div>
    </form>
</div>
@endsection