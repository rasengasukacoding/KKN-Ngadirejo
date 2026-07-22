<x-layouts.app title="Katalog Produk UMKM — Desa Ngadirejo, Mojogedang" description="Mendukung kemandirian lokal dengan membeli produk hasil karya dan olahan pangan buatan warga Ngadirejo, Karanganyar.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Karya Kreatif Warga</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Katalog UMKM Ngadirejo</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Dapatkan produk kerajinan tangan otentik dan kuliner tradisional khas Karanganyar langsung dari produsen lokal desa.
            </p>
        </div>
    </div>

    {{-- Products Grid --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @forelse($umkms as $umkm)
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between hover:shadow-md transition-all duration-300 reveal">
                    <div>
                        {{-- Foto Produk --}}
                        <div class="relative aspect-[4/3] overflow-hidden bg-gray-50">
                            @if($umkm->gambar)
                                <img src="{{ asset('storage/' . $umkm->gambar) }}" alt="{{ $umkm->nama }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400 text-sm">Tanpa Foto</div>
                            @endif
                        </div>
                        
                        <div class="p-6">
                            <h3 class="font-['Outfit'] text-xl font-semibold mt-1 mb-2 text-[#1A3A2A]">{{ $umkm->nama }}</h3>
                            <p class="text-sm text-[#6E6E73] mb-4">
                                {{ $umkm->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <div class="p-6 pt-0 mt-auto">
                        <a href="https://wa.me/62855884000?text=Halo%20Admin,%20saya%20tertarik%20untuk%20memesan%20{{ urlencode($umkm->nama) }}." target="_blank"
                           class="w-full inline-flex items-center justify-center h-10 px-4 text-xs font-bold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Pesan via WhatsApp &rarr;
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full bg-white rounded-2xl p-10 text-center border border-[#E8E5DE]">
                    <p class="text-gray-500">Katalog UMKM sedang kosong. Silakan tambahkan data melalui Admin.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
</x-layouts.app>