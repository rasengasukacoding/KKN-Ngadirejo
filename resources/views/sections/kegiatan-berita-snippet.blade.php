<section class="py-20 lg:py-28 px-6 bg-white relative" id="berita">
    <div class="max-w-[1262px] mx-auto">
        
        <!-- Header Berita & Kegiatan -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-4 border border-[#E8A84C]/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                Kabar Desa
            </span>
            <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A]">
                Berita & Kegiatan <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2D5F5D] to-[#1A3A2A]">Terbaru</span>
            </h2>
        </div>

        <!-- Daftar Berita (Otomatis mengambil 3 terbaru dari Database) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse(\App\Models\Post::latest()->take(3)->get() as $post)
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
                    <!-- Gambar Berita -->
                    <div class="aspect-video overflow-hidden relative bg-white">
                        @if($post->gambar)
                            <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        @else
                            <div class="w-full h-full flex flex-col items-center justify-center text-gray-400 bg-gray-200">
                                <svg class="w-10 h-10 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-xs font-medium">Tanpa Gambar</span>
                            </div>
                        @endif
                        
                        @if($post->kategori)
                            <span class="absolute top-4 left-4 bg-white/95 backdrop-blur text-[11px] font-bold px-3 py-1.5 rounded-md text-[#1A3A2A] shadow-sm uppercase tracking-wider border border-gray-100">
                                {{ $post->kategori }}
                            </span>
                        @endif
                    </div>

                    <!-- Teks Konten -->
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="text-xs text-gray-500 mb-3 flex items-center gap-2 font-medium">
                            <svg class="w-4 h-4 text-[#E8A84C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            {{ $post->created_at ? $post->created_at->format('d M Y') : 'Baru saja' }}
                        </div>
                        <h3 class="font-bold text-xl text-[#1A3A2A] mb-3 group-hover:text-[#2D5F5D] transition-colors line-clamp-2 leading-snug">
                            {{ $post->judul }}
                        </h3>
                        <p class="text-gray-600 text-[15px] line-clamp-3 mb-6 flex-grow leading-relaxed">
                            {{ $post->konten }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="col-span-full bg-gray-50 rounded-3xl p-12 text-center border border-dashed border-gray-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400 shadow-sm">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Publikasi</h3>
                    <p class="text-gray-500">Berita dan kegiatan terbaru akan muncul di sini.</p>
                </div>
            @endforelse
        </div>

        <!-- Tombol Lihat Semua -->
        <div class="mt-16 text-center">
            <a href="/kegiatan-berita" class="inline-flex items-center gap-2 px-8 py-4 bg-[#1A3A2A] text-white rounded-full font-semibold hover:bg-[#2D5F5D] transition-all duration-300 shadow-md hover:-translate-y-1">
                Jelajahi Semua Publikasi
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
    </div>
</section>