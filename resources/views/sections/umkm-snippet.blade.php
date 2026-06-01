{{-- UMKM & Produk Unggulan Section Snippet --}}
<section class="py-20 lg:py-24 px-6" id="umkm">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 border border-[#E8E5DE]">

            {{-- Image --}}
            <img src="{{ asset('images/umkm-products.png') }}" alt="Produk UMKM Desa Melikan"
                 class="w-full h-full object-cover reveal">

            {{-- Content --}}
            <div class="flex flex-col justify-center p-8 md:p-12 lg:px-[72px] lg:py-16 reveal reveal-delay-2">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4">
                    UMKM & Produk Unggulan
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-5">
                    Karya & Produk Asli Melikan
                </h2>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-8">
                    Desa Melikan memiliki berbagai produk UMKM berkualitas tinggi yang dikembangkan secara
                    lokal oleh warga desa. Mulai dari kerajinan batik khas hingga olahan herbal tradisional.
                </p>

                <div>
                    <a href="/umkm" class="inline-flex items-center justify-center h-10 px-6 text-sm font-semibold rounded-full bg-gradient-to-br from-[#2D5F5D] to-[#1A4B5C] text-white no-underline transition-all duration-200 shadow-[0_2px_8px_rgba(26,75,92,0.2)] hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(26,75,92,0.3)]">
                        Jelajahi Produk UMKM
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
