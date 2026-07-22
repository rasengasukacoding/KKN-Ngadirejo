@extends('admin.layouts.app')
@section('title', 'Edit Perangkat Desa')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <!-- WAJIB ADA enctype="multipart/form-data" -->
    <form action="{{ route('admin.perangkat.update', $perangkat->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control p-2" value="{{ $perangkat->nama }}" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label fw-semibold">Jabatan</label>
            <input type="text" name="jabatan" class="form-control p-2" value="{{ $perangkat->jabatan }}" required>
        </div>

        <!-- INPUT UNTUK FOTO & PREVIEW -->
        <div class="mb-4">
            <label class="form-label fw-semibold">Foto Perangkat (Opsional)</label>
            <input type="file" name="gambar" class="form-control p-2" accept="image/*">
            <div class="mt-2">
                @if($perangkat->gambar)
                    <img src="{{ asset('storage/' . $perangkat->gambar) }}" width="100" class="rounded border p-1 bg-light">
                @else
                    <span class="text-muted small">Belum ada foto</span>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.perangkat.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Update Data</button>
        </div>
    </form>
</div>
@endsection