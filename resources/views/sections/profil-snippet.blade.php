<section class="py-20 lg:py-28 px-6 bg-white relative overflow-hidden" id="profil">
    <!-- Dekorasi Background -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-[#FBF8F3] -z-10 rounded-l-[100px] opacity-50"></div>
    <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-[#E8A84C]/10 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Gambar dengan Efek Melayang & Badge KKN -->
            <div class="relative group">
                <div class="absolute inset-0 bg-[#2D5F5D] rounded-3xl translate-x-4 translate-y-4 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500 -z-10"></div>
                
                @if(optional($profile)->logo)
                    <img src="{{ asset('storage/' . $profile->logo) }}" alt="Desa Ngadirejo" class="w-full aspect-[4/3] object-cover rounded-3xl shadow-xl border-4 border-white z-10 relative">
                @else
                    <div class="w-full aspect-[4/3] bg-gray-200 rounded-3xl flex items-center justify-center border-4 border-white shadow-xl z-10 relative">
                        <span class="text-gray-400">Gambar Desa Belum Tersedia</span>
                    </div>
                @endif
            </div>

            <!-- Teks Profil yang Dipercantik -->
            <div>
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#E8A84C]/10 text-[#E8A84C] text-sm font-bold tracking-widest uppercase mb-6 border border-[#E8A84C]/20">
                    <span class="w-2 h-2 rounded-full bg-[#E8A84C] animate-pulse"></span>
                    Profil Desa
                </span>
                
                <h2 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#1A3A2A] mb-6 leading-tight">
                    Sekilas Tentang <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2D5F5D] to-[#1A3A2A]">Desa Ngadirejo</span>
                </h2>
                
                <div class="prose prose-lg text-gray-600 mb-8 leading-relaxed">
                    {{-- Filter otomatis jika Admin mengisi teks sembarangan --}}
                    @if(optional($profile)->sejarah && strlen($profile->sejarah) > 20)
                        <p>{{ Str::limit($profile->sejarah, 350) }}</p>
                    @else
                        <p>
                            Desa Ngadirejo merupakan desa yang terletak di Kecamatan Mojogedang, Kabupaten Karanganyar. Dikenal dengan keramahan penduduknya, panorama alam yang asri, serta kekayaan tradisi yang masih dijaga turun-temurun.
                        </p>
                        <p class="text-sm text-red-500 italic text-[12px] mt-2">*Catatan untuk Admin: Silakan lengkapi sejarah desa di panel Kelola Profil.</p>
                    @endif
                </div>

                <a href="/profil" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-[#2D5F5D] text-white rounded-full font-semibold hover:bg-[#1A3A2A] hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                    Jelajahi Profil Lengkap
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

        </div>
    </div>
</section>