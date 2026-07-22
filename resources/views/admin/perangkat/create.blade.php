@extends('admin.layouts.app')
@section('title', 'Tambah Perangkat Desa')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <!-- WAJIB ADA enctype="multipart/form-data" AGAR FOTO BISA DIUPLOAD -->
    <form action="{{ route('admin.perangkat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control p-2" placeholder="Masukkan nama lengkap..." required>
        </div>
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Jabatan</label>
            <input type="text" name="jabatan" class="form-control p-2" placeholder="Contoh: Kepala Desa, Sekretaris..." required>
        </div>

        <!-- INPUT UNTUK FOTO PERANGKAT -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Foto Perangkat</label>
            <input type="file" name="gambar" class="form-control p-2" accept="image/*" required>
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.perangkat.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
        </div>
    </form>
</div>
@endsection