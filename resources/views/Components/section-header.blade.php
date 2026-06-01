{{-- Section Header Component --}}
@props(['eyebrow' => '', 'title' => '', 'description' => '', 'dark' => false])

<div class="text-center max-w-2xl mx-auto mb-16 lg:mb-20 reveal">
    @if($eyebrow)
        <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase mb-3 {{ $dark ? 'text-[#E8A84C]' : 'text-[#E8A84C]' }}">
            {{ $eyebrow }}
        </span>
    @endif

    @if($title)
        <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight mb-4 {{ $dark ? 'text-white' : 'text-[#1D1D1F]' }}">
            {!! $title !!}
        </h2>
    @endif

    @if($description)
        <p class="text-[17px] leading-relaxed {{ $dark ? 'text-white/65' : 'text-[#6E6E73]' }}">
            {{ $description }}
        </p>
    @endif
</div>
