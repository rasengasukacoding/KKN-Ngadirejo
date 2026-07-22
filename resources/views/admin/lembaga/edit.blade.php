@extends('admin.layouts.app')
@section('title', 'Edit Lembaga Desa')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-8 mx-auto">
    <!-- WAJIB ADA enctype="multipart/form-data" -->
    <form action="{{ route('admin.lembaga.update', $lembaga->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Lembaga</label>
            <input type="text" name="nama" class="form-control p-2" value="{{ $lembaga->nama }}" required>
        </div>
        
        <!-- INPUT UNTUK LOGO LEMBAGA BESERTA PREVIEW -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Logo Lembaga (Opsional)</label>
            <input type="file" name="logo" class="form-control p-2" accept="image/*">
            <div class="mt-2">
                @if($lembaga->logo)
                    <img src="{{ asset('storage/' . $lembaga->logo) }}" width="100" class="rounded border p-1 bg-light">
                @else
                    <span class="text-muted small">Belum ada logo</span>
                @endif
            </div>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="form-control p-2" rows="5">{{ $lembaga->deskripsi }}</textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('admin.lembaga.index') }}" class="btn btn-light me-2">Batal</a>
            <button type="submit" class="btn btn-desa px-4">Update Data</button>
        </div>
    </form>
</div>
@endsection