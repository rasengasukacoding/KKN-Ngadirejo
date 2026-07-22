<x-layouts.app
    title="Perangkat Desa | Desa Ngadirejo"
    description="Struktur organisasi dan tugas perangkat Desa Ngadirejo">

    {{-- Hero --}}
    <section class="bg-[#1A3A2A] pt-44 pb-24 text-white">
        <div class="max-w-[1262px] mx-auto px-6 text-center">

            <span class="text-[#E8A84C] uppercase tracking-[3px] font-semibold text-sm">
                Pemerintah Desa
            </span>

            <h1 class="font-['Outfit'] text-5xl font-bold mt-4">
                Perangkat Desa Ngadirejo
            </h1>

            <p class="max-w-3xl mx-auto mt-6 text-lg text-white/75 leading-relaxed">
                Perangkat Desa merupakan unsur penyelenggara pemerintahan desa
                yang membantu Kepala Desa dalam melaksanakan pemerintahan,
                pembangunan, pembinaan kemasyarakatan serta pemberdayaan masyarakat.
            </p>

        </div>
    </section>

    {{-- Tugas Kepala Desa --}}
    <section class="py-20 bg-white">
        <div class="max-w-[1262px] mx-auto px-6">

            <div class="mb-12">
                <span class="text-[#E8A84C] font-semibold uppercase tracking-wider">
                    Tugas Pokok
                </span>

                <h2 class="text-4xl font-bold text-[#1A3A2A] mt-3">
                    Tugas Kepala Desa
                </h2>
            </div>

            <div class="bg-[#F8FAF8] rounded-3xl p-8 shadow-sm">

                <p class="text-gray-700 leading-8 mb-6">
                    Kepala Desa berkedudukan sebagai pimpinan Pemerintah Desa
                    yang bertugas menyelenggarakan pemerintahan desa,
                    melaksanakan pembangunan, pembinaan kemasyarakatan,
                    serta pemberdayaan masyarakat.
                </p>

                <div class="grid md:grid-cols-2 gap-6">

                    <div>
                        <h3 class="font-bold text-[#1A3A2A] mb-4">
                            Tugas Utama
                        </h3>

                        <ul class="space-y-3 text-gray-700">
                            <li>✓ Memimpin penyelenggaraan Pemerintahan Desa.</li>
                            <li>✓ Melaksanakan pembangunan desa.</li>
                            <li>✓ Membina kehidupan masyarakat desa.</li>
                            <li>✓ Memberdayakan masyarakat desa.</li>
                            <li>✓ Menjaga ketertiban dan keamanan desa.</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="font-bold text-[#1A3A2A] mb-4">
                            Wewenang
                        </h3>

                        <ul class="space-y-3 text-gray-700">
                            <li>✓ Mengangkat dan memberhentikan perangkat desa.</li>
                            <li>✓ Menetapkan Peraturan Desa.</li>
                            <li>✓ Mengelola APBDes.</li>
                            <li>✓ Mewakili desa di dalam maupun di luar pengadilan.</li>
                            <li>✓ Menetapkan kebijakan pembangunan desa.</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>

    {{-- Struktur Organisasi --}}
    <section class="py-20 bg-[#F6F8F7]">

        <div class="max-w-[1262px] mx-auto px-6">

            <div class="text-center mb-14">
                <span class="text-[#E8A84C] uppercase tracking-wider font-semibold">
                    Struktur Organisasi
                </span>

                <h2 class="text-4xl font-bold text-[#1A3A2A] mt-3">
                    Susunan Perangkat Desa
                </h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($perangkats as $item)
                <div class="bg-white rounded-3xl p-8 shadow-sm hover:shadow-lg transition text-center">
                    
                    {{-- Menampilkan Foto Perangkat --}}
                    @if($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" class="w-24 h-24 rounded-full mx-auto mb-4 object-cover border-4 border-[#F8FAF8]" alt="{{ $item->nama }}">
                    @else
                        <div class="w-24 h-24 rounded-full mx-auto mb-4 bg-gray-100 flex items-center justify-center">
                            <span class="text-gray-400 text-sm">Tanpa Foto</span>
                        </div>
                    @endif

                    <h3 class="text-2xl font-bold text-[#1A3A2A]">
                        {{ $item->jabatan }}
                    </h3>

                    <p class="text-[#E8A84C] font-semibold mt-2">
                        {{ $item->nama }}
                    </p>
                </div>
                @empty
                <div class="col-span-full bg-white rounded-3xl p-10 text-center shadow-sm">
                    <p class="text-gray-500">Struktur perangkat desa belum ditambahkan oleh Admin.</p>
                </div>
                @endforelse
            </div>

        </div>

    </section>

</x-layouts.app>