{{-- Navbar Component --}}
<nav class="nav-glass fixed top-0 left-0 right-0 z-50 border-b border-black/5 transition-all duration-300" id="navbar">
    <div class="max-w-[1262px] mx-auto flex items-center justify-between px-6 h-[72px]">

        <a href="/" class="flex items-center gap-4 no-underline shrink-0">

        {{-- Logo --}}
        <img
            src="{{ asset('storage/logo/logo-karanganyar.png') }}"
            alt="Logo Karanganyar"
            class="h-14 w-14 object-contain">

        {{-- Tulisan --}}
        <div class="flex flex-col leading-tight">

            <span class="text-[20px] font-bold text-[#1A3A2A]">
                Desa Ngadirejo
            </span>

            <span class="text-[11px] text-gray-600">
                Kecamatan Mojogedang
            </span>

            <span class="text-[11px] text-gray-600">
                Kabupaten Karanganyar
            </span>

        </div>

    </a>

        {{-- Desktop Nav Links --}}
        <ul class="hidden md:flex items-center gap-3 list-none m-0 p-0" id="nav-links">
            <li>
                <a href="/" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('/') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/profil" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('profil') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Profil
                </a>
            </li>
            <li>
                <a href="/perangkat-desa"
                    class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('perangkat-desa*') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Perangkat Desa
                </a>
            </li>

            <li>
                <a href="/lembaga-desa"
                    class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('lembaga-desa*') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Lembaga Desa
                </a>
            </li>

            <li>
                <a href="/wisata" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('wisata') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Wisata
                </a>
            </li>
            <li>
                <a href="/umkm" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('umkm') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    UMKM
                </a>
            </li>
            <li>
                <a href="/kegiatan-berita" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('ngadirejo-membaca') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Kegiatan & Berita
                </a>
            </li>
            <li>
                <a href="/about" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('about') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Tentang
                </a>
            </li>
            <li>
                <a href="/lokasi" class="nav-link inline-flex items-center h-11 px-3.5 text-sm font-medium no-underline rounded-lg transition-all duration-200 hover:text-[#2D5F5D] hover:bg-[#2D5F5D]/5 {{ request()->is('lokasi') ? 'text-[#2D5F5D] bg-[#2D5F5D]/5 font-semibold' : 'text-gray-600' }}">
                    Lokasi
                </a>
            </li>
        </ul>

        {{-- Mobile Toggle --}}
        <button class="md:hidden bg-transparent border-none cursor-pointer p-2 text-[#1D1D1F]" id="nav-toggle" aria-label="Toggle navigation">
            <span class="block w-[22px] h-0.5 bg-current my-[5px] rounded-sm transition-all duration-300"></span>
            <span class="block w-[22px] h-0.5 bg-current my-[5px] rounded-sm transition-all duration-300"></span>
            <span class="block w-[22px] h-0.5 bg-current my-[5px] rounded-sm transition-all duration-300"></span>
        </button>
    </div>
</nav>

{{-- Mobile Drawer --}}
<div class="hidden fixed top-[52px] left-0 right-0 bottom-0 bg-white/[0.98] backdrop-blur-xl z-[49] p-6 opacity-0 -translate-y-2.5 transition-all duration-300" id="nav-drawer">
    <a href="/"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('/') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Beranda
    </a>

    <a href="/profil"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('profil') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Profil Desa
    </a>

    <a href="/perangkat-desa"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('perangkat-desa*') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Perangkat Desa
    </a>

    <a href="/lembaga-desa"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('lembaga-desa*') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Lembaga Desa
    </a>

    <a href="/wisata"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('wisata') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Wisata
    </a>

    <a href="/umkm"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('umkm') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        UMKM
    </a>

    <a href="/kegiatan-berita"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('ngadirejo-membaca') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Kegiatan & Berita
    </a>

    <a href="/about"
        class="flex items-center py-4 text-lg font-medium no-underline border-b border-[#E8E5DE] transition-colors duration-200 {{ request()->is('about') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Tentang
    </a>

    <a href="/lokasi"
        class="flex items-center py-4 text-lg font-medium no-underline transition-colors duration-200 {{ request()->is('lokasi') ? 'text-[#2D5F5D] font-semibold' : 'text-[#1D1D1F] hover:text-[#2D5F5D]' }}">
        Lokasi
    </a>

</div>

{{-- Navbar & Reveal Script --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Mobile menu drawer toggle
        const toggle = document.getElementById('nav-toggle');
        const drawer = document.getElementById('nav-drawer');
        if (toggle && drawer) {
            toggle.addEventListener('click', function () {
                const isOpen = !drawer.classList.contains('hidden');
                if (isOpen) {
                    drawer.classList.add('opacity-0', '-translate-y-2.5');
                    setTimeout(() => {
                        drawer.classList.add('hidden');
                    }, 300);
                } else {
                    drawer.classList.remove('hidden');
                    drawer.offsetHeight; // force reflow
                    drawer.classList.remove('opacity-0', '-translate-y-2.5');
                }
            });
        }
        
        // Scroll navbar scrolled class toggle
        const navbar = document.getElementById('navbar');
        if (navbar) {
            const handleScroll = () => {
                if (window.scrollY > 10) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            };
            window.addEventListener('scroll', handleScroll);
            handleScroll(); // run once on load
        }

        // Scroll reveal animation using IntersectionObserver
        const revealElements = document.querySelectorAll('.reveal');
        if ('IntersectionObserver' in window && revealElements.length > 0) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                root: null,
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            });

            revealElements.forEach((el) => observer.observe(el));
        } else {
            // fallback if IntersectionObserver is not supported
            revealElements.forEach((el) => el.classList.add('visible'));
        }
    });
</script>
