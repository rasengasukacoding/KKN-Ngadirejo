@extends('admin.layouts.app')
@section('title', 'Daftar Destinasi Wisata')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0 text-dark">Kelola Destinasi Wisata</h4>
    <a href="{{ route('admin.wisata.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> + Tambah Wisata
    </a>
</div>

<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Nama Wisata</th>
                    <th>Deskripsi Singkat</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($wisatas as $item)
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
                        <a href="{{ route('admin.wisata.edit', $item->id) }}" class="btn btn-sm btn-outline-warning mx-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.wisata.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger mx-1" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">Belum ada data wisata.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection