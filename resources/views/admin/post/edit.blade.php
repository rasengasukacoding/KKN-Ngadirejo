@extends('admin.layouts.app')
@section('title', 'Edit Berita')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-10 mx-auto">
    <form action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control p-2" value="{{ $post->judul }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Isi Berita</label>
                    <textarea name="konten" class="form-control p-2" rows="10">{{ $post->konten }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <select name="kategori" class="form-select p-2">
                        <option value="Berita Desa" {{ $post->kategori == 'Berita Desa' ? 'selected' : '' }}>Berita Desa</option>
                        <option value="Kegiatan" {{ $post->kategori == 'Kegiatan' ? 'selected' : '' }}>Kegiatan</option>
                        <option value="Pengumuman" {{ $post->kategori == 'Pengumuman' ? 'selected' : '' }}>Pengumuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Gambar Utama (Opsional)</label>
                    <input type="file" name="gambar" class="form-control p-2" accept="image/*">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    <div class="mt-2">
                        <img src="{{ asset('storage/' . $post->gambar) }}" width="100%" class="rounded">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('admin.post.index') }}" class="btn btn-light me-2">Kembali</a>
            <button type="submit" class="btn btn-desa px-4">Update Berita</button>
        </div>
    </form>
</div>
@endsection