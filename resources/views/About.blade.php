<x-layouts.app title="Tentang KKN 64 UNS — Pemberdayaan Desa Ngadirejo" description="Mengenal tim KKN 64 Universitas Sebelas Maret (UNS) Surakarta dan dedikasi program kerja pengabdian masyarakat di Desa Ngadirejo, Mojogedang, Karanganyar.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Kelompok KKN 294 UNS Surakarta</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Tentang Kami</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Mengabdi dengan hati dan berkolaborasi dalam pemberdayaan masyarakat serta pelestarian lingkungan di Desa Ngadirejo, Mojogedang, Karanganyar.
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
                    description="Bekerja bahu-membahu bersama seluruh perangkat desa dan warga Ngadirejo untuk menyukseskan program kerja berdampak."
                    delay="1"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Keberlanjutan"
                    description="Membangun sistem dan materi program kerja Ngadirejo Belajar yang dapat digunakan ulang secara mandiri oleh warga."
                    delay="2"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.283 6H18"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Pendidikan"
                    description="Meningkatkan motivasi dan kualitas belajar anak-anak dusun melalui pendekatan kreatif dan interaktif."
                    delay="3"
                >
                    <x-slot name="icon">
                        <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.168.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Inovasi Kreatif"
                    description="Mendorong ketahanan ekonomi melalui inovasi produk pertanian, kerajinan, dan kuliner lokal khas Karanganyar."
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


</x-layouts.app>