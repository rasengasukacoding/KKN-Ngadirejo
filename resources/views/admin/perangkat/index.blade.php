@extends('admin.layouts.app')
@section('title', 'Daftar Perangkat Desa')

@section('content')
<!-- BAGIAN ATAS: JUDUL DAN TOMBOL TAMBAH -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0 text-dark">Kelola Perangkat Desa</h4>
    
    <a href="{{ route('admin.perangkat.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-person-plus me-1"></i> + Tambah Perangkat
    </a>
</div>

<!-- BAGIAN BAWAH: TABEL DATA -->
<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nama Lengkap</th>
                    <th>Jabatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($perangkats as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    
                    <!-- MENAMPILKAN FOTO -->
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="rounded-circle border" width="50" height="50" style="object-fit: cover;">
                        @else
                            <span class="badge bg-secondary">Tanpa Foto</span>
                        @endif
                    </td>

                    <td class="fw-bold text-dark">{{ $item->nama }}</td>
                    <td class="text-muted">{{ $item->jabatan }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.perangkat.edit', $item->id) }}" class="btn btn-sm btn-outline-warning mx-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.perangkat.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger mx-1" onclick="return confirm('Yakin ingin menghapus perangkat ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        <p class="mb-0">Belum ada data perangkat desa.</p>
                        <small>Silakan klik tombol "+ Tambah Perangkat" di atas.</small>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection