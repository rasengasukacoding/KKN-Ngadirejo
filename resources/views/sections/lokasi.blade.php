{{-- Lokasi Section --}}
<section class="py-20 lg:py-28 px-6" id="lokasi">
    <div class="max-w-[1262px] mx-auto">

        <x-section-header
            eyebrow="Lokasi"
            title="Temukan<br>Desa Ngadirejo"
            description="Desa Ngadirejo berada di Kecamatan Mojogedang, Kabupaten Karanganyar, Jawa Tengah. Akses mudah dari perkotaan Karanganyar maupun Solo."
        />

        {{-- Map & Info --}}
        <div class="reveal border border-[#E8E5DE] overflow-hidden rounded-2xl shadow-sm">
            {{-- Google Maps Embed --}}
            <iframe
                src="https://maps.google.com/maps?q=Ngadirejo,Mojogedang,Karanganyar,Jawa+Tengah&t=&z=14&ie=UTF8&iwloc=&output=embed"
                class="w-full h-[450px] border-0 block"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Lokasi Desa Ngadirejo Mojogedang Karanganyar"
            ></iframe>

            {{-- Info Bar --}}
            <div class="grid grid-cols-1 lg:grid-cols-3 border-t border-[#E8E5DE] bg-white">

                {{-- Alamat --}}
                <div class="flex items-start gap-4 p-7 lg:p-8 border-b lg:border-b-0 lg:border-r border-[#E8E5DE]">
                    <div class="shrink-0 w-11 h-11 bg-[#E8F0EF] rounded-xl flex items-center justify-center text-[#2D5F5D]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-[#6E6E73] mb-1">Alamat</div>
                        <div class="text-[15px] font-medium text-[#1D1D1F]">Desa Ngadirejo, Kecamatan Mojogedang, Kab. Karanganyar, Jawa Tengah</div>
                    </div>
                </div>

                {{-- Kode Pos --}}
                <div class="flex items-start gap-4 p-7 lg:p-8 border-b lg:border-b-0 lg:border-r border-[#E8E5DE]">
                    <div class="shrink-0 w-11 h-11 bg-[#E8F0EF] rounded-xl flex items-center justify-center text-[#2D5F5D]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-[#6E6E73] mb-1">Kode Pos</div>
                        <div class="text-[15px] font-medium text-[#1D1D1F]">57752</div>
                    </div>
                </div>

                {{-- Kontak --}}
                <div class="flex items-start gap-4 p-7 lg:p-8">
                    <div class="shrink-0 w-11 h-11 bg-[#E8F0EF] rounded-xl flex items-center justify-center text-[#2D5F5D]">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    </div>
                    <div>
                        <div class="text-xs font-semibold uppercase tracking-wide text-[#6E6E73] mb-1">Kontak Desa</div>
                        <div class="text-[15px] font-medium text-[#1D1D1F]">Pemerintah Desa Ngadirejo</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>