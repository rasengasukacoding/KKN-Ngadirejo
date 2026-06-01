{{-- Proker Card Component --}}
@props(['icon', 'title', 'description', 'date', 'delay' => '1'])

<div class="h-full flex flex-col bg-white/[0.08] border border-white/[0.12] p-8 transition-all duration-300 hover:bg-white/[0.12] hover:border-white/20 hover:-translate-y-1 reveal reveal-delay-{{ $delay }}">
    {{-- Icon --}}
    <div class="w-[52px] h-[52px] bg-gradient-to-br from-[#E8A84C] to-[#B87333] rounded-xl flex items-center justify-center mb-5 text-2xl shrink-0">
        {{ $icon }}
    </div>

    {{-- Content --}}
    <h3 class="font-['Outfit'] text-xl font-semibold mb-2.5 text-white">{{ $title }}</h3>
    <p class="text-[15px] leading-relaxed text-white/65 mb-6 flex-1">{{ $description }}</p>
    <span class="inline-flex items-center gap-1.5 text-xs text-[#E8A84C] font-medium mt-auto shrink-0">
        <svg class="w-3.5 h-3.5 text-[#E8A84C]" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
        {{ $date }}
    </span>
</div>
