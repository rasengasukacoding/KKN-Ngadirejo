{{-- Melikan Belajar Section Snippet --}}
<section class="py-20 lg:py-24 px-6 bg-[#1A3A2A]" id="melikan-belajar">
    <div class="max-w-[1262px] mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Melikan Belajar
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight text-white">
                    Dokumentasi Program Kerja
                </h2>
            </div>
            <div>
                <a href="/melikan-belajar" class="inline-flex items-center gap-2 text-sm font-semibold text-[#E8F0EF] hover:text-[#E8A84C] transition-all duration-200 no-underline">
                    Lihat Semua Program Kerja (6)
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5-5-5-5"/></svg>
                </a>
            </div>
        </div>

        {{-- Proker Cards Grid (Only 3 for preview) --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7">
            <x-proker-card
                title="Bimbingan Belajar Anak"
                description="Program pendampingan belajar untuk anak-anak SD dan SMP di Desa Melikan dengan materi pelajaran sekolah dan kegiatan edukatif kreatif."
                date="Mei — Juni 2026"
                delay="1"
            >
                <x-slot name="icon">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </x-slot>
            </x-proker-card>

            <x-proker-card
                title="Pelatihan Digital Marketing"
                description="Workshop pemasaran digital untuk pelaku UMKM desa agar produk lokal bisa dikenal lebih luas melalui platform media sosial dan marketplace."
                date="Mei 2026"
                delay="2"
            >
                <x-slot name="icon">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </x-slot>
            </x-proker-card>

            <x-proker-card
                title="Edukasi Pertanian Modern"
                description="Sosialisasi teknik pertanian modern, pengelolaan lahan berkelanjutan, dan pemanfaatan teknologi sederhana untuk meningkatkan hasil panen."
                date="Mei — Juni 2026"
                delay="3"
            >
                <x-slot name="icon">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l-.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </x-slot>
            </x-proker-card>
        </div>
    </div>
</section>
