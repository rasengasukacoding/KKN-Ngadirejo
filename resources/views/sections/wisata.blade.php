{{-- Wisata Section --}}
<section class="py-20 lg:py-28 px-6 bg-[#FBF8F3]" id="wisata">
    <div class="max-w-[1262px] mx-auto">

        <x-section-header
            eyebrow="Destinasi Wisata"
            title="Pesona Alam<br>Sekitar Melikan"
            description="Nikmati keindahan alam dan tempat-tempat menarik di sekitar Desa Melikan yang menawarkan pengalaman wisata unik dan berkesan."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-7">
            <x-wisata-card
                image="images/wisata-nature.png"
                tag="🌿 Alam"
                title="Pesona Sungai & Persawahan"
                description="Jelajahi keindahan sungai jernih yang mengalir di antara hamparan sawah hijau dengan suasana pedesaan yang asri dan menenangkan."
                delay="1"
            />

            <x-wisata-card
                image="images/wisata-waterfall.png"
                tag="💧 Air Terjun"
                title="Air Terjun Tersembunyi"
                description="Temukan keajaiban air terjun tersembunyi di hutan tropis sekitar desa dengan air jernih dan pemandangan yang memukau."
                delay="2"
            />

            <x-wisata-card
                image="images/hero-village.png"
                tag="🏡 Desa Wisata"
                title="Wisata Edukasi Desa"
                description="Rasakan pengalaman hidup di desa, belajar bertani, dan nikmati kuliner tradisional bersama warga Melikan yang ramah."
                delay="3"
            />
        </div>
    </div>
</section>
