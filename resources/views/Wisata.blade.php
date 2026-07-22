<x-layouts.app title="Destinasi Wisata — Desa Ngadirejo, Mojogedang" description="Temukan keindahan alam, hamparan persawahan, dan kearifan lokal di Desa Ngadirejo, Kecamatan Mojogedang, Kabupaten Karanganyar.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Eksplorasi Alam Karanganyar</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Destinasi Wisata Ngadirejo</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Jelajahi potensi wisata pedesaan yang asri, dari hamparan persawahan yang sejuk hingga rute eksplorasi agrowisata lokal.
            </p>
        </div>
    </div>

    {{-- Wisata List Grid with Details --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                @forelse($wisatas as $wisata)
                <div class="bg-white border border-[#E8E5DE] rounded-2xl overflow-hidden shadow-sm flex flex-col justify-between reveal transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="relative overflow-hidden aspect-[16/10]">
                            {{-- Foto Wisata --}}
                            @if($wisata->gambar)
                                <img src="{{ asset('storage/' . $wisata->gambar) }}" alt="{{ $wisata->nama }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400">Belum ada foto</div>
                            @endif
                        </div>
                        <div class="p-8">
                            <h3 class="font-['Outfit'] text-2xl font-semibold mb-3 text-[#1A3A2A]">{{ $wisata->nama }}</h3>
                            <p class="text-[15px] leading-relaxed text-[#6E6E73] mb-6">
                                {{ $wisata->deskripsi }}
                            </p>
                        </div>
                    </div>
                    <div class="p-8 pt-0 mt-auto">
                        <a href="https://maps.google.com/?q={{ urlencode($wisata->nama . ' Ngadirejo') }}" target="_blank" class="w-full inline-flex items-center justify-center h-10 px-5 text-sm font-semibold rounded-lg bg-[#2D5F5D] text-white hover:bg-[#1A3A2A] transition-colors duration-200">
                            Petunjuk Arah &rarr;
                        </a>
                    </div>
                </div>
                @empty
                <div class="col-span-full bg-white rounded-2xl p-10 text-center border border-[#E8E5DE]">
                    <p class="text-gray-500">Belum ada destinasi wisata yang ditambahkan.</p>
                </div>
                @endforelse
            </div>

            </div>
        </div>
    </section>
</x-layouts.app>