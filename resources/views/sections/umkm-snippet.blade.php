<section class="py-20 lg:py-28 px-6 bg-white relative" id="umkm">
    <div class="max-w-[1262px] mx-auto">
        
        <!-- Header UMKM -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-4 border border-[#E8A84C]/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                Produk Lokal Desa
            </span>
            <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A]">
                UMKM <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2D5F5D] to-[#1A3A2A]">Ngadirejo</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">Dukung roda perekonomian desa dengan membeli dan mempromosikan produk-produk unggulan hasil karya warga Desa Ngadirejo.</p>
        </div>

        <!-- Daftar UMKM (Otomatis dari Database) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse(\App\Models\Umkm::latest()->take(4)->get() as $item)
            <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group flex flex-col h-full">
                <!-- Gambar Produk -->
                <div class="aspect-[4/3] overflow-hidden relative bg-white">
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="{{ $item->nama }}">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-400 bg-gray-200 text-sm font-medium">Tanpa Gambar</div>
                    @endif
                    <div class="absolute top-3 right-3 bg-white/95 backdrop-blur text-[10px] font-bold px-3 py-1.5 rounded-full text-[#2D5F5D] shadow-sm uppercase tracking-wider">
                        Unggulan
                    </div>
                </div>
                
                <!-- Teks Deskripsi -->
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="font-bold text-xl text-[#1A3A2A] mb-2 group-hover:text-[#2D5F5D] transition-colors line-clamp-1">{{ $item->nama }}</h3>
                    <p class="text-[14px] text-gray-500 line-clamp-2 mb-5 flex-grow leading-relaxed">{{ $item->deskripsi }}</p>
                    
                    <a href="/umkm" class="text-[#E8A84C] text-sm font-bold flex items-center justify-between w-full group/btn mt-auto pt-4 border-t border-gray-200">
                        Lihat Detail
                        <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform text-[#2D5F5D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16 bg-gray-50 rounded-3xl border border-dashed border-gray-300">
                <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Data UMKM</h3>
                <p class="text-gray-500">Katalog produk lokal desa akan segera ditambahkan di sini.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>