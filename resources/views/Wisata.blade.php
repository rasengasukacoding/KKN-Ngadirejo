<x-layouts.app title="Destinasi Wisata Karst — Kalurahan Melikan, Rongkop" description="Temukan keajaiban susur gua karst, telaga tadah hujan yang eksotis, dan petualangan trekking Bengawan Solo Purba di Kalurahan Melikan, Rongkop, Gunungkidul.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Eksplorasi Alam Karst</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Destinasi Wisata Melikan</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Jelajahi petualangan eksotis di gugusan perbukitan seribu Rongkop, dari gua batu kapur hingga situs prasejarah Bengawan Solo Purba.
            </p>
        </div>
    </div>

    {{-- Wisata List Grid with Details --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                {{-- Wisata 1 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between reveal transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="relative overflow-hidden aspect-[16/10]">
                            <img src="{{ asset('images/wisata-nature.png') }}" alt="Susur Gua Karst Kalurahan Melikan Gunungkidul" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-white/95 backdrop-blur text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm text-[#1A3A2A]">Petualangan</span>
                        </div>
                        <div class="p-8">
                            <h3 class="font-['Outfit'] text-2xl font-semibold mb-3 text-[#1A3A2A]">Susur Gua Karst</h3>
                            <p class="text-[15px] leading-relaxed text-[#6E6E73] mb-6">
                                Nikmati petualangan menyusuri gua kapur alami dengan formasi stalaktit dan stalakmit yang masih aktif dan memancarkan keindahan geologis khas Rongkop.
                            </p>
                            
                            {{-- Details --}}
                            <div class="space-y-3.5 border-t border-[#E8E5DE] pt-5">
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                                    </span>
                                    <span><strong>Tiket Masuk:</strong> Rp 10.000 / Orang</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </span>
                                    <span><strong>Jam Operasional:</strong> 08.00 — 16.00 WIB</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </span>
                                    <span><strong>Fasilitas:</strong> Helm & Senter, Guide Lokal, Parkir Luas</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-0">
                        <a href="https://maps.google.com" target="_blank" class="w-full inline-flex items-center justify-center h-10 px-5 text-sm font-semibold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Petunjuk Arah &rarr;
                        </a>
                    </div>
                </div>

                {{-- Wisata 2 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between reveal reveal-delay-1 transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="relative overflow-hidden aspect-[16/10]">
                            <img src="{{ asset('images/wisata-waterfall.png') }}" alt="Telaga Karst Tadah Hujan Gunungkidul" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-white/95 backdrop-blur text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm text-[#1A3A2A]">Ekologi</span>
                        </div>
                        <div class="p-8">
                            <h3 class="font-['Outfit'] text-2xl font-semibold mb-3 text-[#1A3A2A]">Telaga Karst Alami</h3>
                            <p class="text-[15px] leading-relaxed text-[#6E6E73] mb-6">
                                Telaga tadah hujan eksotis yang menjadi tumpuan cadangan air warga dan ekosistem lokal. Menawarkan spot foto senja bukit batu kapur yang tenang.
                            </p>
                            
                            {{-- Details --}}
                            <div class="space-y-3.5 border-t border-[#E8E5DE] pt-5">
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                                    </span>
                                    <span><strong>Tiket Masuk:</strong> Gratis (Sukarela)</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </span>
                                    <span><strong>Jam Operasional:</strong> 24 Jam (Terbaik sore hari)</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </span>
                                    <span><strong>Fasilitas:</strong> Gazebo santai, Spot Foto Senja, Warung</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-0">
                        <a href="https://maps.google.com" target="_blank" class="w-full inline-flex items-center justify-center h-10 px-5 text-sm font-semibold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Petunjuk Arah &rarr;
                        </a>
                    </div>
                </div>

                {{-- Wisata 3 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between reveal reveal-delay-2 transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="relative overflow-hidden aspect-[16/10]">
                            <img src="{{ asset('images/hero-village.png') }}" alt="Situs Lembah Bengawan Solo Purba Rongkop" class="w-full h-full object-cover">
                            <span class="absolute top-4 left-4 bg-white/95 backdrop-blur text-xs font-semibold px-3 py-1.5 rounded-full shadow-sm text-[#1A3A2A]">Edukasi</span>
                        </div>
                        <div class="p-8">
                            <h3 class="font-['Outfit'] text-2xl font-semibold mb-3 text-[#1A3A2A]">Trekking Bengawan Solo Purba</h3>
                            <p class="text-[15px] leading-relaxed text-[#6E6E73] mb-6">
                                Jalur susur lembah kering bekas aliran Bengawan Solo Purba jutaan tahun lalu. Penuh dengan edukasi sejarah alam geologis pulau Jawa bagi pelajar.
                            </p>
                            
                            {{-- Details --}}
                            <div class="space-y-3.5 border-t border-[#E8E5DE] pt-5">
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"></path></svg>
                                    </span>
                                    <span><strong>Tiket Masuk:</strong> Rp 15.000 / Paket</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </span>
                                    <span><strong>Jam Operasional:</strong> Berdasarkan Reservasi</span>
                                </div>
                                <div class="flex items-center gap-3 text-sm text-[#333336]">
                                    <span class="shrink-0 w-5 h-5 flex items-center justify-center">
                                        <svg class="w-4 h-4 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                    </span>
                                    <span><strong>Fasilitas:</strong> Pemandu Edukasi, Peta Rute Trekking, Mineral</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-8 pt-0">
                        <a href="https://maps.google.com" target="_blank" class="w-full inline-flex items-center justify-center h-10 px-5 text-sm font-semibold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Petunjuk Arah &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
