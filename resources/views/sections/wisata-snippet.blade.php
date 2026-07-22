{{-- Wisata Section Snippet (Auto-Scrolling Marquee) --}}
<section class="py-24 px-6 bg-[#FBF8F3] relative overflow-hidden" id="wisata">
    
    <!-- Ornamen Lingkaran Sudut -->
    <div class="absolute top-10 right-10 opacity-20 pointer-events-none">
        <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="49" stroke="#2D5F5D" stroke-width="2" stroke-dasharray="8 8"/></svg>
    </div>

    <div class="max-w-[1262px] mx-auto mb-16 relative z-10">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-8">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-4 border border-[#E8A84C]/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Destinasi Wisata
                </span>
                <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A] leading-tight">
                    Pesona Alam Sekitar <span class="text-[#E8A84C] relative">Ngadirejo<svg class="absolute w-full h-3 -bottom-1 left-0 text-[#E8A84C]/30" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 5 Q 50 10 100 5" stroke="currentColor" stroke-width="4" fill="transparent"/></svg></span>
                </h2>
            </div>
            <div>
                <a href="{{ route('wisata') }}" class="group inline-flex items-center gap-3 px-6 py-3 bg-white text-[#2D5F5D] border border-gray-200 rounded-full font-bold hover:border-[#2D5F5D] hover:shadow-md transition-all duration-300">
                    Lihat Semua Destinasi
                    <div class="w-8 h-8 rounded-full bg-[#FBF8F3] flex items-center justify-center group-hover:bg-[#2D5F5D] group-hover:text-white transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5-5-5-5"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    {{-- Continuous Horizontal Scroll Marquee --}}
    <div class="relative w-full overflow-hidden py-4 select-none">
        <div class="absolute top-0 bottom-0 left-0 w-16 md:w-48 bg-gradient-to-r from-[#FBF8F3] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute top-0 bottom-0 right-0 w-16 md:w-48 bg-gradient-to-l from-[#FBF8F3] to-transparent z-10 pointer-events-none"></div>

        <div class="marquee-container">
            <div class="marquee-track">
                
                {{-- KELOMPOK 1 --}}
                <div class="marquee-group">
                    @forelse($wisatas as $wisata)
                        <div class="bg-white rounded-[32px] shadow-sm border border-[#E8E5DE] overflow-hidden flex flex-col h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                            <!-- Bagian Gambar Dalam Kartu -->
                            <div class="h-56 overflow-hidden relative m-3 rounded-[24px]">
                                @if($wisata->gambar)
                                    <img src="{{ asset('storage/' . $wisata->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $wisata->nama }}">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 font-medium">Tanpa Gambar</div>
                                @endif
                                <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-[11px] font-bold px-4 py-2 rounded-full text-[#1A3A2A] shadow-sm tracking-wider">📍 NGADIREJO</span>
                            </div>
                            
                            <!-- Bagian Teks -->
                            <div class="p-6 flex flex-col flex-grow">
                                <!-- Sistem str_replace akan otomatis mengubah kata Melikan mnjd Ngadirejo dari Database -->
                                <h3 class="font-['Outfit'] font-bold text-2xl text-[#1A3A2A] mb-2 group-hover:text-[#2D5F5D] transition-colors">{{ str_replace('Melikan', 'Ngadirejo', $wisata->nama) }}</h3>
                                <p class="text-[15px] text-[#6E6E73] line-clamp-3 mb-5 leading-relaxed">{{ str_replace('Melikan', 'Ngadirejo', $wisata->deskripsi) }}</p>
                                
                                <div class="mt-auto border-t border-gray-100 pt-5">
                                    <a href="{{ route('wisata') }}" class="text-[#2D5F5D] text-sm font-bold flex items-center justify-between w-full group/btn">
                                        Eksplorasi Sekarang 
                                        <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform text-[#E8A84C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="w-full p-10 text-center text-gray-500 bg-white rounded-3xl border border-[#E8E5DE]">Belum ada wisata terbaru.</div>
                    @endforelse
                </div>

                {{-- KELOMPOK 2 (Duplikat untuk efek infinite scroll) --}}
                <div class="marquee-group" aria-hidden="true">
                    @foreach($wisatas as $wisata)
                        <div class="bg-white rounded-[32px] shadow-sm border border-[#E8E5DE] overflow-hidden flex flex-col h-full hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 group">
                            <div class="h-56 overflow-hidden relative m-3 rounded-[24px]">
                                @if($wisata->gambar)
                                    <img src="{{ asset('storage/' . $wisata->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $wisata->nama }}">
                                @else
                                    <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 font-medium">Tanpa Gambar</div>
                                @endif
                                <span class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm text-[11px] font-bold px-4 py-2 rounded-full text-[#1A3A2A] shadow-sm tracking-wider">📍 NGADIREJO</span>
                            </div>
                            <div class="p-6 flex flex-col flex-grow">
                                <h3 class="font-['Outfit'] font-bold text-2xl text-[#1A3A2A] mb-2 group-hover:text-[#2D5F5D] transition-colors">{{ str_replace('Melikan', 'Ngadirejo', $wisata->nama) }}</h3>
                                <p class="text-[15px] text-[#6E6E73] line-clamp-3 mb-5 leading-relaxed">{{ str_replace('Melikan', 'Ngadirejo', $wisata->deskripsi) }}</p>
                                <div class="mt-auto border-t border-gray-100 pt-5">
                                    <a href="{{ route('wisata') }}" class="text-[#2D5F5D] text-sm font-bold flex items-center justify-between w-full group/btn">
                                        Eksplorasi Sekarang 
                                        <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform text-[#E8A84C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .marquee-container { display: flex; width: 100%; overflow: hidden; }
    .marquee-track { display: flex; width: max-content; animation: marquee-scroll 45s linear infinite; }
    .marquee-track:hover { animation-play-state: paused; }
    .marquee-group { display: flex; gap: 32px; padding-right: 32px; flex-shrink: 0; }
    .marquee-group > div { width: 340px; flex-shrink: 0; }
    @media (min-width: 768px) { .marquee-group > div { width: 400px; } }
    @keyframes marquee-scroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
</style>