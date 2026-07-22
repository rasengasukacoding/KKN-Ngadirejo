{{-- Memanggil file layout utama admin --}}
@extends('admin.layouts.app')

{{-- Bagian konten yang akan disisipkan ke dalam layout --}}
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4 fw-bold">Dashboard Utama</h1>
    <ol class="breadcrumb mb-5 text-muted">
        <li class="breadcrumb-item active">Ringkasan Data Portal Desa Ngadirejo</li>
    </ol>

    <div class="row">
        <!-- Kartu Total Wisata -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-primary text-white h-100 shadow border-0 rounded-4">
                <div class="card-body">
                    <div class="fs-2 fw-bold">{{ $total_wisata }}</div>
                    <div>Destinasi Wisata</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between border-0 bg-primary bg-opacity-10 rounded-bottom-4">
                    <a class="small text-white stretched-link text-decoration-none fw-semibold" href="{{ route('admin.wisata.index') }}">Kelola Wisata &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Kartu Total UMKM -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white h-100 shadow border-0 rounded-4">
                <div class="card-body">
                    <div class="fs-2 fw-bold">{{ $total_umkm }}</div>
                    <div>Produk UMKM</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between border-0 bg-success bg-opacity-10 rounded-bottom-4">
                    <a class="small text-white stretched-link text-decoration-none fw-semibold" href="{{ route('admin.umkm.index') }}">Kelola UMKM &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Kartu Total Kegiatan & Berita -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-dark h-100 shadow border-0 rounded-4">
                <div class="card-body">
                    <div class="fs-2 fw-bold">{{ $total_post }}</div>
                    <div>Kegiatan & Berita</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between border-0 bg-warning bg-opacity-10 rounded-bottom-4">
                    <a class="small text-dark stretched-link text-decoration-none fw-semibold" href="{{ route('admin.post.index') }}">Kelola Berita &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Kartu Total Perangkat Desa -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger text-white h-100 shadow border-0 rounded-4">
                <div class="card-body">
                    <div class="fs-2 fw-bold">{{ $total_perangkat }}</div>
                    <div>Perangkat Desa</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between border-0 bg-danger bg-opacity-10 rounded-bottom-4">
                    <a class="small text-white stretched-link text-decoration-none fw-semibold" href="{{ route('admin.perangkat.index') }}">Kelola Perangkat &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection