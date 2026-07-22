{{-- Footer Component --}}
<footer class="bg-[#173A2A] text-white">

    <div class="max-w-7xl mx-auto px-6 py-14">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 border-b border-white/10 pb-12">

            {{-- Logo & Deskripsi --}}
            <div>

                <a href="/" class="flex items-center gap-4 mb-5">

                    <img
                        src="{{ asset('storage/logo/logo-karanganyar.png') }}"
                        alt="Logo Karanganyar"
                        class="w-14 h-14 object-contain">

                    <div>

                        <h3 class="font-['Outfit'] text-2xl font-bold leading-none">
                            Desa Ngadirejo
                        </h3>

                        <p class="text-sm text-white/60 mt-1">
                            Kecamatan Mojogedang
                        </p>

                        <p class="text-sm text-white/60">
                            Kabupaten Karanganyar
                        </p>

                    </div>

                </a>

                <p class="text-sm leading-7 text-white/70">

                    Website resmi Pemerintah Desa Ngadirejo sebagai media
                    informasi pelayanan publik, potensi desa, wisata,
                    UMKM, serta berbagai kegiatan masyarakat.

                </p>

            </div>

            {{-- Navigasi --}}
            <div>

                <h4 class="text-sm uppercase tracking-widest text-[#E8A84C] font-semibold mb-5">
                    Navigasi
                </h4>

                <ul class="space-y-3 text-sm">

                    <li><a href="/" class="hover:text-[#E8A84C] duration-200">Beranda</a></li>

                    <li><a href="/profil" class="hover:text-[#E8A84C] duration-200">Profil Desa</a></li>

                    <li><a href="/perangkat-desa" class="hover:text-[#E8A84C] duration-200">Perangkat Desa</a></li>

                    <li><a href="/lembaga-desa" class="hover:text-[#E8A84C] duration-200">Lembaga Desa</a></li>

                </ul>

            </div>

            {{-- Informasi --}}
            <div>

                <h4 class="text-sm uppercase tracking-widest text-[#E8A84C] font-semibold mb-5">
                    Informasi
                </h4>

                <ul class="space-y-3 text-sm">

                    <li><a href="/wisata" class="hover:text-[#E8A84C] duration-200">Wisata</a></li>

                    <li><a href="/umkm" class="hover:text-[#E8A84C] duration-200">UMKM</a></li>

                    <li><a href="/ngadirejo-membaca" class="hover:text-[#E8A84C] duration-200">Ngadirejo Membaca</a></li>

                    <li><a href="/lokasi" class="hover:text-[#E8A84C] duration-200">Lokasi</a></li>

                </ul>

            </div>

            {{-- Kontak --}}
            <div>

                <h4 class="text-sm uppercase tracking-widest text-[#E8A84C] font-semibold mb-5">
                    Kontak
                </h4>

                <div class="space-y-4 text-sm text-white/70">

                    <p>
                        📍 Desa Ngadirejo<br>
                        Kecamatan Mojogedang<br>
                        Kabupaten Karanganyar
                    </p>

                    <p>
                        ✉ desa.ngadirejo@example.com
                    </p>

                    <p>
                        ☎ (0271) xxxx xxx
                    </p>

                </div>

            </div>

        </div>

        {{-- Bottom --}}
        <div class="pt-8 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-sm text-white/50">
                © {{ date('Y') }} Pemerintah Desa Ngadirejo. Seluruh Hak Cipta Dilindungi.
            </p>

            <p class="text-sm text-white/50">
                Website Desa Ngadirejo - Mojogedang - Karanganyar
            </p>

        </div>

    </div>

</footer>