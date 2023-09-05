@extends('layouts.landing.base')

@push('stylesheet')
    <style>
        .--segmented-controls {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            color: #33458F;
            border-radius: 25px;
            padding: 0;
        }

        .--segmented-controls > .--segmented-control-item {
            display: flex;
            list-style: none;
            text-align: center;
            height: 100%;
            padding: .5em 0;
        }

        .--segmented-control-item > * {
            margin: auto;
            font-weight: bold;
        }

        .--segmented-controls > .--segmented-control-active {
            background-color: #33458F !important;
            color: #FFFFFF !important;
            border-radius: 25px;
            -webkit-transition: all ease-in-out 0.6s;
            -moz-transition: all ease-in-out 0.6s;
            -ms-transition: all ease-in-out 0.6s;
            -o-transition: all ease-in-out 0.6s;
            transition: all ease-in-out 0.6s;
        }

        .--segmented-content {
            width: 100%;
            background-color: #F3F5FA;
            color: #000000;
            padding: 2em 3em;
            border-radius: 20px;
        }

        .--underlined {
            margin: 1em auto;
            width: 500px;
            height: 1px;
            border: 2px solid #F89D08;
        }

        @media only screen
        and (max-width: 768px) {
            .--segmented-controls {
                height: 150px;
                grid-template-columns: 1fr;
            }

            .--underlined {
                width: 200px;
            }
        }

        .--btn-primary {
            color: white;
            background: #56D7BC;
            border-radius: 10px;
            padding: 1em 2em;
        }
    </style>
@endpush

@section('content')
    {{-- Hero Page --}}
    <section id="hero" class="lg:h-screen w-full hero-background lg:relative flex items-center">
        <img 
          src="{{ asset('/src/img/hero/bintang.png') }}" 
          alt="bintang" 
          class="hidden lg:block absolute mt-0 ml-0 h-screen w-full object-cover"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="1000"
          data-aos-duration="1000"
          data-aos-offset="0"
        >
        
        <img 
          src="{{ asset('/src/img/hero/planet.png') }}" 
          alt="planet" 
          class="absolute mt-0 ml-0 h-screen lg:w-full object-cover"
          data-aos="fade-up"
        >
        <img
          src="{{ asset('/src/img/hero/planett.png') }}"
          alt="planett"
          class="hidden lg:block absolute mt-0 ml-0 h-screen w-full object-cover"
          data-aos="zoom-in"
          data-aos-delay="500"
        >

        <div class="lg:absolute w-full h-screen flex flex-col items-center text-center pt-56 lg:pt-36">
            <img 
                src="{{ asset('/src/img/hero/pkkmb_hero.png') }}" 
                alt="PKKMB Mascot"
                class="flex items-center h-28 lg:h-80 shadow-lg"
                data-aos="zoom-in-up"
                data-aos-delay="1500"
                data-aos-duration="1000"
            >
        </div>
      </section>


    {{-- Content --}}
    <section id="informasi-kegiatan">
        <div class="container">
            <div class="w-full">

                <div class="tab bg-space-back">
                    <ul class="flex flex-col lg:flex-row text-base text-center text-white">
                        <li class="w-full" role="presentation">
                            <button class="tablinks inline-block border-t-2 border-space-buttonungu py-2 lg:py-8 w-full text-base text-center text-gray-400 hover:text-gray-700 hover:bg-slate-100" onclick="openCity(event, 'pengenalan')" id="defaultOpen">
                                Pengenalan
                            </button>
                        </li>
                        <li class="w-full" role="presentation">
                            <button class="tablinks inline-block border-t-2 border-space-buttonungu py-2 lg:py-8 w-full text-base text-center text-gray-400 hover:text-gray-700 hover:bg-slate-100" onclick="openCity(event, 'pedoman')">
                                Pedoman
                            </button>
                        </li>
                        <li class="w-full" role="presentation">
                            <button class="tablinks inline-block border-t-2 border-space-buttonungu py-2 lg:py-8 w-full text-base text-center text-gray-400 hover:text-gray-700 hover:bg-slate-100" onclick="openCity(event, 'seragam')">
                                Seragam
                            </button>
                        </li>
                        <li class="w-full" role="presentation">
                            <button class="tablinks inline-block border-t-2 border-space-buttonungu py-2 lg:py-8 w-full text-base text-center text-gray-400 hover:text-gray-700 hover:bg-slate-100" onclick="openCity(event, 'jadwal')">
                                Jadwal
                            </button>
                        </li>
                        <li class="w-full" role="presentation">
                            <button class="tablinks inline-block border-t-2 border-space-buttonungu py-2 lg:py-8 w-full text-base text-center text-gray-400 hover:text-gray-700 hover:bg-slate-100" onclick="openCity(event, 'tugas')">
                                Tugas
                            </button>
                        </li>
                    </ul>
                </div>


                <div>
                    <div id="pengenalan" class="tabcontent">
                        @include('components.informasi.kegiatan.pengenalan')
                    </div>

                    <div id="pedoman" class="tabcontent">
                        @include('components.informasi.kegiatan.pedoman')
                    </div>

                    <div id="seragam" class="tabcontent">
                        @include('components.informasi.kegiatan.seragam')
                    </div>

                    <div id="jadwal" class="tabcontent">
                        @include('components.informasi.kegiatan.jadwal')
                    </div>

                    <div id="tugas" class="tabcontent">
                        @include('components.informasi.kegiatan.tugas')
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <!--Tab Section Start-->
    {{-- <section class="min-h-screen px-10 py-[100px]">
        <div class="items-center" id="tabs-id">
            <div class="container mx-auto">
                <ul class="lg:flex mb-0 list-none pt-3 pb-4 lg:flex-row grid grid-rows-4 sm:container justify-center items-center mx-auto lg:px-[384px]">
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-white bg-[#33458F] rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Visi Misi')">
                            Visi Misi
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-white bg-[#33458F] rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Pengenalan')">
                            Pengenalan
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-[#33458F] bg-white rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Pedoman')">
                            Pedoman
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-[#33458F] bg-white rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Seragam')">
                            Seragam
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-[#33458F] bg-white rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Jadwal')">
                            Jadwal
                        </a>
                    </li>
                    <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
                        <a class="text-xs font-bold uppercase px-5 py-1 block leading-normal text-[#33458F] bg-white rounded-[100px] text-center" onclick="changeAtiveTab(event,'tab-Tugas')">
                            Tugas
                        </a>
                    </li>
                </ul>

                <div class="flex flex-col min-w-0 break-words w-full mb-6">
                    <div class="flex-auto">
                        <div class="tab-content tab-space">
                        <div class="block" id="tab-Visi Misi">
                            <div class="--segmented-content bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-5xl text-4xl font-bold uppercase" style="color: #444444 !important;">Visi
                                    Misi</h1>
                                <h1 class="md:text-5xl text-4xl font-bold uppercase mt-3" style="color: #444444 !important;">
                                    Universitas narotama</h1>
                                <div class="--underlined"></div>
                            </div>
                            <div class="container lg:mt-5 mt-7">
                                <h3 class="md:text-4xl text-3xl font-bold uppercase md:text-left text-center">
                                    Visi</h3>
                                <div class="md:ml-1 mx-auto" style="width: 64px;height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-7 mt-9">
                                    <p class="text-3xl text-grey" style="font-weight: lighter">Terwujudnya Universitas yang
                                        Modern dan
                                        Bermutu berbasis Teknologi Informasi dan Komunikasi pada tahun 2025.</p>
                                </div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold uppercase  md:text-left text-center">
                                    MISI</h3>
                                <div class="md:ml-1 mx-auto" style="width: 64px;height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-7 mt-9">
                                    <p class="text-3xl text-grey" style="font-weight: lighter">Memberikan kontribusi nyata dalam
                                        pengembangan ilmu pengetahuan dan teknologi sesuai dengan perkembangan zaman melalui,
                                        kegiatan pendidikan, penelitian, dan pengabdian kepada masyarakat yang bermutu dan
                                        berdaya
                                        saing global dengan memanfaatkan teknologi informasi dan komunikasi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="--segmented-content mt-10 bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-5xl text-4xl font-bold uppercase" style="color: #444444 !important;">Visi
                                    Misi</h1>
                                <h1 class="md:text-5xl text-4xl font-bold uppercase mt-3" style="color: #444444 !important;">
                                    Fakultas</h1>
                                <div class="--underlined"></div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold  md:text-left text-center">Fakultas Ekonomi &
                                    Bisnis</h3>
                                <div class="md:ml-4 mx-auto w-2/6" style="height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-5 mt-7">
                                    <a href="https://narotama.ac.id/profil-feb" target="_blank"
                                        class="text-3xl text-grey underline" style="font-weight: lighter">https://narotama.ac.id/profil-feb</a>
                                </div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold md:text-left text-center">Fakultas
                                    Hukum</h3>
                                <div class="md:ml-9 mx-auto w-1/6" style="height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-5 mt-7">
                                    <a href="https://narotama.ac.id/profil-fh" target="_blank"
                                        class="text-3xl text-grey underline" style="font-weight: lighter">https://narotama.ac.id/profil-fh</a>
                                </div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold md:text-left text-center">Fakultas Teknik
                                    Sipil
                                </h3>
                                <div class="md:ml-5 mx-auto w-1/6" style="height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-5 mt-7">
                                    <a href="https://narotama.ac.id/s1-teknik-sipil" target="_blank"
                                        class="text-3xl text-grey underline" style="font-weight: lighter">https://narotama.ac.id/s1-teknik-sipil</a>
                                </div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold  md:text-left text-center">Fakultas Ilmu
                                    Komputer</h3>
                                <div class="md:ml-0 mx-auto w-4/12" style="height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-5 mt-7">
                                    <a href="https://narotama.ac.id/profil-fasilkom" target="_blank"
                                        class="text-3xl text-grey underline" style="font-weight: lighter">https://narotama.ac.id/profil-fasilkom</a>
                                </div>
                            </div>
                            <div class="container lg:mt-10 mt-14">
                                <h3 class="md:text-4xl text-3xl font-bold md:text-left text-center">Fakultas Keguruan
                                    dan Ilmu Pendidikan</h3>
                                <div class="md:ml-8 mx-auto w-3/6" style="height: 0px;border: 1px solid black;"></div>
                                <div class="lg:mt-5 mt-7">
                                    <a href="https://narotama.ac.id/s1-pg-paud" target="_blank"
                                        class="text-3xl text-grey underline" style="font-weight: lighter">https://narotama.ac.id/s1-pg-paud</a>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="hidden" id="tab-Pedoman">
                            <div>Pedoman</div>
                        </div>
                        <div class="hidden" id="tab-Seragam">
                            <div>Seragam</div>
                        </div>
                        <div class="hidden" id="tab-Tugas">
                            <div class="--segmented-content mt-10 bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-2xl text-xl font-bold uppercase" style="color: #444444 !important;">Tugas
                                    Individu</h1>
                            </div>
                            <div class="container lg:mt-5 mt-7 w-full md:w-1/2 mx-auto">
                                <ul class="list-disc">
                                    <li>
                                        <p>Menghafalkan MARS Narotama
                                            <a class="font-bold" target="_blank"
                                                href="https://www.youtube.com/watch?v=A5dB8j5IWDI">https://www.youtube.com/watch?v=A5dB8j5IWDI</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            Menghafalkan HYMNE Narotama
                                            <a class="font-bold" target="_blank"
                                                href="https://www.youtube.com/watch?v=8h5HCz-qlUE">https://www.youtube.com/watch?v=8h5HCz-qlUE</a>
                                        </p>
                                    </li>
                                    <li>
                                        <p>Visi dan Misi Narotama</p>
                                    </li>
                                    <li>
                                        <p>Visi dan Misi Program Studi masing-masing</p>
                                    </li>
                                    <li>
                                        <p>Wajib Follow dan Like Instagram Official Acccount
                                            <a class="font-bold" target="_blank"
                                                href="https://www.instagram.com/univ.narotamasby/">@univ.narotamasby</a>,
                                            <a class="font-bold" target="_blank"
                                                href="https://www.instagram.com/kemahasiswaan.univnarotama/">@kemahasiswaan.univnarotama</a>
                                            ,
                                            <a class="font-bold" target="_blank"
                                                href="https://www.instagram.com/pkkmb_narotama/">@pkkmb_narotama</a></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10">
                                <p><span style="color: red; font-weight: bold;">Catatan</span>: Untuk detail tugas bisa dilihat
                                    di buku pedoman</p>
                            </div>
                        </div>
                        <div class="--segmented-content mt-10 bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-2xl text-xl font-bold uppercase" style="color: #444444 !important;">Tugas
                                    Rabu, 22 September 2021</h1>
                            </div>
                            <div class="container lg:mt-5 mt-7 w-full md:w-1/2 mx-auto">
                                <ul class="list-disc">
                                    <li>
                                        <p>Mengunggah Twibbon</p>
                                        <div class="w-full md:w-1/2 mx-auto">
                                            <img src="/assets/twibbon/twibbon-1-example.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <p>Video Orasi Ilmiah</p>
                                    </li>
                                    <li>
                                        <p>Video Perkenalan Anggota Kelompok</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-wrap justify-center mt-10">
                                <a class="bg-[#F89D08] text-white px-3 py-1 rounded-md text-center" target="_blank" download
                                    href="/assets/twibbon/twibbon-1.png">Download Twibbon Hari Rabu</a>
                            </div>
        
                            <div class="mt-10">
                                <p><span style="color: red; font-weight: bold;">Catatan</span>: Untuk detail tugas bisa dilihat
                                    di buku pedoman</p>
                            </div>
                        </div>
                        <div class="--segmented-content mt-10 bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-2xl text-xl font-bold uppercase" style="color: #444444 !important;">Tugas
                                    Kamis, 23 September 2021</h1>
                            </div>
                            <div class="container lg:mt-5 mt-7 w-full md:w-1/2 mx-auto">
                                <ul class="list-disc">
                                    <li>
                                        <p>Mengunggah Twibbon</p>
                                        <div class="w-full md:w-1/2 mx-auto">
                                            <img src="/assets/twibbon/twibbon-2-example.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <p>Video Tanam Menanam</p>
                                    </li>
                                    <li>
                                        <p>Video Kampanye Hidup Sehat</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-wrap justify-center mt-10">
                                <a class="bg-[#F89D08] text-white px-3 py-1 rounded-md text-center" target="_blank" download
                                    href="/assets/twibbon/twibbon-2.png">Download Twibbon Hari Kamis</a>
                            </div>
        
                            <div class="mt-10">
                                <p><span style="color: red; font-weight: bold;">Catatan</span>: Untuk detail tugas bisa dilihat
                                    di buku pedoman</p>
                            </div>
                        </div>
                        <div class="--segmented-content mt-10 bg-[#F3F5FA] py-10 rounded-lg lg:px-20">
                            <div class="text-center">
                                <h1 class="md:text-2xl text-xl font-bold uppercase" style="color: #444444 !important;">Tugas
                                    Jum'at, 24 September 2021</h1>
                            </div>
                            <div class="container lg:mt-5 mt-7 w-full md:w-1/2 mx-auto">
                                <ul class="list-disc">
                                    <li>
                                        <p>Mengunggah Twibbon</p>
                                        <div class="w-full md:w-1/2 mx-auto">
                                            <img src="/assets/twibbon/twibbon-3-example.jpg" alt="">
                                        </div>
                                    </li>
                                    <li>
                                        <p>Video Vlog Mengikuti Pekan PKKMB</p>
                                    </li>
                                    <li>
                                        <p>Membuat Esai</p>
                                    </li>
                                    <li>
                                        <p>Laporan Narotama Berbagi</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-wrap justify-center mt-10">
                                <a class=" bg-[#F89D08] text-white px-3 py-1 rounded-md text-center" target="_blank" download
                                    href="/assets/twibbon/twibbon-3.png">Download Twibbon Hari Jum'at</a>
                            </div>
        
                            <div class="mt-10">
                                <p><span style="color: red; font-weight: bold;">Catatan</span>: Untuk detail tugas bisa dilihat
                                    di buku pedoman</p>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
          function changeAtiveTab(event,tabID){
            let element = event.target;
            while(element.nodeName !== "A"){
              element = element.parentNode;
            }
            ulElement = element.parentNode.parentNode;
            aElements = ulElement.querySelectorAll("li > a");
            tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
            for(let i = 0 ; i < aElements.length; i++){
              aElements[i].classList.remove("text-white");
              aElements[i].classList.remove("bg-[#33458F]");
              aElements[i].classList.add("text-[#33458F]");
              aElements[i].classList.add("bg-white");
              tabContents[i].classList.add("hidden");
              tabContents[i].classList.remove("block");
            }
            element.classList.remove("text-[#33458F]");
            element.classList.remove("bg-white");
            element.classList.add("text-white");
            element.classList.add("bg-[#33458F]");
            document.getElementById(tabID).classList.remove("hidden");
            document.getElementById(tabID).classList.add("block");
          }
        </script>
    </section> --}}
    <!--Tab Section End-->
@endsection

@push('javascript')
@endpush