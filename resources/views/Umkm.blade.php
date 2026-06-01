<x-layouts.app title="Katalog Produk UMKM — Kalurahan Melikan, Rongkop" description="Mendukung kemandirian lokal dengan membeli kerajinan anyaman bambu, makanan olahan tiwul & gatot instan, dan seni ukir batu kapur buatan warga Melikan, Gunungkidul.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Karya Kreatif Warga</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Katalog UMKM Melikan</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Dapatkan produk kerajinan tangan otentik dan kuliner kering tradisional khas Gunungkidul langsung dari produsen lokal desa.
            </p>
        </div>
    </div>

    {{-- Products Grid --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                {{-- Product 1 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300 reveal">
                    <div>
                        <div class="aspect-square bg-[#E8F0EF] relative overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/bamboo_craft.png') }}" alt="Anyaman Bambu Melikan" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#E8A84C]">Kerajinan</span>
                            <h3 class="font-['Outfit'] text-xl font-semibold mt-1 mb-2 text-[#1A3A2A]">Anyaman Bambu</h3>
                            <p class="text-sm text-[#6E6E73] mb-4">
                                Keranjang estetis, wadah hantaran, dan topi caping berbahan bambu lokal berkualitas tinggi hasil anyaman pengrajin sepuh desa Melikan.
                            </p>
                            <div class="text-[15px] font-bold text-[#2D5F5D]">Estimasi: Rp 15.000 — Rp 85.000</div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="https://wa.me/62855884000?text=Halo%20Admin%20UMKM%20Melikan,%20saya%20tertarik%20untuk%20memesan%20Anyaman%20Bambu." target="_blank"
                           class="w-full inline-flex items-center justify-center h-10 px-4 text-xs font-bold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Pesan via WhatsApp &rarr;
                        </a>
                    </div>
                </div>

                {{-- Product 2 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300 reveal reveal-delay-1">
                    <div>
                        <div class="aspect-square bg-[#E8F0EF] relative overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/tiwul_gatot.png') }}" alt="Tiwul & Gatot Instan Melikan" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#E8A84C]">Kuliner Tradisional</span>
                            <h3 class="font-['Outfit'] text-xl font-semibold mt-1 mb-2 text-[#1A3A2A]">Tiwul & Gatot Instan</h3>
                            <p class="text-sm text-[#6E6E73] mb-4">
                                Makanan pokok tradisional khas Gunungkidul olahan singkong pilihan. Dikemas praktis, higienis, dan mudah disajikan dengan rasa legit khas daerah.
                            </p>
                            <div class="text-[15px] font-bold text-[#2D5F5D]">Estimasi: Rp 12.000 — Rp 25.000</div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="https://wa.me/62855884000?text=Halo%20Admin%20UMKM%20Melikan,%20saya%20tertarik%20untuk%20memesan%20Tiwul%20dan%20Gatot%20Instan." target="_blank"
                           class="w-full inline-flex items-center justify-center h-10 px-4 text-xs font-bold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Pesan via WhatsApp &rarr;
                        </a>
                    </div>
                </div>

                {{-- Product 3 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300 reveal reveal-delay-2">
                    <div>
                        <div class="aspect-square bg-[#E8F0EF] relative overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/tempeh_chips.png') }}" alt="Keripik Tempe Sagu Melikan" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#E8A84C]">Camilan</span>
                            <h3 class="font-['Outfit'] text-xl font-semibold mt-1 mb-2 text-[#1A3A2A]">Keripik Tempe Sagu</h3>
                            <p class="text-sm text-[#6E6E73] mb-4">
                                Keripik tempe tipis berbalut tepung sagu yang renyah dengan racikan bumbu bawang putih khas nusantara, tanpa pengawet buatan.
                            </p>
                            <div class="text-[15px] font-bold text-[#2D5F5D]">Estimasi: Rp 10.000 — Rp 20.000</div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="https://wa.me/62855884000?text=Halo%20Admin%20UMKM%20Melikan,%20saya%20tertarik%20untuk%20memesan%20Keripik%20Tempe%20Sagu." target="_blank"
                           class="w-full inline-flex items-center justify-center h-10 px-4 text-xs font-bold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Pesan via WhatsApp &rarr;
                        </a>
                    </div>
                </div>

                {{-- Product 4 --}}
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300 reveal reveal-delay-3">
                    <div>
                        <div class="aspect-square bg-[#E8F0EF] relative overflow-hidden flex items-center justify-center">
                            <img src="{{ asset('images/stone_carving.png') }}" alt="Kerajinan Ukir Batu Karst Melikan" class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <span class="text-[11px] font-semibold uppercase tracking-wider text-[#E8A84C]">Seni Rupa</span>
                            <h3 class="font-['Outfit'] text-xl font-semibold mt-1 mb-2 text-[#1A3A2A]">Kerajinan Ukir Batu Karst</h3>
                            <p class="text-sm text-[#6E6E73] mb-4">
                                Ornamen dekorasi rumah, lampion taman, dan relief dinding berestetika tinggi yang dipahat langsung menggunakan batu putih kapur khas perbukitan Gunungkidul.
                            </p>
                            <div class="text-[15px] font-bold text-[#2D5F5D]">Estimasi: Rp 75.000 — Rp 300.000</div>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <a href="https://wa.me/62855884000?text=Halo%20Admin%20UMKM%20Melikan,%20saya%20tertarik%20untuk%20memesan%20Kerajinan%20Ukir%20Batu%20Karst." target="_blank"
                           class="w-full inline-flex items-center justify-center h-10 px-4 text-xs font-bold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Pesan via WhatsApp &rarr;
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
