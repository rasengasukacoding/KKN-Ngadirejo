<x-layouts.app title="Beranda - Portal Desa">
    
    {{-- Memanggil Hero Section di paling atas --}}
    @include('sections.hero')

    {{-- Memanggil Profil Sekilas --}}
    @include('sections.profil-snippet')

    {{-- Memanggil Perangkat Desa Sekilas --}}
    @include('sections.perangkat-snippet')

    {{-- Memanggil Lembaga Desa Sekilas (Putih) -- TAMBAHKAN INI --}}
    @include('sections.lembaga-snippet')

    {{-- Memanggil Wisata Sekilas --}}
    @include('sections.wisata-snippet')

    {{-- Memanggil UMKM Sekilas --}}
    @include('sections.umkm-snippet')

    {{-- Memanggil Program Literasi Sekilas (Tersinkronisasi) --}}
    @include('sections.literasi-snippet')

    {{-- Memanggil Kegiatan & Berita Sekilas --}}
    @include('sections.kegiatan-berita-snippet')

    {{-- Memanggil Tentang Sekilas --}}
    @include('sections.about-snippet')

    {{-- Memanggil Lokasi --}}
    @include('sections.lokasi-snippet')

</x-layouts.app>