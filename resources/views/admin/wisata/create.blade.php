@extends('admin.layouts.app')
@section('title', 'Tambah Wisata')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <form action="{{ route('admin.wisata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Wisata</label>
            <input type="text" name="nama" class="form-control p-2" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="form-control p-2" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label class="form-label fw-semibold">Gambar Wisata</label>
            <input type="file" name="gambar" class="form-control p-2" accept="image/*" required>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.wisata.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Simpan Data</button>
        </div>
    </form>
</div>
@endsection