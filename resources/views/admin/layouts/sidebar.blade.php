<div class="sidebar bg-desa text-white p-3 shadow-lg" style="min-width: 260px; min-height: 100vh;">
    <div class="d-flex align-items-center mb-4 px-2 mt-2">
        <i class="bi bi-shield-shaded fs-3 me-2"></i>
        <h5 class="mb-0 fw-bold">Admin Panel</h5>
    </div>
    <hr class="border-light mb-4 opacity-25">
    
    <ul class="nav flex-column gap-1">
        <li class="nav-item">
            <!-- Indikator aktif pada Dashboard -->
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active bg-success' : '' }}">
                <i class="bi bi-grid-1x2-fill me-2"></i> Dashboard
            </a>
        </li>
        
        <div class="text-uppercase text-white-50 small fw-bold mt-4 mb-2 px-2">Data Master</div>
        
        <li class="nav-item">
            <a href="{{ route('admin.profil.index') }}" class="nav-link">Profil Desa</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.perangkat.index') }}" class="nav-link">Perangkat Desa</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.lembaga.index') }}" class="nav-link">Lembaga Desa</a>
        </li>
        
        <div class="text-uppercase text-white-50 small fw-bold mt-4 mb-2 px-2">Potensi & Publikasi</div>
        
        <li class="nav-item">
            <a href="{{ route('admin.wisata.index') }}" class="nav-link">Destinasi Wisata</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.umkm.index') }}" class="nav-link">UMKM Lokal</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.post.index') }}" class="nav-link">Kegiatan & Berita</a>
        </li>
    </ul>
</div>