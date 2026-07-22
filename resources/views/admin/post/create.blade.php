@extends('admin.layouts.app')
@section('title', 'Tambah Berita Baru')

@section('content')
<div class="card border-0 shadow-sm rounded-4 p-4 col-md-10 mx-auto">
    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control p-2" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Isi Berita</label>
                    <textarea name="konten" class="form-control p-2" rows="10" required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label fw-semibold">Kategori</label>
                    <select name="kategori" class="form-select p-2">
                        <option value="Berita Desa">Berita Desa</option>
                        <option value="Kegiatan">Kegiatan</option>
                        <option value="Pengumuman">Pengumuman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Gambar Utama</label>
                    <input type="file" name="gambar" class="form-control p-2" accept="image/*" required>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('admin.post.index') }}" class="btn btn-light me-2">Kembali</a>
            <button type="submit" class="btn btn-desa px-4">Publish Berita</button>
        </div>
    </form>
</div>
@endsection