@extends('layouts.landing.base')

@section('content')
    <section id="news" class="h-screen w-full information-background">
        <img 
            src="{{ asset('/src/img/hero/2/bintang.png') }}" 
            alt="bintang" 
            class="absolute mt-0 ml-0 h-screen object-cover"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="1000"
            data-aos-offset="0"
        >

        <div class="absolute w-full h-screen flex flex-col items-center text-center pt-28">
            <h2 
                id="title" 
                class="gradient-text-information text-3xl lg:text-5xl font-extrabold mb-3 lg:mb-5"
                data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="1200"
            >
                Perbanyak Informasimu <br>
                Perluas Wawasanmu
            </h2>
            
            <h3 
                id="text1" 
                class="text-white text-sm lg:text-base font-light mb-5 lg:mb-10"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-delay="1500"
                data-aos-duration="500"
            >
                Dunia terus berubah, Maka ikuti perkembangan Informasi <br>
                Informasi dapat membantumu untuk dapatkan ide-ide terbaru
            </h3>
            
            <a 
                href="{{ route('informasi-berita') }}"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="2500"
                data-aos-duration="1000"
                data-aos-offset="0"
            >
                <button class="bg-space-buttonbiru px-7 py-2 text-white text-base rounded-lg mb-12">
                    Selengkapnya
                </button>
            </a>

            <img
                src="/src/img/information/1/card.png" 
                alt="card" 
                class="h-48 lg:h-52"
                data-aos="fade-up"
                data-aos-delay="1500"
                data-aos-duration="3000"
            >
        </div>
    </section>

    <section id="infopkkmb" class="h-screen w-full information-background">
        <img 
            src="{{ asset('/src/img/hero/2/bintang.png') }}" 
            alt="bintang" 
            class="absolute mt-0 ml-0 h-screen object-cover"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="1000"
            data-aos-offset="0"
        >

        <div class="absolute w-full h-screen flex flex-col items-center text-center pt-28">
            <h2 
                id="title" 
                class="gradient-text-information text-3xl lg:text-5xl font-extrabold mb-3 lg:mb-5"
                data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="1200"
            >
                Carilah Informasi Terbaik <br>
                Untuk Menunjangan Kegiatanmu
            </h2>
            
            <h3 
                id="text1" 
                class="text-white text-sm lg:text-base font-light mb-5 lg:mb-10"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-delay="1500"
                data-aos-duration="500"
            >
                Dengan informasi terbaik langkahmu semakin lancar <br>
                Dengan informasi terbaik jalanmu semakin mudah
            </h3>
            
            <lottie-player class="absolute h-[600px] mt-10 lg:mt-28" src="https://lottie.host/48c5b1fc-2762-4ded-a3f7-b7545e223e4f/YpldIOFUpi.json" background="transparent" speed="0.5" direction="1" mode="normal" loop autoplay></lottie-player>

            <a 
                href="{{ route('informasi-kegiatan') }}"
                class="absolute w-full mt-52"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="2500"
                data-aos-duration="1000"
                data-aos-offset="0"
            >
                <button class="bg-space-buttonbiru px-7 py-2 text-white text-base rounded-lg mb-12">
                    Selengkapnya
                </button>
            </a>
        </div>
    </section>

    <section id="announcement" class="h-screen w-full information-background">
        <img 
            src="{{ asset('/src/img/hero/2/bintang.png') }}" 
            alt="bintang" 
            class="absolute mt-0 ml-0 h-screen object-cover"
            data-aos="fade-zoom-in"
            data-aos-easing="ease-in-back"
            data-aos-duration="1000"
            data-aos-offset="0"
        >

        <div class="absolute w-full h-screen flex flex-col items-center text-center pt-28">
            <h2 
                id="title" 
                class="gradient-text-information text-3xl lg:text-5xl font-extrabold mb-3 lg:mb-5"
                data-aos="fade-up"
                data-aos-anchor-placement="center-bottom"
                data-aos-delay="1200"
            >
                Berjuang Sungguh-Sungguh <br>
                Mendapat Hasil Kemudian
            </h2>
            
            <h3 
                id="text1" 
                class="text-white text-sm lg:text-base font-light mb-5 lg:mb-10"
                data-aos="fade-up"
                data-aos-easing="linear"
                data-aos-delay="1500"
                data-aos-duration="500"
            >
                Perjuanganmu tidak mungkin sia-sia <br>
                Hasilmu saat ini adalah perjuanganmu dimasa lampau
            </h3>

            <lottie-player class="absolute h-48 lg:h-[300px] mt-72 lg:mt-56" src="https://lottie.host/3f4a4cd3-b12c-480d-aff7-fc11e101f4a8/flXzAEAZw9.json" background="transparent" speed="1" direction="1" mode="normal" loop autoplay></lottie-player>
            
            <a 
                href="{{ route('pengumuman-landing') }}"
                class="absolute w-full mt-56 lg:mt-48"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="2500"
                data-aos-duration="1000"
                data-aos-offset="0"
            >
                <button class="bg-space-buttonbiru px-7 py-2 text-white text-base rounded-lg mb-12">
                    Cek Sekarang
                </button>
            </a>
        </div>
    </section>
@endsection

@push('javascript')
@endpush