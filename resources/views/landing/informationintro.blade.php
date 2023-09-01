@extends('layouts.landing.base')

@section('content')
    <section id="news" class="h-screen w-full bg-white">
        <div class="container">
            <div class="h-screen information-background relative">
                <img 
                    src="{{ asset('/src/img/hero/2/bintang.png') }}" 
                    alt="bintang" 
                    class="absolute mt-0 ml-0 h-screen object-cover"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-duration="1000"
                    data-aos-offset="0"
                >

                <div class="absolute w-full h-screen flex flex-col items-center text-center pt-32">
                    <h2 
                        id="title" 
                        class="gradient-text-information text-5xl font-extrabold mb-5"
                        data-aos="fade-up"
                        data-aos-anchor-placement="center-bottom"
                        data-aos-delay="1200"
                    >
                        Perbanyak Informasimu <br>
                        Perluas Wawasanmu
                    </h2>
                    
                    <h3 
                        id="text1" 
                        class="text-white text-lg font-light mb-12"
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
                        <button class="bg-space-buttonbiru px-8 py-3 text-white text-base rounded-lg mb-12">
                            Selengkapnya
                        </button>
                    </a>

                    <img
                        src="/src/img/information/1/card.png" 
                        alt="card" 
                        class="h-52"
                        data-aos="fade-up"
                        data-aos-delay="1500"
                        data-aos-duration="3000"
                    >
                </div>
            </div>
        </div>
    </section>

    <section id="infopkkmb" class="h-screen w-full bg-white">
        <div class="container">
            <div class="h-screen information-background relative">
                <img src="{{ asset('/src/img/hero/2/bintang.png') }}" alt="bintang" class="absolute mt-0 ml-0 h-screen object-cover">

                <div class="absolute w-full h-screen flex flex-col items-center text-center pt-24">
                    <h2 id="title" class="gradient-text-information text-5xl font-extrabold mb-5">
                        Carilah Informasi Terbaik <br>
                        Untuk Menunjangan Kegiatanmu
                    </h2>
                    
                    <h3 id="text1" class="text-white text-lg font-light mb-12">
                        Dengan informasi terbaik langkahmu semakin lancar <br>
                        Dengan informasi terbaik jalanmu semakin mudah
                    </h3>
                    
                    <a href="{{ route('informasi-kegiatan') }}">
                        <button class="bg-space-buttonbiru px-8 py-3 text-white text-base rounded-lg mb-12">
                            Selengkapnya
                        </button>
                    </a>

                    <img src="/src/img/information/1/card.png" alt="card" class="h-52">
                </div>
            </div>
        </div>
    </section>

    <section id="announcement" class="h-screen w-full bg-white">
        <div class="container">
            <div class="h-screen information-background relative">
                <img src="{{ asset('/src/img/hero/2/bintang.png') }}" alt="bintang" class="absolute mt-0 ml-0 h-screen object-cover">

                <div class="absolute w-full h-screen flex flex-col items-center text-center pt-24">
                    <h2 id="title" class="gradient-text-information text-5xl font-extrabold mb-5">
                        Berjuang Sungguh-Sungguh <br>
                        Mendapat Hasil Kemudian
                    </h2>
                    
                    <h3 id="text1" class="text-white text-lg font-light mb-12">
                        Perjuanganmu tidak mungkin sia-sia <br>
                        Hasilmu saat ini adalah perjuanganmu dimasa lampau
                    </h3>
                    
                    <a href="{{ route('pengumuman-landing') }}">
                        <button class="bg-space-buttonbiru px-8 py-3 text-white text-base rounded-lg mb-12">
                            Cek Sekarang
                        </button>
                    </a>

                    <img src="/src/img/information/1/card.png" alt="card" class="h-52">
                </div>
            </div>
        </div>
    </section>
@endsection

@push('javascript')
@endpush