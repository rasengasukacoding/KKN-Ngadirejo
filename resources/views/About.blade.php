<x-layouts.app title="Tentang KKN 64 UNS — Pemberdayaan Desa Melikan" description="Mengenal tim KKN 64 Universitas Sebelas Maret (UNS) Surakarta dan dedikasi program kerja pengabdian masyarakat di Kalurahan Melikan, Rongkop, Gunungkidul.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Kelompok KKN 64 UNS Surakarta</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Tentang Kami</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Mengabdi dengan hati dan berkolaborasi dalam pemberdayaan masyarakat serta pelestarian ekologi di Kalurahan Melikan, Rongkop, Gunungkidul.
            </p>
        </div>
    </div>

    {{-- Core Values Section --}}
    <section class="py-20 px-6 bg-[#FBF8F3]">
        <div class="max-w-[1262px] mx-auto">
            <div class="text-center mb-16 reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Nilai Nilai Pengabdian</span>
                <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold text-[#1A3A2A]">Empat Pilar Utama Kolaborasi</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <x-value-card
                    title="Gotong Royong"
                    description="Bekerja bahu-membahu bersama seluruh pamong kalurahan dan warga Melikan untuk menyukseskan program kerja berdampak."
                    delay="1"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Keberlanjutan"
                    description="Membangun sistem dan materi program kerja Melikan Belajar yang dapat digunakan ulang secara mandiri oleh warga."
                    delay="2"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.283 6H18"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Pendidikan"
                    description="Meningkatkan motivasi dan kualitas belajar anak-anak padukuhan melalui pendekatan kreatif dan interaktif."
                    delay="3"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Inovasi Kreatif"
                    description="Mendorong ketahanan ekonomi melalui digitalisasi produk anyaman bambu dan kuliner lokal khas Gunungkidul."
                    delay="4"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </x-slot>
                </x-value-card>
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="text-center mb-16 reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Struktur Kelompok</span>
                <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold text-[#1A3A2A]">Tim KKN 64 UNS 2026</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Team 1 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">AR</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Atha Ratnaduhita</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Ketua Kelompok</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Peternakan</p>
                    </div>
                </div>

                {{-- Team 2 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-1">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">APH</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Alissya Pratiwi Haryadi</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Sekretaris</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Peternakan</p>
                    </div>
                </div>

                {{-- Team 3 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-2">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">CPD</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Chika Putri Devtya</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Sekretaris</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Ekonomi dan Bisnis</p>
                    </div>
                </div>

                {{-- Team 4 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">MWH</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Maya Widhia Hastuti</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Bendahara</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Pertanian</p>
                    </div>
                </div>

                {{-- Team 5 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-1">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">DA</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Dhara Asia</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Hubungan Masyarakat</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Ekonomi dan Bisnis</p>
                    </div>
                </div>

                {{-- Team 6 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-2">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">LF</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Lucky Firmansyah</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Hubungan Masyarakat</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Ekonomi dan Bisnis</p>
                    </div>
                </div>

                {{-- Team 7 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">RR</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Rayhan Rosyad</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Publikasi, Dekorasi, dan Dokumentasi</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Keguruan dan Ilmu Pendidikan</p>
                    </div>
                </div>

                {{-- Team 8 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-1">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">KM</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Khansa Maulidina</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Publikasi, Dekorasi, dan Dokumentasi</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Pertanian</p>
                    </div>
                </div>

                {{-- Team 9 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal reveal-delay-2">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">RSF</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Robby Septian Fajar</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Logistik</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Teknologi Informasi dan Sains Data</p>
                    </div>
                </div>

                {{-- Team 10 --}}
                <div class="bg-white border border-[#E8E5DE] p-6 rounded-2xl flex items-center gap-4 hover:shadow-sm transition-all duration-300 reveal">
                    <div class="w-14 h-14 bg-[#E8F0EF] rounded-full flex items-center justify-center text-[#2D5F5D] text-lg font-bold shrink-0">MAA</div>
                    <div>
                        <h4 class="font-['Outfit'] text-[17px] font-semibold text-[#1A3A2A]">Muhammad Abdul Aziz Al Amiri</h4>
                        <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider">Logistik</p>
                        <p class="text-xs text-[#6E6E73] mt-1">Fakultas Keguruan dan Ilmu Pendidikan</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
