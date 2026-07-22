@extends('admin.layouts.app')
@section('title', 'Tambah Lembaga Desa')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <!-- PERBAIKAN: Action harus mengarah ke 'store', dan tidak memerlukan $lembaga->id -->
    <form action="{{ route('admin.lembaga.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lembaga</label>
            <!-- PERBAIKAN: Value dikosongkan karena ini data baru -->
            <input type="text" name="nama" class="form-control p-2" placeholder="Masukkan nama lembaga..." required>
        </div>
        
        <!-- INPUT UNTUK LOGO LEMBAGA -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Logo Lembaga</label>
            <input type="file" name="logo" class="form-control p-2" accept="image/*" required>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Deskripsi</label>
            <!-- PERBAIKAN: Textarea dikosongkan -->
            <textarea name="deskripsi" class="form-control p-2" rows="5" placeholder="Tuliskan profil singkat lembaga..."></textarea>
        </div>
        
        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.lembaga.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
        </div>
    </form>
</div>
@endsection