<section class="py-20 lg:py-24 px-6 bg-white relative" id="lembaga-desa">
    <div class="max-w-[1262px] mx-auto">
        
        <!-- Header Lembaga Desa (Desain Sebaris Kiri-Kanan yang Elegan) -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#2D5F5D]/10 text-[#2D5F5D] text-sm font-bold tracking-widest uppercase mb-4 border border-[#2D5F5D]/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    Pilar Masyarakat
                </span>
                <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A]">
                    Lembaga Mitra <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#E8A84C] to-[#D4933B]">Desa</span>
                </h2>
            </div>
            <div class="hidden md:block">
                <a href="/lembaga-desa" class="group inline-flex items-center gap-3 text-sm font-bold text-[#1A3A2A] hover:text-[#E8A84C] transition-colors">
                    Lihat Semua Lembaga
                    <span class="w-10 h-10 rounded-full bg-gray-50 group-hover:bg-[#E8A84C]/10 flex items-center justify-center transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                </a>
            </div>
        </div>

        <!-- Daftar Lembaga (Desain Horizontal Minimalis 2 Kolom) -->
        <!-- Menampilkan maksimal 4 lembaga agar beranda tetap ringkas -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse(\App\Models\LembagaDesa::take(4)->get() as $item)
            <a href="/lembaga-desa" class="group flex items-center p-6 bg-white rounded-[24px] border border-gray-100 shadow-sm hover:shadow-xl hover:border-[#E8A84C]/30 transition-all duration-300 relative overflow-hidden">
                
                <!-- Efek Background Hover (Glow Emas Halus) -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#FBF8F3] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                <!-- Ikon / Logo Lembaga -->
                <div class="w-20 h-20 shrink-0 rounded-2xl bg-gray-50 flex items-center justify-center text-[#2D5F5D] group-hover:bg-white group-hover:shadow-md transition-all duration-300 relative z-10 border border-gray-100 p-2">
                    @php
                        // Deteksi otomatis jika kolom menggunakan nama 'logo' atau 'gambar'
                        $fileLogo = $item->logo ?? $item->gambar ?? null;
                    @endphp

                    @if($fileLogo)
                        <img src="{{ asset('storage/' . $fileLogo) }}" alt="{{ $item->nama }}" class="w-full h-full object-contain group-hover:scale-110 transition-transform duration-500">
                    @else
                        <!-- Ikon Default Jika Belum Ada Logo -->
                        <svg class="w-10 h-10 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    @endif
                </div>

                <!-- Teks Deskripsi -->
                <div class="ml-6 relative z-10 flex-grow pr-4">
                    <h3 class="font-bold text-xl text-[#1A3A2A] mb-1 group-hover:text-[#2D5F5D] transition-colors">{{ $item->nama }}</h3>
                    <p class="text-sm text-gray-500 line-clamp-2 leading-relaxed">{{ $item->deskripsi ?? 'Pilar penggerak kegiatan dan pemberdayaan masyarakat Desa Ngadirejo.' }}</p>
                </div>

                <!-- Panah Interaktif -->
                <div class="relative z-10 text-gray-300 group-hover:text-[#E8A84C] group-hover:translate-x-1 transition-all duration-300 opacity-0 group-hover:opacity-100 md:opacity-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>
            </a>
            @empty
            <div class="col-span-full text-center py-12 bg-gray-50 rounded-[24px] border border-dashed border-gray-300">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400 shadow-sm">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Data Lembaga</h3>
                <p class="text-gray-500">Daftar lembaga desa akan segera ditambahkan di sini.</p>
            </div>
            @endforelse
        </div>

        <!-- Tombol Mobile (Muncul hanya di HP) -->
        <div class="mt-10 text-center md:hidden">
            <a href="/lembaga-desa" class="inline-flex items-center gap-2 px-8 py-4 bg-gray-100 text-[#1A3A2A] rounded-full font-semibold hover:bg-gray-200 transition-all duration-300">
                Lihat Semua Lembaga
            </a>
        </div>
        
    </div>
</section>