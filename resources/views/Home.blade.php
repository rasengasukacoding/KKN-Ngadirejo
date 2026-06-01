<x-layouts.app>

    {{-- Hero --}}
    @include('sections.hero')

    {{-- Profil Desa (Snippet) --}}
    @include('sections.profil-snippet')

    {{-- Wisata (Snippet with auto-scrolling marquee) --}}
    @include('sections.wisata-snippet')

    {{-- UMKM (Snippet) --}}
    @include('sections.umkm-snippet')

    {{-- Melikan Belajar (Snippet with 3 items) --}}
    @include('sections.melikan-belajar-snippet')

    {{-- About (Snippet) --}}
    @include('sections.about-snippet')

    {{-- Lokasi (Snippet with no heavy iframe) --}}
    @include('sections.lokasi-snippet')

</x-layouts.app>
