@props(['title' => null, 'description' => null])
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? 'Website resmi Desa Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Profil desa, destinasi wisata karst, produk UMKM kerajinan bambu, dan dokumentasi program kerja KKN 64 UNS.' }}">
    <meta name="keywords" content="Desa Melikan, Melikan Rongkop, Gunungkidul, Gunung Kidul, Yogyakarta, DIY, Wisata Gunungkidul, UMKM Bambu, KKN 64 UNS, Profil Desa Melikan, Melikan Yogyakarta">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Facebook --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title ?? 'Desa Melikan — Rongkop, Gunungkidul, Yogyakarta' }}">
    <meta property="og:description" content="{{ $description ?? 'Website resmi Desa Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Profil desa, wisata karst, kerajinan bambu, dan proker KKN.' }}">
    <meta property="og:image" content="{{ asset('images/about-village.png') }}">

    {{-- Twitter --}}
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $title ?? 'Desa Melikan — Rongkop, Gunungkidul, Yogyakarta' }}">
    <meta property="twitter:description" content="{{ $description ?? 'Website resmi Desa Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta.' }}">
    <meta property="twitter:image" content="{{ asset('images/about-village.png') }}">

    <title>{{ $title ?? 'Desa Melikan — Rongkop, Gunungkidul, Yogyakarta' }}</title>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Structured Data (JSON-LD) for Local Village SEO --}}
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "GovernmentOffice",
      "name": "Pemerintah Kalurahan Melikan",
      "description": "Kantor Pemerintah Kalurahan Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta",
      "image": "{{ asset('images/about-village.png') }}",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Desa Melikan, Kapanewon Rongkop",
        "addressLocality": "Gunungkidul",
        "addressRegion": "Daerah Istimewa Yogyakarta",
        "postalCode": "55884",
        "addressCountry": "ID"
      },
      "url": "{{ url('/') }}"
    }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-[#1D1D1F] font-sans antialiased overflow-x-hidden">

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>
