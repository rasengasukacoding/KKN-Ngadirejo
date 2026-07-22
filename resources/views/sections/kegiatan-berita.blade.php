{{-- Ngadirejo Membaca Section --}}
<section class="py-20 lg:py-28 px-6 bg-[#1A3A2A]" id="kegiatan-berita">
    <div class="max-w-[1262px] mx-auto">

        <x-section-header
            eyebrow="Ngadirejo Membaca"
            title="Dokumentasi<br>Program Kerja"
            description="Kumpulan program kerja yang telah dilaksanakan oleh Tim KKN Literasi 294 UNS 2026 di Desa Ngadirejo. Dokumentasi ini disusun agar masyarakat dapat melihat dan memanfaatkan kembali materi kegiatan yang sudah berjalan."
            :dark="true"
        />

        {{-- Banner Image --}}
        <div class="reveal mb-12 overflow-hidden">
            <img src="{{ asset('images/melikan-belajar.png') }}" alt="Kegiatan Ngadirejo Membaca"
                 class="w-full aspect-[21/9] object-cover opacity-85">
        </div>

        {{-- Proker Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <x-proker-card
                icon="📚"
                title="Bimbingan Belajar Anak"
                description="Program pendampingan belajar untuk anak-anak SD dan SMP di Desa Ngadirejo dengan materi pelajaran sekolah dan kegiatan edukatif kreatif."
                date="Mei — Juni 2026"
                delay="1"
            />

            <x-proker-card
                icon="💻"
                title="Pelatihan Digital Marketing"
                description="Workshop pemasaran digital untuk pelaku UMKM desa agar produk lokal bisa dikenal lebih luas melalui platform media sosial dan marketplace."
                date="Mei 2026"
                delay="2"
            />

            <x-proker-card
                icon="🌾"
                title="Edukasi Pertanian Modern"
                description="Sosialisasi teknik pertanian modern, pengelolaan lahan berkelanjutan, dan pemanfaatan teknologi sederhana untuk meningkatkan hasil panen."
                date="Mei — Juni 2026"
                delay="3"
            />

            <x-proker-card
                icon="🏥"
                title="Posyandu & Cek Kesehatan"
                description="Kegiatan pemeriksaan kesehatan gratis dan edukasi pola hidup sehat untuk warga desa, khususnya ibu hamil, balita, dan lansia."
                date="Mei 2026"
                delay="1"
            />

            <x-proker-card
                icon="♻️"
                title="Pengelolaan Sampah Desa"
                description="Program edukasi dan praktik pengelolaan sampah terpadu, mulai dari pemilahan, pengomposan, hingga daur ulang sampah anorganik."
                date="Juni 2026"
                delay="2"
            />

            <x-proker-card
                icon="🎨"
                title="Workshop Seni & Budaya"
                description="Pelatihan seni dan kebudayaan Jawa untuk generasi muda, termasuk tari tradisional, gamelan, dan kesenian lokal khas Ngadirejo."
                date="Juni 2026"
                delay="3"
            />
        </div>
    </div>
</section>