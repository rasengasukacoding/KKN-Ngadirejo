<x-layouts.app title="Lembaga Desa | Desa Ngadirejo" description="Informasi Lembaga Kemasyarakatan Desa Ngadirejo yang menjadi mitra pemerintah desa.">

<section class="bg-gray-50 py-20">
    <div class="max-w-[1262px] mx-auto px-6">
        
        <div class="text-center mb-16">
            <span class="text-[#E8A84C] font-semibold uppercase tracking-widest">
                Pemerintahan Desa
            </span>
            <h1 class="text-5xl font-bold text-[#1A3A2A] mt-3">
                Lembaga Desa Ngadirejo
            </h1>
            <p class="mt-5 max-w-3xl mx-auto text-gray-600 leading-8">
                Lembaga kemasyarakatan desa merupakan mitra Pemerintah Desa
                yang membantu dalam pembangunan, pelayanan masyarakat,
                pemberdayaan masyarakat, keamanan, serta meningkatkan
                kesejahteraan warga Desa Ngadirejo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            {{-- Melakukan perulangan data dari HomeController --}}
            @forelse($lembaga_desas as $lembaga)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col h-full">
                    
                    <!-- Tempat Menampilkan Logo -->
                    <div class="h-48 bg-gray-50 flex items-center justify-center p-6 border-b border-gray-100">
                        @if($lembaga->logo)
                            {{-- Perbaikan: Memastikan pemanggilan logo dari storage --}}
                            <img src="{{ asset('storage/' . $lembaga->logo) }}" alt="Logo {{ $lembaga->nama }}" class="max-h-full object-contain hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="text-gray-400 flex flex-col items-center">
                                <svg class="w-12 h-12 mb-2 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <span class="text-sm font-medium">Tanpa Logo</span>
                            </div>
                        @endif
                    </div>

                    <!-- Tempat Menampilkan Teks -->
                    <div class="p-8 flex-grow">
                        {{-- Perbaikan: Mengubah $lembaga->nama_lembaga menjadi $lembaga->nama --}}
                        <h3 class="text-2xl font-bold text-[#1A3A2A] mb-3">{{ $lembaga->nama }}</h3>
                        <p class="text-gray-600 text-[15px] leading-relaxed">
                            {{ $lembaga->deskripsi }}
                        </p>
                    </div>
                </div>
            
            {{-- Apa yang terjadi jika database masih kosong? --}}
            @empty
                <div class="col-span-full bg-white rounded-3xl p-10 text-center shadow-sm border border-gray-100">
                    <p class="text-gray-500 text-lg">Belum ada data lembaga desa yang ditambahkan oleh Admin.</p>
                </div>
            @endforelse

        </div>

    </div>
</section>

</x-layouts.app>