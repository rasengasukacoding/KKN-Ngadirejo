<x-layouts.app title="Kegiatan & Berita | Desa Ngadirejo" description="Informasi terbaru, berita, dan dokumentasi program kerja KKN Literasi 294 UNS di Desa Ngadirejo.">

    {{-- ========================================== --}}
    {{-- 1. HEADER HALAMAN --}}
    {{-- ========================================== --}}
    <section class="bg-[#1A3A2A] py-20 lg:py-28 px-6 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden opacity-10 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-[#E8A84C] rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-[1000px] mx-auto text-center relative z-10">
            <span class="text-[#E8A84C] font-semibold tracking-widest text-sm uppercase mb-4 block">
                Kegiatan & Berita Desa
            </span>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                Kabar dan Program Kerja
            </h1>
            <p class="text-gray-300 mx-auto text-lg leading-relaxed max-w-3xl">
                Kumpulan informasi terbaru, liputan kegiatan desa, serta dokumentasi pelaksanaan program kerja pengabdian masyarakat yang diselenggarakan oleh <strong>Tim KKN Literasi 294 UNS</strong> di Desa Ngadirejo.
            </p>
        </div>
    </section>

    {{-- ========================================== --}}
    {{-- 2. TENTANG PROGRAM LITERASI (Tersinkronisasi) --}}
    {{-- ========================================== --}}
    @include('sections.literasi-snippet')

    {{-- ========================================== --}}
    {{-- 3. DAFTAR BERITA / KEGIATAN (Dinamis Database) --}}
    {{-- ========================================== --}}
    <section class="py-20 px-6 bg-gray-50 min-h-screen" id="galeri-kegiatan">
        <div class="max-w-[1262px] mx-auto">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Melakukan perulangan (looping) data dari database Admin --}}
                @forelse($posts as $post)
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full group">
                        
                        {{-- Gambar Post --}}
                        <div class="aspect-video overflow-hidden relative bg-gray-100">
                            @if($post->gambar)
                                <img src="{{ asset('storage/' . $post->gambar) }}" alt="{{ $post->judul }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex flex-col items-center justify-center text-gray-400">
                                    <svg class="w-10 h-10 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <span class="text-xs font-medium">Tanpa Gambar</span>
                                </div>
                            @endif
                            
                            {{-- Label Kategori --}}
                            @if($post->kategori)
                                <span class="absolute top-4 left-4 bg-white/95 backdrop-blur text-[11px] font-bold px-3 py-1.5 rounded-md text-[#1A3A2A] shadow-sm uppercase tracking-wider border border-gray-100">
                                    {{ $post->kategori }}
                                </span>
                            @endif
                        </div>

                        {{-- Teks Konten --}}
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
                    
                {{-- Tampilan jika Admin belum mempublikasikan kegiatan apa pun --}}
                @empty
                    <div class="col-span-full bg-white rounded-3xl p-16 text-center shadow-sm border border-gray-100">
                        <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-3">Belum Ada Publikasi</h3>
                        <p class="text-gray-500 max-w-md mx-auto">Dokumentasi program kerja, kegiatan, atau berita belum diterbitkan oleh Admin. Silakan kembali lagi nanti.</p>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

</x-layouts.app>