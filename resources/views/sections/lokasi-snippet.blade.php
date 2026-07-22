{{-- Lokasi Section Snippet --}}
<section class="py-20 lg:py-24 px-6" id="lokasi">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            {{-- Left: Text & CTA --}}
            <div class="reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Lokasi Desa
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-5">
                    Temukan Desa Ngadirejo
                </h2>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-8">
                    Desa Ngadirejo berada di Kecamatan Mojogedang, Kabupaten Karanganyar, Jawa Tengah. Lokasi desa mudah dijangkau dari arah Kota Karanganyar maupun dari Solo.
                </p>

                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3">
                        <span class="w-2.5 h-2.5 bg-[#2D5F5D] rounded-full"></span>
                        <span class="text-[15px] font-medium text-[#333336]">57752 (Kode Pos Desa)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="w-2.5 h-2.5 bg-[#2D5F5D] rounded-full"></span>
                        <span class="text-[15px] font-medium text-[#333336]">Kecamatan Mojogedang, Kabupaten Karanganyar</span>
                    </div>
                </div>

                <div>
                    <a href="/lokasi" class="inline-flex items-center justify-center h-10 px-6 text-sm font-semibold rounded-full bg-gradient-to-br from-[#2D5F5D] to-[#1A4B5C] text-white no-underline transition-all duration-200 shadow-[0_2px_8px_rgba(26,75,92,0.2)] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(26,75,92,0.3)]">
                        Buka Peta Interaktif
                    </a>
                </div>
            </div>

            {{-- Right: Card graphic link to map --}}
            <div class="relative reveal reveal-delay-2 cursor-pointer group" onclick="window.location.href='/lokasi'">
                <div class="overflow-hidden border border-[#E8E5DE] aspect-[16/10] bg-[#E8F0EF] flex items-center justify-center relative rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-200">
                    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#2d5f5d_1px,transparent_1px)] [background-size:16px_16px]"></div>
                    <div class="text-center p-8 z-10">
                        <div class="w-16 h-16 bg-[#2D5F5D] rounded-full flex items-center justify-center text-white mx-auto mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <h4 class="font-['Outfit'] text-lg font-semibold text-[#1A3A2A] mb-1">Klik untuk Lihat Peta</h4>
                        <p class="text-sm text-[#6E6E73]">Lihat letak Desa Ngadirejo via Google Maps</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>