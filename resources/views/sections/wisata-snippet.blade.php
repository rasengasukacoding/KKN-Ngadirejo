{{-- Wisata Section Snippet (Auto-Scrolling Marquee) --}}
<section class="py-20 lg:py-24 px-6 bg-[#FBF8F3] overflow-hidden" id="wisata">
    <div class="max-w-[1262px] mx-auto mb-12">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
            <div>
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Destinasi Wisata
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight">
                    Pesona Alam Sekitar Melikan
                </h2>
            </div>
            <div>
                <a href="/wisata" class="inline-flex items-center gap-2 text-sm font-semibold text-[#2D5F5D] hover:underline transition-all duration-200">
                    Lihat Semua Destinasi
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5-5-5-5"/></svg>
                </a>
            </div>
        </div>
    </div>

    {{-- Continuous Horizontal Scroll Marquee --}}
    <div class="relative w-full overflow-hidden py-4 select-none">
        {{-- Gradient Shadows to fade edges --}}
        <div class="absolute top-0 bottom-0 left-0 w-16 md:w-32 bg-gradient-to-r from-[#FBF8F3] to-transparent z-10 pointer-events-none"></div>
        <div class="absolute top-0 bottom-0 right-0 w-16 md:w-32 bg-gradient-to-l from-[#FBF8F3] to-transparent z-10 pointer-events-none"></div>

        <div class="marquee-container">
            <div class="marquee-track">
                {{-- Set 1 --}}
                <div class="marquee-group">
                    <x-wisata-card
                        image="images/wisata-nature.png"
                        tag="Alam"
                        title="Pesona Sungai & Persawahan"
                        description="Jelajahi keindahan sungai jernih yang mengalir di antara hamparan sawah hijau dengan suasana pedesaan yang asri dan menenangkan."
                        delay="1"
                    />
                    <x-wisata-card
                        image="images/wisata-waterfall.png"
                        tag="Air Terjun"
                        title="Air Terjun Tersembunyi"
                        description="Temukan keajaiban air terjun tersembunyi di hutan tropis sekitar desa dengan air jernih and pemandangan yang memukau."
                        delay="2"
                    />
                    <x-wisata-card
                        image="images/hero-village.png"
                        tag="Desa Wisata"
                        title="Wisata Edukasi Desa"
                        description="Rasakan pengalaman hidup di desa, belajar bertani, dan nikmati kuliner tradisional bersama warga Melikan yang ramah."
                        delay="3"
                    />
                </div>

                {{-- Duplicated Set 2 for Infinite Loop --}}
                <div class="marquee-group" aria-hidden="true">
                    <x-wisata-card
                        image="images/wisata-nature.png"
                        tag="Alam"
                        title="Pesona Sungai & Persawahan"
                        description="Jelajahi keindahan sungai jernih yang mengalir di antara hamparan sawah hijau dengan suasana pedesaan yang asri dan menenangkan."
                        delay="1"
                    />
                    <x-wisata-card
                        image="images/wisata-waterfall.png"
                        tag="Air Terjun"
                        title="Air Terjun Tersembunyi"
                        description="Temukan keajaiban air terjun tersembunyi di hutan tropis sekitar desa dengan air jernih and pemandangan yang memukau."
                        delay="2"
                    />
                    <x-wisata-card
                        image="images/hero-village.png"
                        tag="Desa Wisata"
                        title="Wisata Edukasi Desa"
                        description="Rasakan pengalaman hidup di desa, belajar bertani, dan nikmati kuliner tradisional bersama warga Melikan yang ramah."
                        delay="3"
                    />
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Marquee Styles --}}
<style>
    .marquee-container {
        display: flex;
        width: 100%;
        overflow: hidden;
    }
    .marquee-track {
        display: flex;
        width: max-content;
        animation: marquee-scroll 35s linear infinite;
    }
    .marquee-track:hover {
        animation-play-state: paused;
    }
    .marquee-group {
        display: flex;
        gap: 28px;
        padding-right: 28px;
        flex-shrink: 0;
    }
    /* Set explicit widths for cards within marquee to prevent shrinking */
    .marquee-group > div {
        width: 320px;
        flex-shrink: 0;
    }
    @media (min-width: 768px) {
        .marquee-group > div {
            width: 380px;
        }
    }

    @keyframes marquee-scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
</style>
