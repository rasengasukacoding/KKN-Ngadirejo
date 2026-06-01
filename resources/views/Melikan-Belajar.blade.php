<x-layouts.app title="Melikan Belajar — Dokumentasi Program Kerja KKN" description="Kumpulan modul, dokumentasi, dan materi program kerja pemberdayaan masyarakat oleh Tim KKN 64 UNS di Kalurahan Melikan, Rongkop, Gunungkidul.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Dokumentasi Proker KKN</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Melikan Belajar</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Kumpulan materi, modul, dan dokumentasi program kerja yang telah diselenggarakan oleh Tim KKN 64 UNS 2026 di Kalurahan Melikan.
            </p>
        </div>
    </div>

    {{-- Filter Tabs & Proker List --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            
            {{-- Banner Image --}}
            <div class="mb-16 overflow-hidden rounded-2xl shadow-md reveal">
                <img src="{{ asset('images/melikan-belajar.png') }}" alt="Kegiatan Edukasi Melikan Belajar KKN UNS 64"
                     class="w-full aspect-[21/9] object-cover transition-all duration-300 hover:scale-[1.01]">
            </div>

            {{-- Category Filter --}}
            <div class="flex flex-wrap items-center justify-center gap-2 mb-12 reveal" id="filter-buttons">
                <button data-filter="all" class="filter-btn active px-4 py-2 text-xs font-semibold rounded-full border border-[#2D5F5D] bg-[#2D5F5D] text-white transition-all duration-200 cursor-pointer">
                    Semua
                </button>
                <button data-filter="pendidikan" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Pendidikan
                </button>
                <button data-filter="ekonomi" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Ekonomi
                </button>
                <button data-filter="pertanian" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Pertanian
                </button>
                <button data-filter="kesehatan" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Kesehatan
                </button>
                <button data-filter="lingkungan" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Lingkungan
                </button>
                <button data-filter="senibudaya" class="filter-btn px-4 py-2 text-xs font-semibold rounded-full border border-[#E8E5DE] bg-transparent text-[#6E6E73] hover:border-[#2D5F5D] hover:text-[#2D5F5D] transition-all duration-200 cursor-pointer">
                    Seni & Budaya
                </button>
            </div>

            {{-- Proker Cards Grid (Dark container wrapper because proker cards are styled dark) --}}
            <div class="bg-[#1A3A2A] p-8 md:p-12 rounded-3xl reveal">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7" id="proker-grid">
                    
                    <div data-category="pendidikan" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Bimbingan Belajar Anak"
                            description="Program pendampingan belajar untuk anak-anak sekolah dasar di Kalurahan Melikan dengan materi sekolah dan bimbingan edukatif."
                            date="Mei — Juni 2026"
                            delay="1"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                    <div data-category="ekonomi" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Pelatihan Digital Marketing"
                            description="Workshop pemasaran digital untuk pelaku UMKM anyaman bambu desa agar produk lokal dikenal luas secara daring."
                            date="Mei 2026"
                            delay="2"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                    <div data-category="pertanian" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Edukasi Pertanian Modern"
                            description="Sosialisasi teknik penanaman hortikultura di area karst dan pengelolaan tanah bukit batu untuk mendongkrak ketahanan pangan lokal."
                            date="Mei — Juni 2026"
                            delay="3"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m0-12.728l.707.707m12.728 12.728l-.707-.707M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                    <div data-category="kesehatan" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Posyandu & Cek Kesehatan"
                            description="Pemeriksaan kesehatan dasar gratis dan sosialisasi pencegahan stunting serta pola hidup bersih sehat bagi balita dan lansia."
                            date="Mei 2026"
                            delay="1"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                    <div data-category="lingkungan" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Pengelolaan Sampah Desa"
                            description="Program edukasi pemilahan sampah organik and anorganik serta pelatihan pembuatan kompos rumah tangga ramah lingkungan."
                            date="Juni 2026"
                            delay="2"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                    <div data-category="senibudaya" class="proker-card-wrapper h-full transition-all duration-300">
                        <x-proker-card
                            title="Workshop Seni & Budaya"
                            description="Pementasan dan latihan kebudayaan tradisional ketoprak dan reog untuk melestarikan khazanah warisan budaya leluhur desa."
                            date="Juni 2026"
                            delay="3"
                        >
                            <x-slot name="icon">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                            </x-slot>
                        </x-proker-card>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Filter JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const buttons = document.querySelectorAll('.filter-btn');
            const cards = document.querySelectorAll('.proker-card-wrapper');
            const grid = document.getElementById('proker-grid');

            if (grid) {
                grid.style.transition = 'opacity 200ms ease-in-out, transform 200ms ease-in-out';
            }

            buttons.forEach(btn => {
                btn.addEventListener('click', function () {
                    // Update active button state
                    buttons.forEach(b => {
                        b.classList.remove('active', 'bg-[#2D5F5D]', 'text-white', 'border-[#2D5F5D]');
                        b.classList.add('bg-transparent', 'text-[#6E6E73]', 'border-[#E8E5DE]');
                    });
                    
                    this.classList.add('active', 'bg-[#2D5F5D]', 'text-white', 'border-[#2D5F5D]');
                    this.classList.remove('bg-transparent', 'text-[#6E6E73]', 'border-[#E8E5DE]');

                    const filterValue = this.getAttribute('data-filter');

                    if (grid) {
                        const oldHeight = grid.offsetHeight;

                        // Lock container height and hide overflow to prevent layout jumps
                        grid.style.height = oldHeight + 'px';
                        grid.style.overflow = 'hidden';

                        // Fade out and translate down slightly
                        grid.style.opacity = '0';
                        grid.style.transform = 'translateY(4px)';

                        setTimeout(() => {
                            // Swap cards display
                            cards.forEach(card => {
                                const category = card.getAttribute('data-category');
                                if (filterValue === 'all' || filterValue === category) {
                                    card.style.display = '';
                                } else {
                                    card.style.display = 'none';
                                }
                            });

                            // Measure new natural height
                            grid.style.height = '';
                            const newHeight = grid.offsetHeight;

                            // Restore old height for start of transition
                            grid.style.height = oldHeight + 'px';
                            grid.offsetHeight; // force reflow

                            // Apply smooth height and fade transitions
                            grid.style.transition = 'opacity 200ms ease-in-out, transform 200ms ease-in-out, height 250ms ease-in-out';
                            
                            // Animate height to new height
                            grid.style.height = newHeight + 'px';

                            // Fade back in and restore position
                            grid.style.opacity = '1';
                            grid.style.transform = 'translateY(0)';

                            // Reset properties after transition to maintain responsiveness
                            setTimeout(() => {
                                grid.style.height = '';
                                grid.style.overflow = '';
                                grid.style.transition = 'opacity 200ms ease-in-out, transform 200ms ease-in-out';
                            }, 250);
                        }, 200);
                    }
                });
            });
        });
    </script>
</x-layouts.app>
