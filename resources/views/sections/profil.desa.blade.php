{{-- Profil Desa Section --}}
<section class="py-20 lg:py-28 px-6" id="profil">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Image --}}
            <div class="relative reveal">
                <img src="{{ asset('images/about-village.png') }}" alt="Suasana Desa Ngadirejo"
                     class="w-full aspect-[4/3] object-cover">
                <div class="absolute -bottom-4 -right-4 w-[120px] h-[120px] bg-gradient-to-br from-[#E8A84C] to-[#B87333] -z-10"></div>
            </div>

            {{-- Content --}}
            <div class="reveal reveal-delay-2">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Profil Desa
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-5">
                    Sekilas Tentang<br>Desa Ngadirejo
                </h2>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-4">
                    Desa Ngadirejo merupakan sebuah desa yang terletak di Kecamatan Mojogedang, Kabupaten Karanganyar,
                    Jawa Tengah. Desa ini dikenal dengan keindahan alam persawahannya,
                    keramahan penduduknya, serta kekayaan budaya Jawa yang masih terjaga lestari.
                </p>
                <p class="text-[17px] leading-relaxed text-[#6E6E73]">
                    Dengan masyarakat yang gotong-royong, Desa Ngadirejo terus berkembang melalui
                    berbagai inovasi di bidang pertanian, UMKM, dan pariwisata desa yang berkelanjutan.
                </p>

                {{-- Stats --}}
                <div class="grid grid-cols-3 gap-6 mt-10 pt-8 border-t border-[#E8E5DE]">
                    <div class="text-center">
                        <div class="font-['Outfit'] text-4xl lg:text-[36px] font-bold text-[#2D5F5D] leading-none mb-1" data-count="3280">0</div>
                        <div class="text-[13px] text-[#6E6E73]">Jiwa Penduduk</div>
                    </div>
                    <div class="text-center">
                        <div class="font-['Outfit'] text-4xl lg:text-[36px] font-bold text-[#2D5F5D] leading-none mb-1" data-count="15">0</div>
                        <div class="text-[13px] text-[#6E6E73]">Dusun</div>
                    </div>
                    <div class="text-center">
                        <div class="font-['Outfit'] text-4xl lg:text-[36px] font-bold text-[#2D5F5D] leading-none mb-1" data-count="45">0</div>
                        <div class="text-[13px] text-[#6E6E73]">RT</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>