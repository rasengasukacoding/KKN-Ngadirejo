@extends('admin.layouts.app')
@section('title', 'Edit UMKM')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <form action="{{ route('admin.umkm.update', $umkm->id) }}" method="POST" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Produk / Usaha</label>
            <input type="text" name="nama" class="form-control p-2" value="{{ $umkm->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Deskripsi Singkat</label>
            <textarea name="deskripsi" class="form-control p-2" rows="4" required>{{ $umkm->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Gambar Produk (Opsional)</label>
            <input type="file" name="gambar" class="form-control p-2" accept="image/*">
            <small class="text-muted mt-1 d-block">Biarkan kosong jika tidak ingin mengubah gambar.</small>
            
            @if($umkm->gambar)
                <div class="mt-3">
                    <p class="mb-1 text-muted small">Gambar saat ini:</p>
                    <img src="{{ asset('storage/' . $umkm->gambar) }}" width="120" class="rounded border p-1 bg-light">
                </div>
            @endif
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.umkm.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Update Data</button>
        </div>
    </form>
</div>
@endsection