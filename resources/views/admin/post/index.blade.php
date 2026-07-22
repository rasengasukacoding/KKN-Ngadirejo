@extends('admin.layouts.app')
@section('title', 'Daftar Kegiatan & Berita')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0 text-dark">Kelola Kegiatan & Berita</h4>
    <a href="{{ route('admin.post.create') }}" class="btn btn-primary shadow-sm">
        <i class="bi bi-plus-circle me-1"></i> + Tambah Berita
    </a>
</div>

<!-- ============================================== -->
<!-- CARD FORM: STATISTIK NGADIREJO MEMBACA -->
<!-- ============================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-header bg-white border-bottom pt-4 pb-3 px-4 rounded-t-4">
        <h6 class="fw-bold mb-0 text-success"><i class="bi bi-bar-chart-fill me-2 text-warning"></i> Kelola Statistik Ngadirejo Membaca</h6>
    </div>
    <div class="card-body p-4">
        <form action="{{ route('admin.post.stats') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold text-muted small text-uppercase">Buku Bacaan</label>
                    <input type="text" class="form-control p-2 bg-light border-0" name="kkn_buku" value="{{ optional($profile)->kkn_buku ?? '150+' }}" placeholder="Cth: 150+">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold text-muted small text-uppercase">Peserta Aktif</label>
                    <input type="text" class="form-control p-2 bg-light border-0" name="kkn_peserta" value="{{ optional($profile)->kkn_peserta ?? '75+' }}" placeholder="Cth: 75+">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold text-muted small text-uppercase">Program Literasi</label>
                    <input type="text" class="form-control p-2 bg-light border-0" name="kkn_program" value="{{ optional($profile)->kkn_program ?? '6' }}" placeholder="Cth: 6">
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label fw-semibold text-muted small text-uppercase">Hari Kegiatan</label>
                    <input type="text" class="form-control p-2 bg-light border-0" name="kkn_hari" value="{{ optional($profile)->kkn_hari ?? '30' }}" placeholder="Cth: 30">
                </div>
            </div>
            <div class="text-end mt-2">
                <button type="submit" class="btn btn-success px-4 shadow-sm">Simpan Statistik</button>
            </div>
        </form>
    </div>
</div>
<!-- ============================================== -->

<!-- CARD TABEL DAFTAR BERITA -->
<div class="card border-0 shadow-sm rounded-4 p-4">
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Gambar</th>
                    <th>Judul Kegiatan</th>
                    <th>Isi Konten</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" class="rounded border" width="60" height="40" style="object-fit: cover;">
                        @else
                            <span class="badge bg-secondary">Tanpa Gambar</span>
                        @endif
                    </td>
                    <td class="fw-bold text-dark">{{ $item->judul ?? $item->nama }}</td>
                    <td class="text-muted">{{ Str::limit($item->konten ?? $item->deskripsi, 50) }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.post.edit', $item->id) }}" class="btn btn-sm btn-outline-warning mx-1"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.post.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger mx-1" onclick="return confirm('Yakin ingin menghapus berita ini?')"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">Belum ada kegiatan/berita.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection