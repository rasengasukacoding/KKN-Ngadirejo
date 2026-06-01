<x-layouts.app title="Profil Kalurahan Melikan — Kapanewon Rongkop, Gunungkidul" description="Selami sejarah, visi-misi, kependudukan, dan jajaran perangkat Pemerintah Kalurahan Melikan, Kapanewon Rongkop, Kabupaten Gunungkidul, DIY.">

    {{-- Hero Header --}}
    <div class="pt-[52px] bg-[#1A3A2A] text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#e8a84c_1px,transparent_1px)] [background-size:20px_20px] pointer-events-none"></div>
        <div class="max-w-[1262px] mx-auto px-6 py-24 text-center relative z-10">
            <span class="text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-4 block hero-animate-1">Mengenal Lebih Dekat</span>
            <h1 class="font-['Outfit'] text-4xl md:text-5xl lg:text-6xl font-bold tracking-tight mb-6 hero-animate-2">Profil Kalurahan Melikan</h1>
            <p class="text-white/80 max-w-2xl mx-auto text-lg leading-relaxed hero-animate-3">
                Menyusuri sejarah, visi, misi, dan struktur kemasyarakatan Kalurahan Melikan di kawasan perbukitan karst Rongkop, Gunungkidul.
            </p>
        </div>
    </div>

    {{-- Sejarah & Deskripsi --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- Image --}}
                <div class="relative reveal">
                    <img src="{{ asset('images/about-village.png') }}" alt="Pemandangan Alam Bukit Karst Kalurahan Melikan"
                         class="w-full aspect-[4/3] object-cover rounded-2xl shadow-xl transition-all duration-300 hover:scale-[1.02]">
                    <div class="absolute -bottom-4 -right-4 w-[120px] h-[120px] bg-gradient-to-br from-[#E8A84C] to-[#B87333] -z-10 rounded-2xl shadow-lg"></div>
                </div>

                {{-- Text Content --}}
                <div class="reveal reveal-delay-2">
                    <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Sejarah & Geografis</span>
                    <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold leading-tight mb-6 text-[#1A3A2A]">Keindahan Alam Karst Rongkop</h2>
                    <p class="text-[16px] leading-relaxed text-[#6E6E73] mb-4">
                        Kalurahan Melikan terletak di Kapanewon (Kecamatan) Rongkop, Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Berbatasan langsung dengan wilayah Pracimantoro, Wonogiri, desa ini merupakan bagian unik dari kawasan ekologi Pegunungan Sewu yang berbukit batu karst.
                    </p>
                    <p class="text-[16px] leading-relaxed text-[#6E6E73] mb-4">
                        Masyarakat Kalurahan Melikan memiliki sejarah tangguh dalam memanfaatkan potensi alam. Sejak lama, warga mengandalkan penampungan air tadah hujan dan mengelola telaga-telaga alami (*tlogo*) untuk menjaga ketahanan air bagi rumah tangga serta pertanian hortikultura di sela-sela bukit batu.
                    </p>
                    <p class="text-[16px] leading-relaxed text-[#6E6E73]">
                        Melalui kolaborasi gotong royong yang tinggi, kini Melikan terus bertransformasi menuju desa mandiri dengan mengoptimalkan kerajinan bambu lokal, pariwisata alam berbasis gua-gua purba, serta pemanfaatan teknologi informasi terpadu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Visi & Misi --}}
    <section class="py-20 px-6 bg-[#FBF8F3]">
        <div class="max-w-[1262px] mx-auto">
            <div class="text-center mb-16 reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Arah Pembangunan</span>
                <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold text-[#1A3A2A]">Visi & Misi Kalurahan</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                {{-- Visi --}}
                <div class="bg-white p-8 border border-[#E8E5DE] rounded-2xl shadow-sm reveal transition-all duration-300 hover:shadow-md">
                    <div class="w-12 h-12 bg-[#E8F0EF] rounded-xl flex items-center justify-center text-[#2D5F5D] mb-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
                    </div>
                    <h3 class="font-['Outfit'] text-2xl font-semibold mb-4 text-[#1A3A2A]">Visi</h3>
                    <p class="text-[16px] leading-relaxed text-[#6E6E73]">
                        "Mewujudkan Kalurahan Melikan yang mandiri, berbudaya, sejahtera, dan tangguh bencana melalui optimalisasi potensi sumber daya lokal serta tata kelola pemerintahan yang bersih dan melayani."
                    </p>
                </div>

                {{-- Misi --}}
                <div class="bg-white p-8 border border-[#E8E5DE] rounded-2xl shadow-sm reveal reveal-delay-2 transition-all duration-300 hover:shadow-md">
                    <div class="w-12 h-12 bg-[#E8F0EF] rounded-xl flex items-center justify-center text-[#2D5F5D] mb-6">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    </div>
                    <h3 class="font-['Outfit'] text-2xl font-semibold mb-4 text-[#1A3A2A]">Misi</h3>
                    <ul class="space-y-3.5 text-[#6E6E73] text-[15px]">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-[#2D5F5D] font-bold">&bull;</span>
                            Meningkatkan pelayanan administrasi kependudukan yang cepat dan transparan berbasis digital desa.
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-[#2D5F5D] font-bold">&bull;</span>
                            Mengembangkan ekonomi kreatif berbasis anyaman bambu dan produk lokal bernilai ekonomi tinggi.
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-[#2D5F5D] font-bold">&bull;</span>
                            Meningkatkan kapasitas mitigasi kekeringan desa melalui revitalisasi telaga karst dan sumur tadah hujan.
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-[#2D5F5D] font-bold">&bull;</span>
                            Melestarikan tradisi adat budaya ketoprak, reog, dan kesenian lokal sebagai daya tarik desa budaya.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Statistik Kependudukan --}}
    <section class="py-20 px-6">
        <div class="max-w-[1262px] mx-auto text-center">
            <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3 reveal">Data Demografi</span>
            <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold mb-16 text-[#1A3A2A] reveal reveal-delay-1">Statistik Kalurahan Melikan</h2>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-12 lg:gap-16">
                <div class="bg-[#FBF8F3] p-10 border border-[#E8E5DE] rounded-2xl reveal transition-all duration-300 hover:-translate-y-1.5">
                    <div class="font-['Outfit'] text-5xl lg:text-6xl font-bold text-[#2D5F5D] mb-3" data-count="3280">0</div>
                    <div class="text-sm font-semibold uppercase tracking-wider text-[#6E6E73]">Total Penduduk</div>
                </div>
                <div class="bg-[#FBF8F3] p-10 border border-[#E8E5DE] rounded-2xl reveal reveal-delay-2 transition-all duration-300 hover:-translate-y-1.5">
                    <div class="font-['Outfit'] text-5xl lg:text-6xl font-bold text-[#2D5F5D] mb-3" data-count="15">0</div>
                    <div class="text-sm font-semibold uppercase tracking-wider text-[#6E6E73]">Padukuhan (Dusun)</div>
                </div>
                <div class="bg-[#FBF8F3] p-10 border border-[#E8E5DE] rounded-2xl reveal reveal-delay-3 transition-all duration-300 hover:-translate-y-1.5">
                    <div class="font-['Outfit'] text-5xl lg:text-6xl font-bold text-[#2D5F5D] mb-3" data-count="45">0</div>
                    <div class="text-sm font-semibold uppercase tracking-wider text-[#6E6E73]">Rukun Tetangga (RT)</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Aparatur Desa --}}
    <section class="py-20 px-6 bg-[#FBF8F3]">
        <div class="max-w-[1262px] mx-auto">
            <div class="text-center mb-16 reveal">
                <span class="block text-[13px] font-semibold tracking-[0.06em] uppercase text-[#E8A84C] mb-3">Pemerintahan Kalurahan</span>
                <h2 class="font-['Outfit'] text-3xl md:text-4xl font-semibold text-[#1A3A2A]">Pamong Kalurahan</h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Lurah --}}
                <div class="bg-white border border-[#E8E5DE] p-6 text-center rounded-2xl reveal transition-all duration-300 hover:shadow-md">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2D5F5D] to-[#1A3A2A] rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4">MB</div>
                    <h4 class="font-['Outfit'] text-lg font-semibold text-[#1A3A2A]">M. Budi Santoso</h4>
                    <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider mb-2">Lurah</p>
                    <p class="text-xs text-[#6E6E73]">Memimpin pelaksanaan roda organisasi pemerintahan, kesejahteraan sosial, dan pembangunan Kalurahan.</p>
                </div>
                {{-- Carik --}}
                <div class="bg-white border border-[#E8E5DE] p-6 text-center rounded-2xl reveal reveal-delay-1 transition-all duration-300 hover:shadow-md">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2D5F5D] to-[#1A3A2A] rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4">SR</div>
                    <h4 class="font-['Outfit'] text-lg font-semibold text-[#1A3A2A]">Siti Rahayu</h4>
                    <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider mb-2">Carik (Sekretaris)</p>
                    <p class="text-xs text-[#6E6E73]">Mengoordinasikan urusan administrasi umum, keuangan, kepegawaian, serta pelayanan pamong.</p>
                </div>
                {{-- Danarta --}}
                <div class="bg-white border border-[#E8E5DE] p-6 text-center rounded-2xl reveal reveal-delay-2 transition-all duration-300 hover:shadow-md">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2D5F5D] to-[#1A3A2A] rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4">AH</div>
                    <h4 class="font-['Outfit'] text-lg font-semibold text-[#1A3A2A]">Ahmad Hidayat</h4>
                    <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider mb-2">Danarta (Keuangan)</p>
                    <p class="text-xs text-[#6E6E73]">Melaksanakan pengelolaan administrasi anggaran pendapatan dan pembiayaan Kalurahan.</p>
                </div>
                {{-- Ulu ulu --}}
                <div class="bg-white border border-[#E8E5DE] p-6 text-center rounded-2xl reveal reveal-delay-3 transition-all duration-300 hover:shadow-md">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2D5F5D] to-[#1A3A2A] rounded-full flex items-center justify-center text-white text-3xl font-bold mx-auto mb-4">WD</div>
                    <h4 class="font-['Outfit'] text-lg font-semibold text-[#1A3A2A]">Wahyu Darmawan</h4>
                    <p class="text-xs text-[#E8A84C] font-semibold uppercase tracking-wider mb-2">Ulu-Ulu (Pembangunan)</p>
                    <p class="text-xs text-[#6E6E73]">Mengoordinasikan program pembangunan infrastruktur fisik dan pemberdayaan pertanian karst.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Count Animation JS --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const countElements = document.querySelectorAll('[data-count]');
            
            const startCounting = (el) => {
                const target = parseInt(el.getAttribute('data-count'), 10);
                const duration = 2000; // 2 seconds
                const stepTime = Math.max(Math.floor(duration / target), 15);
                let current = 0;
                
                const timer = setInterval(() => {
                    if (target > 100) {
                        current += Math.ceil(target / 100);
                    } else {
                        current += 1;
                    }
                    
                    if (current >= target) {
                        el.innerText = target.toLocaleString('id-ID');
                        clearInterval(timer);
                    } else {
                        el.innerText = current.toLocaleString('id-ID');
                    }
                }, stepTime);
            };

            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            startCounting(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.5 });
                
                countElements.forEach(el => observer.observe(el));
            } else {
                countElements.forEach(el => startCounting(el));
            }
        });
    </script>
</x-layouts.app>
