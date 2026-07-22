<section class="py-20 lg:py-28 px-6 bg-[#FBF8F3] relative" id="perangkat-desa">
    <div class="max-w-[1262px] mx-auto">
        
        <!-- Header Perangkat Desa -->
        <div class="text-center mb-16">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-4 border border-[#E8A84C]/20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                Pemerintah Desa
            </span>
            <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A]">
                Perangkat Desa <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2D5F5D] to-[#1A3A2A]">Ngadirejo</span>
            </h2>
            <p class="text-gray-500 mt-4 max-w-2xl mx-auto text-lg">Mengenal lebih dekat para pelayan masyarakat yang berdedikasi membangun dan memajukan Desa Ngadirejo.</p>
        </div>

        <!-- Daftar Profil (Otomatis memanggil 4 data urutan pertama dari Database) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            @forelse(\App\Models\PerangkatDesa::take(4)->get() as $item)
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-xl hover:-translate-y-2 transition-all duration-300 group text-center p-8 flex flex-col items-center">
                
                <!-- Lingkaran Foto -->
                <div class="w-32 h-32 rounded-full overflow-hidden mb-5 border-4 border-[#FBF8F3] shadow-md relative bg-gray-50">
                    @php
                        // Cek apakah kolomnya bernama 'foto' atau 'gambar'
                        $fileGambar = $item->foto ?? $item->gambar ?? null;
                    @endphp

                    @if($fileGambar)
                        <img src="{{ asset('storage/' . $fileGambar) }}" alt="{{ $item->nama }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                        <div class="w-full h-full flex items-center justify-center text-gray-300">
                            <svg class="w-16 h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                        </div>
                    @endif
                </div>
                
                <!-- Teks Nama & Jabatan -->
                <h3 class="font-bold text-xl text-[#1A3A2A] mb-1 line-clamp-1 group-hover:text-[#2D5F5D] transition-colors">{{ $item->nama }}</h3>
                <p class="text-[#E8A84C] font-semibold text-sm uppercase tracking-wider mb-4">{{ $item->jabatan ?? 'Perangkat Desa' }}</p>
                
                <!-- Garis Pemisah Estetik -->
                <div class="w-12 h-1 bg-gray-200 rounded-full mt-auto group-hover:bg-[#2D5F5D] transition-colors"></div>
            </div>
            @empty
            <div class="col-span-full text-center py-12 bg-white rounded-3xl border border-dashed border-gray-300">
                <div class="w-16 h-16 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-4 text-gray-400">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-gray-700 mb-2">Belum Ada Data Perangkat</h3>
                <p class="text-gray-500">Struktur pemerintahan desa akan ditampilkan di sini.</p>
            </div>
            @endforelse
        </div>

        <!-- Tombol Lihat Semua -->
        <div class="mt-16 text-center">
            <a href="/perangkat-desa" class="inline-flex items-center gap-2 px-8 py-4 bg-[#1A3A2A] text-white rounded-full font-semibold hover:bg-[#2D5F5D] transition-all duration-300 shadow-md hover:-translate-y-1">
                Lihat Susunan Lengkap
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
        
    </div>
</section>