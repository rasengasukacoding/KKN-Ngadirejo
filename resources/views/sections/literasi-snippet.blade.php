<section class="py-20 px-6 bg-white relative">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Bagian Teks Kiri -->
            <div>
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-4 border border-[#E8A84C]/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    Program Literasi
                </span>
                <h2 class="text-4xl md:text-5xl font-bold text-[#1A3A2A] mb-6 leading-tight">
                    Ngadirejo Membaca
                </h2>
                <div class="prose prose-lg text-gray-600 mb-8">
                    <p class="leading-relaxed">
                        Ngadirejo Membaca merupakan program kerja mahasiswa KKN Universitas Sebelas Maret yang bertujuan meningkatkan budaya literasi masyarakat Desa Ngadirejo melalui kegiatan membaca, pendampingan belajar, dan pelatihan digital.
                    </p>
                    <p class="leading-relaxed mt-4">
                        Program ini melibatkan pemerintah desa, guru, kader PKK, karang taruna, dan anak-anak sekolah dasar sehingga tercipta lingkungan belajar yang aktif, kreatif, dan berkelanjutan.
                    </p>
                </div>
                
                {{-- Tombol hanya muncul di Beranda, sembunyikan jika sudah di halaman Kegiatan --}}
                @if(request()->routeIs('home') || request()->path() == '/')
                <a href="/kegiatan-berita" class="inline-flex items-center gap-2 px-6 py-3 bg-[#1A3A2A] text-white rounded-full font-semibold hover:bg-[#2D5F5D] transition-colors shadow-md mt-4">
                    Lihat Dokumentasi Kegiatan
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                @endif
            </div>

            <!-- Bagian Statistik Kanan (Dinamis dari Database Admin) -->
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all group">
                    <div class="w-12 h-12 bg-[#E8A84C]/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#E8A84C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h3 class="font-bold text-4xl text-[#1A3A2A]">{{ \App\Models\Profile::first()->kkn_buku ?? '150+' }}</h3>
                    <p class="text-gray-500 mt-2 font-medium">Buku Bacaan</p>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all group">
                    <div class="w-12 h-12 bg-[#2D5F5D]/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#2D5F5D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="font-bold text-4xl text-[#1A3A2A]">{{ \App\Models\Profile::first()->kkn_peserta ?? '75+' }}</h3>
                    <p class="text-gray-500 mt-2 font-medium">Peserta Aktif</p>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all group">
                    <div class="w-12 h-12 bg-[#2D5F5D]/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#2D5F5D]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h3 class="font-bold text-4xl text-[#1A3A2A]">{{ \App\Models\Profile::first()->kkn_program ?? '6' }}</h3>
                    <p class="text-gray-500 mt-2 font-medium">Program Literasi</p>
                </div>
                <div class="bg-gray-50 rounded-2xl shadow-sm border border-gray-100 p-8 hover:shadow-md hover:-translate-y-1 transition-all group">
                    <div class="w-12 h-12 bg-[#E8A84C]/10 rounded-xl flex items-center justify-center mb-5 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-[#E8A84C]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-bold text-4xl text-[#1A3A2A]">{{ \App\Models\Profile::first()->kkn_hari ?? '30' }}</h3>
                    <p class="text-gray-500 mt-2 font-medium">Hari Kegiatan</p>
                </div>
            </div>
            
        </div>
    </div>
</section>