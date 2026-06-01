{{-- Value Card Component --}}
@props(['icon', 'title', 'description', 'delay' => '1'])

<div class="text-center p-8 lg:p-5 reveal reveal-delay-{{ $delay }}">
    {{-- Icon --}}
    <div class="w-16 h-16 mx-auto mb-5 bg-gradient-to-br from-[#E8F0EF] to-[#2D5F5D]/15 rounded-2xl flex items-center justify-center text-[28px] transition-transform duration-300 hover:scale-110 hover:-rotate-[5deg]">
        {{ $icon }}
    </div>

    {{-- Content --}}
    <h3 class="font-['Outfit'] text-lg font-semibold mb-2 text-[#1D1D1F]">{{ $title }}</h3>
    <p class="text-sm text-[#6E6E73] leading-relaxed">{{ $description }}</p>
</div>
