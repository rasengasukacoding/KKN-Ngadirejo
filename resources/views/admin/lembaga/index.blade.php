@extends('admin.layouts.app')
@section('title', 'Daftar Lembaga Desa')

@section('content')
<!-- BAGIAN ATAS: JUDUL DAN TOMBOL TAMBAH -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0 text-dark">Kelola Lembaga Desa</h4>
    
    <!-- TOMBOL TAMBAH DIPINDAHKAN KE SINI AGAR PASTI MUNCUL -->
    <a href="{{ route('admin.lembaga.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> + Tambah Lembaga
    </a>
</div>

<!-- BAGIAN BAWAH: TABEL DATA -->
<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Nama Lembaga</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($lembaga_desas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($item->logo)
                            <img src="{{ asset('storage/' . $item->logo) }}" class="rounded" width="50" height="50" style="object-fit: contain;">
                        @else
                            <span class="badge bg-secondary">Tanpa Logo</span>
                        @endif
                    </td>
                    <td class="fw-bold text-dark">{{ $item->nama }}</td>
                    <td class="text-muted">{{ Str::limit($item->deskripsi, 60) }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.lembaga.edit', $item->id) }}" class="btn btn-sm btn-outline-warning"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.lembaga.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-5 text-muted">
                        <p class="mb-0">Database masih kosong.</p>
                        <small>Silakan klik tombol "+ Tambah Lembaga" di atas untuk mulai memindahkan data BPD, LPMD, dll.</small>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection