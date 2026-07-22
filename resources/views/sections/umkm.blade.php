{{-- UMKM & Produk Unggulan Section --}}
<section class="py-20 lg:py-28 px-6" id="umkm">
    <div class="max-w-[1262px] mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 border border-[#E8E5DE]">

            {{-- Image --}}
            <img src="{{ asset('images/umkm-products.png') }}" alt="Produk UMKM Desa Ngadirejo"
                 class="w-full h-full object-cover reveal">

            {{-- Content --}}
            <div class="flex flex-col justify-center p-8 md:p-12 lg:px-[72px] lg:py-16 reveal reveal-delay-2">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4">
                    UMKM & Produk Unggulan
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-5">
                    Produk & Karya <br>Asli Ngadirejo
                </h2>
                <p class="text-[17px] leading-relaxed text-[#6E6E73] mb-8">
                    Desa Ngadirejo memiliki beragam produk UMKM berkualitas yang mencerminkan
                    kearifan lokal dan pemasukan masyarakat desa.
                </p>

                {{-- Feature List --}}
                <ul class="list-none p-0 m-0 mb-8 space-y-2.5">
                    @foreach(['Kerajinan kayu & anyaman bambu khas Mojogedang', 'Olahan tradisional pangan lokal', 'Camilan lokal keripik tradisional', 'Seni ukir kayu & dekorasi'] as $item)
                    <li class="flex items-start gap-3 text-[15px] text-[#333336]">
                        <span class="shrink-0 w-[22px] h-[22px] bg-[#E8F0EF] rounded-full flex items-center justify-center mt-0.5">
                            <svg class="w-3 h-3 text-[#2D5F5D]" viewBox="0 0 16 16" fill="none"><path d="M13.5 4.5L6.5 11.5L2.5 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </span>
                        {{ $item }}
                    </li>
                    @endforeach
                </ul>

                <div>
                    <a href="/umkm" class="inline-flex items-center justify-center h-10 px-5 text-sm font-medium rounded-full bg-transparent text-[#2D5F5D] border-[1.5px] border-[#2D5F5D] no-underline transition-all duration-200 hover:bg-[#2D5F5D] hover:text-white hover:-translate-y-0.5 hover:shadow-[0_4px_16px_rgba(45,95,93,0.2)]">
                        Lihat Semua Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>