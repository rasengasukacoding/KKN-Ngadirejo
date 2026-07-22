@props([
    'icon' => '📚',
    'title' => '',
    'description' => '',
    'date' => '',
    'delay' => '0'
])

<div class="h-full flex flex-col bg-white/[0.08] border border-white/[0.12] p-8 rounded-2xl transition-all duration-300 hover:bg-white/[0.12]">

    <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-[#E8A84C] to-[#B87333] flex items-center justify-center text-2xl mb-5">
        {!! $icon !!}
    </div>

    <h3 class="text-xl font-semibold text-white mb-3">
        {{ $title }}
    </h3>

    <p class="text-white/70 leading-relaxed flex-1">
        {{ $description }}
    </p>

    @if($date)
        <div class="mt-6 text-sm text-[#E8A84C]">
            {{ $date }}
        </div>
    @endif

</div>