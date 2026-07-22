@extends('admin.layouts.app')

@section('title', 'Pengaturan Profil Desa')

@section('content')
<!-- Bungkus seluruh halaman dengan 1 Form -->
<form action="{{ route('admin.profil.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="row">
        <!-- Bagian Kiri: Identitas & Sejarah -->
        <div class="col-12 col-lg-8">
            <div class="card bg-white mb-4">
                <div class="card-header bg-transparent border-bottom pt-4 pb-3 px-4">
                    <h6 class="fw-bold mb-0 text-desa"><i class="bi bi-book me-2"></i> Identitas & Sejarah</h6>
                </div>
                <div class="card-body p-4">
                        
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Sejarah Singkat Desa</label>
                        <textarea class="form-control bg-light border-0" name="sejarah" rows="6" placeholder="Tuliskan sejarah terbentuknya desa...">{{ optional($profile)->sejarah }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Visi</label>
                        <textarea class="form-control bg-light border-0" name="visi" rows="3">{{ optional($profile)->visi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Misi</label>
                        <textarea class="form-control bg-light border-0" name="misi" rows="5" placeholder="Gunakan bullet points atau angka...">{{ optional($profile)->misi }}</textarea>
                    </div>
                    
                    <div class="card bg-white mb-4">
                <div class="card-header bg-transparent border-bottom pt-4 pb-3 px-4">
                    <h6 class="fw-bold mb-0 text-desa"><i class="bi bi-people me-2"></i> Data Demografi & Kependudukan</h6>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Total Penduduk</label>
                            <input type="number" class="form-control bg-light border-0" name="jumlah_penduduk" value="{{ optional($profile)->jumlah_penduduk }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Jumlah Kepala Keluarga (KK)</label>
                            <input type="number" class="form-control bg-light border-0" name="jumlah_kk" value="{{ optional($profile)->jumlah_kk }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Laki-Laki</label>
                            <input type="number" class="form-control bg-light border-0" name="jumlah_laki" value="{{ optional($profile)->jumlah_laki }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Perempuan</label>
                            <input type="number" class="form-control bg-light border-0" name="jumlah_perempuan" value="{{ optional($profile)->jumlah_perempuan }}">
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>

        <!-- Bagian Kanan: Upload Logo dan Tombol Simpan -->
        <div class="col-12 col-lg-4">
            <div class="card bg-white text-center">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3">Logo Desa</h6>
                    
                    <!-- Menampilkan Preview Logo -->
                    <div class="mb-3">
                        @if(optional($profile)->logo)
                            <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo Desa" class="img-fluid rounded border p-2" style="max-height: 150px; object-fit: contain;">
                        @else
                            <img src="https://via.placeholder.com/150?text=Belum+Ada+Logo" alt="Logo Desa" class="img-fluid rounded mb-3" style="max-width: 150px;">
                        @endif
                    </div>
                    
                    <input type="file" class="form-control form-control-sm mb-4 bg-light border-0" name="logo" accept="image/*">
                    
                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 shadow-sm">
                        <i class="bi bi-save me-1"></i> Simpan Profil
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection