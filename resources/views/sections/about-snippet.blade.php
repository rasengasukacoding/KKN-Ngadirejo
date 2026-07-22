{{-- About Section Snippet (Clean & Professional) --}}
<section class="py-20 lg:py-24 px-6 bg-[#FBF8F3]" id="about">
    <div class="max-w-[1262px] mx-auto">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">
                    Tentang Kami
                </span>
                <h2 class="font-['Outfit'] text-3xl md:text-[40px] font-semibold leading-tight tracking-tight">
                    Mengapa Desa Ngadirejo?
                </h2>
            </div>
            <div>
                {{-- Link ini sudah diperbarui agar lebih profesional --}}
                <a href="/about" class="inline-flex items-center gap-2 text-sm font-semibold text-[#2D5F5D] hover:underline transition-all duration-200">
                    Profil Lengkap Desa
                    <svg class="w-4 h-4" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12l5-5-5-5"/></svg>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <x-value-card
                title="Gotong Royong"
                description="Semangat kebersamaan dan saling membantu yang menjadi fondasi utama kehidupan bermasyarakat di Desa Ngadirejo."
                delay="1"
            >
                <x-slot name="icon">
                    <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </x-slot>
            </x-value-card>

            <x-value-card
                title="Alam Lestari"
                description="Komitmen menjaga keseimbangan alam dan lingkungan demi generasi masa depan melalui pertanian berkelanjutan."
                delay="2"
            >
                <x-slot name="icon">
                    <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 4v5h.582m15.356 2A8.001 8.001 0 1121.283 6H18"></path></svg>
                </x-slot>
            </x-value-card>

            <x-value-card
                title="Budaya Kuat"
                description="Kekayaan budaya Jawa yang masih terjaga, dari upacara adat, kesenian tradisional, hingga kuliner khas daerah."
                delay="3"
            >
                <x-slot name="icon">
                    <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </x-slot>
            </x-value-card>

            <x-value-card
                title="Inovasi Desa"
                description="Terbuka terhadap inovasi dan teknologi baru untuk memajukan perekonomian dan kualitas hidup masyarakat desa."
                delay="4"
            >
                <x-slot name="icon">
                    <svg class="w-7 h-7 text-[#2D5F5D]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </x-slot>
            </x-value-card>
        </div>
    </div>
</section>