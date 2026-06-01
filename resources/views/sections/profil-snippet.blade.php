{{-- Profil Desa Section Snippet --}}
<section class="py-20 lg:py-24 px-6" id="profil">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image --}}
            <div class="relative reveal">
                <img src="{{ asset('images/about-village.png') }}" alt="Suasana Desa Melikan"
                     class="w-full aspect-[4/3] object-cover">
                <div class="absolute -bottom-4 -right-4 w-[120px] h-[120px] bg-gradient-to-br from-[#E8A84C] to-[#B87333] -z-10"></div>
            </div>

            {{-- Content --}}
            <div class="reveal reveal-delay-2">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Profil Desa
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-5">
                    Sekilas Tentang<br>Desa Melikan
                </h2>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-6">
                    Kalurahan Melikan merupakan sebuah kalurahan yang terletak di Kapanewon Rongkop, Kabupaten Gunungkidul,
                    Daerah Istimewa Yogyakarta. Desa ini dikenal dengan bentang alam bukit karst,
                    keramahan penduduknya, serta kekayaan tradisi yang masih terjaga.
                </p>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-8">
                    Dengan masyarakat yang gotong-royong, Desa Melikan terus berkembang melalui
                    berbagai inovasi di bidang pertanian, UMKM, dan pariwisata desa yang berkelanjutan.
                </p>

                <div>
                    <a href="/profil" class="inline-flex items-center gap-2 text-sm font-semibold text-[#2D5F5D] hover:underline transition-all duration-200">
                        Baca Selengkapnya
                        <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5-5-5-5"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
