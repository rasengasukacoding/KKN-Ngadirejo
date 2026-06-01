{{-- Hero Section --}}
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#1A3A2A]" id="beranda">

    {{-- Background Image --}}
    <div class="absolute inset-0 z-[1]">
        <img src="{{ asset('images/hero-village.png') }}" alt="Desa Melikan"
             id="hero-img"
             class="w-full h-full object-cover opacity-70 scale-105 transition-[transform] duration-[8s] ease-out">
        {{-- Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-b from-[#1A3A2A]/40 via-[#1A3A2A]/20 via-40% to-[#1A3A2A]/85 z-[2]"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-[3] text-center text-white max-w-[800px] px-6 pt-[120px] pb-20">

        {{-- Eyebrow --}}
        <span class="hero-animate-1 inline-flex items-center gap-2 text-[13px] font-semibold tracking-[0.08em] uppercase text-[#E8A84C] mb-5">
            <span class="w-6 h-px bg-[#E8A84C]/50"></span>
            Selamat Datang di
            <span class="w-6 h-px bg-[#E8A84C]/50"></span>
        </span>

        {{-- Title --}}
        <h1 class="hero-animate-2 font-['Outfit'] text-[40px] md:text-[56px] lg:text-[64px] font-bold leading-[1.05] mb-5 tracking-[-0.03em]">
            Desa Melikan
        </h1>

        {{-- Subtitle --}}
        <p class="hero-animate-3 text-base md:text-[19px] font-normal leading-relaxed text-white/85 max-w-[560px] mx-auto mb-9">
            Temukan pesona alam, kearifan lokal, dan semangat masyarakat Desa Melikan
            yang harmonis dalam setiap langkah menuju kemajuan bersama.
        </p>

        {{-- CTA Buttons --}}
        <div class="hero-animate-4 flex gap-4 justify-center flex-wrap">
            <a href="#profil" class="inline-flex items-center justify-center gap-2 h-12 px-7 text-[15px] font-medium rounded-full bg-gradient-to-br from-[#E8A84C] to-[#B87333] text-white no-underline shadow-[0_2px_12px_rgba(232,168,76,0.3)] transition-all duration-200 hover:-translate-y-0.5 hover:shadow-[0_6px_24px_rgba(232,168,76,0.4)] active:translate-y-0">
                Kenali Lebih Dekat
            </a>
            <a href="#wisata" class="inline-flex items-center justify-center gap-2 h-12 px-7 text-[15px] font-medium rounded-full bg-white/15 text-white border-[1.5px] border-white/30 no-underline backdrop-blur-[10px] transition-all duration-200 hover:bg-white/25 hover:border-white/50 hover:-translate-y-0.5">
                Jelajahi Wisata
            </a>
        </div>
    </div>

    {{-- Scroll Indicator --}}
    <div class="hero-animate-5 absolute bottom-10 left-1/2 -translate-x-1/2 z-[3] flex flex-col items-center gap-2 text-white/60 text-[11px] tracking-[0.08em] uppercase">
        <span>Scroll</span>
        <div class="scroll-line-pulse w-px h-8 bg-gradient-to-b from-white/50 to-transparent"></div>
    </div>
</section>
