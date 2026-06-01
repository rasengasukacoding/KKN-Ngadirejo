{{-- Footer Component --}}
<footer class="bg-[#1A3A2A] text-white pt-16 px-6">

    {{-- Footer Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-12 max-w-[1262px] mx-auto pb-12 border-b border-white/10">

        {{-- Brand --}}
        <div class="max-w-xs lg:col-span-1">
            <div class="font-['Outfit'] text-[22px] font-bold mb-3 flex items-center gap-2.5">
                <div class="flex items-center gap-1.5 shrink-0">
                    <img src="{{ asset('storage/Picture/Logo%20Gunung%20Kidul.png') }}" alt="Logo Gunungkidul" class="h-8 w-auto object-contain">
                    <img src="{{ asset('storage/Picture/Logo%20KKN.png') }}" alt="Logo KKN 64 UNS" class="h-8 w-auto object-contain rounded">
                </div>
                Desa Melikan
            </div>
            <p class="text-sm leading-relaxed text-white/55 mb-5">
                Website resmi profil Kalurahan Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, D.I. Yogyakarta.
                Menampilkan informasi, wisata, UMKM, dan program kerja untuk kemajuan desa.
            </p>
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-white/[0.08] rounded-full border border-white/10 text-xs text-white/60 font-medium">
                Dibuat oleh Tim KKN 64 UNS 2026
            </div>
        </div>

        {{-- Navigasi --}}
        <div>
            <h4 class="text-[13px] font-semibold uppercase tracking-wider text-white/40 mb-5">Navigasi</h4>
            <ul class="list-none p-0 m-0 space-y-3">
                <li><a href="/" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Beranda</a></li>
                <li><a href="/profil" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Profil Desa</a></li>
                <li><a href="/wisata" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Wisata</a></li>
                <li><a href="/umkm" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">UMKM</a></li>
            </ul>
        </div>

        {{-- Program --}}
        <div>
            <h4 class="text-[13px] font-semibold uppercase tracking-wider text-white/40 mb-5">Program</h4>
            <ul class="list-none p-0 m-0 space-y-3">
                <li><a href="/melikan-belajar" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Melikan Belajar</a></li>
                <li><a href="/about" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Tentang</a></li>
                <li><a href="/lokasi" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Lokasi</a></li>
            </ul>
        </div>


        {{-- KKN --}}
        <div>
            <h4 class="text-[13px] font-semibold uppercase tracking-wider text-white/40 mb-5">KKN 64 UNS</h4>
            <ul class="list-none p-0 m-0 space-y-3">
                <li><a href="https://uns.ac.id" target="_blank" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Universitas Sebelas Maret</a></li>
                <li><a href="#" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Tim KKN 64</a></li>
                <li><a href="#" class="text-sm text-white/65 no-underline transition-colors duration-200 hover:text-[#E8A84C]">Dokumentasi</a></li>
            </ul>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="max-w-[1262px] mx-auto py-6 flex flex-col md:flex-row items-center justify-between gap-3">
        <span class="text-[13px] text-white/40">
            &copy; 2026 Desa Melikan. Dikembangkan oleh <strong class="text-[#E8A84C] font-semibold">KKN 64 UNS 2026</strong>
        </span>
        <span class="text-xs text-white/40">
            Universitas Sebelas Maret — Surakarta
        </span>
    </div>
</footer>
