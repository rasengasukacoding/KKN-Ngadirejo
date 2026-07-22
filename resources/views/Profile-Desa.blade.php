<x-layouts.app title="Profil Desa Ngadirejo — Kecamatan Mojogedang, Karanganyar" description="Selami sejarah, visi-misi, kependudukan, dan jajaran perangkat Pemerintah Desa Ngadirejo, Kecamatan Mojogedang, Kabupaten Karanganyar, Jawa Tengah.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Mengenal Lebih Dekat</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Profil Desa Ngadirejo</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Menyusuri potensi, visi, misi, dan struktur kemasyarakatan Desa Ngadirejo di kawasan asri Mojogedang, Karanganyar.
            </p>
        </div>
    </div>

    {{-- Sejarah & Deskripsi --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Image (Otomatis menyesuaikan dengan logo yang diupload) --}}
                <div class="relative reveal">
                    @if(optional($profile)->logo)
                        <img src="{{ asset('storage/' . $profile->logo) }}" alt="Logo/Gambar Profil Desa Ngadirejo"
                             class="w-full aspect-[4/3] object-contain bg-white rounded-2xl shadow-xl transition-all duration-300 hover:scale-[1.02] p-4 border border-[#E8E5DE]">
                    @else
                        <!-- Gambar default jika admin belum upload logo -->
                        <img src="{{ asset('storage/logo/logo-karanganyar.png') }}" alt="Pemandangan Lahan Pertanian Desa Ngadirejo"
                             class="w-full aspect-[4/3] object-cover rounded-2xl shadow-xl transition-all duration-300 hover:scale-[1.02]">
                    @endif
                    <div class="absolute -bottom-4 -right-4 w-[120px] h-[120px] bg-gradient-to-br from-[#E8A84C] to-[#B87333] -z-10 rounded-2xl shadow-lg"></div>
                </div>

                {{-- Text Content (Otomatis mengambil Sejarah dari database) --}}
                <div class="reveal reveal-delay-2">
                    <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Geografis & Sejarah</span>
                    <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold leading-tight mb-6 text-[#1A3A2A]">Mengenal Desa Ngadirejo</h2>
                    
                    <div class="text-[16px] leading-relaxed text-[#6E6E73]">
                        @if(optional($profile)->sejarah)
                            {!! nl2br(e($profile->sejarah)) !!}
                        @else
                            <p>Sejarah atau profil desa belum ditambahkan oleh Admin. Silakan perbarui data di panel kelola.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="py-20 px-6 bg-[#FBF8F3]">
        <div class="max-w-[1262px] mx-auto">
            <div class="text-center mb-16 reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Arah Pembangunan</span>
                <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold text-[#1A3A2A]">Visi & Misi Desa</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Visi (Otomatis dari Database) --}}
                <div class="bg-white p-8 border border-[#E8E5DE] rounded-2xl shadow-sm reveal transition-all duration-300 hover:shadow-md">
                    <h3 class="font-['Outfit'] text-2xl font-semibold mb-4 text-[#1A3A2A]">Visi</h3>
                    <p class="text-[16px] leading-relaxed text-[#6E6E73] fst-italic">
                        @if(optional($profile)->visi)
                            "{!! nl2br(e($profile->visi)) !!}"
                        @else
                            "Visi desa belum ditambahkan."
                        @endif
                    </p>
                </div>

                {{-- Misi (Otomatis dari Database) --}}
                <div class="bg-white p-8 border border-[#E8E5DE] rounded-2xl shadow-sm reveal reveal-delay-2 transition-all duration-300 hover:shadow-md">
                    <h3 class="font-['Outfit'] text-2xl font-semibold mb-4 text-[#1A3A2A]">Misi</h3>
                    <div class="text-[15px] leading-relaxed text-[#6E6E73] space-y-2">
                        @if(optional($profile)->misi)
                            {!! nl2br(e($profile->misi)) !!}
                        @else
                            <p>Misi desa belum ditambahkan.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistik Kependudukan --}}
    {{-- Statistik Kependudukan --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto text-center">
            <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3 reveal">Data Demografi</span>
            <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold mb-12 text-[#1A3A2A] reveal reveal-delay-1">Statistik Desa Ngadirejo</h2>
            
            {{-- Kotak Angka Demografi --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal reveal-delay-2">
                
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E8E5DE] hover:shadow-md transition-shadow">
                    <h3 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#2D5F5D] mb-2">{{ optional($profile)->jumlah_penduduk ?? 0 }}</h3>
                    <p class="text-sm font-semibold text-[#6E6E73] uppercase tracking-widest">Total Penduduk</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E8E5DE] hover:shadow-md transition-shadow">
                    <h3 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#2D5F5D] mb-2">{{ optional($profile)->jumlah_kk ?? 0 }}</h3>
                    <p class="text-sm font-semibold text-[#6E6E73] uppercase tracking-widest">Kepala Keluarga</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E8E5DE] hover:shadow-md transition-shadow">
                    <h3 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#2D5F5D] mb-2">{{ optional($profile)->jumlah_laki ?? 0 }}</h3>
                    <p class="text-sm font-semibold text-[#6E6E73] uppercase tracking-widest">Laki-Laki</p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border border-[#E8E5DE] hover:shadow-md transition-shadow">
                    <h3 class="font-['Outfit'] text-4xl md:text-5xl font-bold text-[#2D5F5D] mb-2">{{ optional($profile)->jumlah_perempuan ?? 0 }}</h3>
                    <p class="text-sm font-semibold text-[#6E6E73] uppercase tracking-widest">Perempuan</p>
                </div>

            </div>
        </div>
    </section>
    
</x-layouts.app>