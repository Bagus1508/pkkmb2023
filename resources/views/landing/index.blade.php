<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @include('includes.landing.meta')

    @include('partials.fonts')
    @include('partials.tailwindstyles')
    @stack('style')

    <title>Beranda | PKKMB Narotama 2023</title>

    @stack('before-style')

    @include('includes.landing.style')

    @stack('after-style')
  </head>

  <body class="antialiased font-poppins">
    <div class="relative">
      @include('includes.landing.navbarlanding')

      <section id="hero" class="animation-container h-screen w-full hero-background relative">
        <img 
          src="{{ asset('/src/img/hero/bintang.png') }}" 
          alt="bintang" 
          class="animate__animated animate__fadeInUp absolute mt-0 ml-0 h-screen w-full object-cover"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="1000"
          data-aos-duration="1000"
          data-aos-offset="0"
        >
    
        <div class="absolute w-full h-screen flex flex-col items-center text-center pt-36">
          <img 
            src="{{ asset('/src/img/logo/logo.png') }}" 
            alt="" 
            class="h-16 bg-white py-1 px-6 rounded-lg mb-7"
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-delay="1500"
            data-aos-duration="1000"
          >

          <div
            class=""
            data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-delay="1000"
            data-aos-duration="1000"
          >
            <h2 id="title1" class="text-space-textungu text-6xl font-extrabold mb-3">WUJUDKAN MIMPI</h2>
            <h2 id="title2" class="text-white text-6xl font-extrabold mb-7">TAKLUKAN DUNIA</h2>
          </div>

          <div
            class=""
            data-aos="fade-up"
            data-aos-easing="linear"
            data-aos-duration="2500"
          >
            <h3 id="text1" class="text-white text-lg font-light">Inilah saatnya untuk beraksi</h3>
            <h3 id="text2" class="text-white text-lg font-light">Jadilah bagian dari perubahan yang luar biasa</h3>
          </div>
        </div>
        
        <img 
          src="{{ asset('/src/img/hero/planet.png') }}" 
          alt="planet" 
          class="absolute mt-0 ml-0 h-screen w-full object-cover"
          data-aos="fade-up"
        >
        <img
          src="{{ asset('/src/img/hero/planett.png') }}"
          alt="planett"
          class="absolute mt-0 ml-0 h-screen w-full object-cover"
          data-aos="zoom-in"
          data-aos-delay="500"
        >
    
        <div 
          class="absolute w-full h-screen flex flex-col items-center text-center pt-96"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="2000"
          data-aos-duration="1000"
          data-aos-offset="0"
        >
          <a href="#dashboard">
            <button class="text-white font-bold text-xl mt-40 py-2 px-7 bg-space-buttonungu rounded-full shadow-sm">
              Mulai
            </button>
          </a>
        </div>
      </section>
    
      <section id="dashboard" class="h-screen w-full hero-section2-background">
        <img 
          src="{{ asset('/src/img/hero/2/bintang.png') }}" 
          alt="bintang" class="absolute mt-0 ml-0 h-screen object-cover"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-duration="2000"
          data-aos-offset="0"
        >
        <img 
          src="{{ asset('/src/img/hero/2/roketmeluncur.png') }}" 
          alt="roketmeluncur" 
          class="absolute mt-0 ml-0 h-screen object-cover"
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-duration="1000"
          data-aos-offset="0"
        >
    
        <div class="absolute ml-36 h-screen">
          <div class="flex flex-col items-center text-center pt-48">
            <h2 
              id="title1" 
              class="text-white text-6xl font-extrabold mb-1"
              data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-delay="1100"
              data-aos-duration="1000"
            >
              MULAI DUNIAMU
            </h2>
            <h2 
              id="title2" 
              class="text-white text-3xl font-bold mb-7"
              data-aos="fade-down"
              data-aos-easing="linear"
              data-aos-delay="1000"
              data-aos-duration="1000"
            >
              UNTUK PERUBAHAN YANG LUAR BIASA
            </h2>
            <div 
              class=""
              data-aos="fade-up"
              data-aos-easing="linear"
              data-aos-delay="1300"
              data-aos-duration="1000"
            >
              <h3 id="text1" class="text-white text-base font-light">Saatnya mulai beraksi</h3>
              <h3 id="text2" class="text-white text-base font-light mb-7">Buat pengalamanmu menjadi lebih berharga</h3>
            </div>
    
            <a 
              href="{{ route('home-presences.indexuserdashboard') }}"
              data-aos="fade-zoom-in"
              data-aos-easing="ease-in-back"
              data-aos-delay="2500"
              data-aos-duration="1000"
            >
              <button class="text-white font-bold text-base py-2 px-9 bg-space-textungu border-2 border-white rounded-full shadow-xl">
                Masuk
              </button>
            </a>
          </div>
        </div>
      </section>
    
      <section id="information" class="h-screen w-full bg-white">
        <img 
          src="{{ asset('/src/img/hero/3/langit.png') }}" 
          alt="langit" 
          class="absolute mt-0 ml-0 h-screen object-cover"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-duration="1000"
          data-aos-offset="200"
        >
        <div 
          class=""
          data-aos="fade-up"
          data-aos-anchor-placement="bottom-bottom"
          data-aos-delay="1000"
          data-aos-offset="500"
        >
          <img src="{{ asset('/src/img/hero/3/bumi.png') }}" alt="bumi" class="absolute mt-0 ml-0 h-screen object-cover">
          <img src="{{ asset('/src/img/hero/3/roket.png') }}" alt="roket" class="absolute mt-0 ml-0 h-screen object-cover">
        </div>
    
        <div class="absolute ml-36 h-screen">
          <div class="flex flex-col mt-48">
            <h2 
              id="title1" 
              class="text-orange-500 text-5xl font-extrabold mb-1"
              data-aos="fade-right"
              data-aos-easing="linear"
              data-aos-delay="2100"
              data-aos-duration="1000"
            >
              PERBANYAK INFORMASI
            </h2>
            <h2 
              id="title2" 
              class="text-orange-500 text-3xl font-bold mb-7"
              data-aos="fade-right"
              data-aos-easing="linear"
              data-aos-delay="2000"
              data-aos-duration="1000"
            >
              MEMBUATMU MENJADI LEBIH LUAS
            </h2>
            <div
              class=""
              data-aos="fade-right"
              data-aos-easing="linear"
              data-aos-delay="2300"
              data-aos-duration="1000"
            >
              <h3 id="text1" class="text-space-buttonungu text-lg font-light">Informasi akan membantumu</h3>
              <h3 id="text2" class="text-space-buttonungu text-lg font-light mb-7">Informasi akan menjadi penuntunmu</h3>
            </div>
    
            <a 
              href="{{ route('informasi-landing') }}"
              data-aos="fade-zoom-in"
              data-aos-easing="ease-in-back"
              data-aos-delay="2800"
              data-aos-duration="1000"
            >
              <button class="text-white font-bold text-lg py-2 px-9 bg-space-buttonungu border-2 border-white rounded-full shadow-xl">
                Cari Informasi
              </button>
            </a>
          </div>
        </div>
      </section>
    
      <section id="news" class="">
    
      </section>

      @include('layouts.landing.footer')

      <script>
        document.querySelector('#nav-toggle').onclick = () => {
          document.querySelectorAll('#nav-content').forEach(element => {
            if (element.style.display === '') element.style.display = 'flex'
            else element.style.display = ''
          })
        }
      </script>

      @stack('before-script')

      @include('includes.landing.script')

      @stack('after-script')

      @stack('javascript')
      @include('partials.scripts')
    </div>
  </body>
</html>