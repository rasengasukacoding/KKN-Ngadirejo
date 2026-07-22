@extends('admin.layouts.app')
@section('title', 'Daftar UMKM Lokal')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0 text-dark">Kelola UMKM Lokal</h4>
    <a href="{{ route('admin.umkm.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> + Tambah UMKM
    </a>
</div>

<!-- ============================================== -->
<!-- TEMPAT MUNCULNYA NOTIFIKASI BERHASIL -->
<!-- ============================================== -->
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show shadow-sm mb-4" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<!-- ============================================== -->

<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk/Usaha</th>
                    <th>Deskripsi Singkat</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($umkms as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="rounded border" width="60" height="40" style="object-fit: cover;">
                        @else
                            <span class="badge bg-secondary">Tanpa Gambar</span>
                        @endif
                    </td>
                    <td class="fw-bold text-dark">{{ $item->nama }}</td>
                    <td class="text-muted">{{ Str::limit($item->deskripsi, 50) }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.umkm.edit', $item->id) }}" class="btn btn-sm btn-outline-warning mx-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.umkm.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger mx-1" onclick="return confirm('Yakin ingin menghapus data UMKM ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">Belum ada data UMKM yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection