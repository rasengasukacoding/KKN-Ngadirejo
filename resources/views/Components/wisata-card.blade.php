{{-- Wisata Card Component --}}
@props(['image', 'tag', 'title', 'description', 'delay' => '1'])

<div class="bg-white border border-[#E8E5DE] overflow-hidden transition-all duration-300 ease-out hover:-translate-y-1.5 hover:shadow-[0_20px_40px_rgba(0,0,0,0.08)] hover:border-transparent group reveal reveal-delay-{{ $delay }}">
    {{-- Image --}}
    <div class="overflow-hidden relative">
        <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.04]">
        <div class="absolute bottom-0 left-0 right-0 h-[60px] bg-gradient-to-t from-black/[0.03] to-transparent pointer-events-none"></div>
    </div>

    {{-- Body --}}
    <div class="px-7 py-7 pb-8">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 text-[11px] font-semibold tracking-wide uppercase rounded-full bg-[#E8F0EF] text-[#2D5F5D] mb-3">
            {{ $tag }}
        </span>
        <h3 class="font-['Outfit'] text-xl font-semibold leading-snug mb-2 text-[#1D1D1F]">{{ $title }}</h3>
        <p class="text-[15px] leading-relaxed text-[#6E6E73] mb-4">{{ $description }}</p>
        <a href="#" class="inline-flex items-center gap-1.5 text-sm font-semibold text-[#2D5F5D] no-underline transition-all duration-200 hover:gap-2.5 hover:text-[#1A4B5C]">
            Selengkapnya
            <svg class="w-3.5 h-3.5 transition-transform duration-200" viewBox="0 0 16 16" fill="none"><path d="M6 12L10 8L6 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
    </div>
</div>
