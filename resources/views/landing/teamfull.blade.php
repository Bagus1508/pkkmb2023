@extends('layouts.landing.base')

@section('content')
    <section id="panitia" class="w-full bg-space-back flex flex-col items-center">
        <div class="px-64">
            <div id="title_panitia" class="flex flex-col text-center pt-32 px-16 pb-5 border-b-4">
                <h1 class="text-5xl text-space-textungu font-extrabold mb-2">KEPANITIAN PKKMB</h1>
                <h2 class="text-5xl text-space-textungu font-extrabold mb-2">UNIVERSITAS NAROTAMA</h2>
                <h2 class="text-5xl text-space-textungu font-extrabold mb-5">TAHUN 2023</h2>
            </div>
        </div>
        
        <div class="pt-20 px-10 w-full flex flex-col lg:flex-row lg:flex-wrap items-center text-center mb-20">
            <a id="pak_tahegga" href="{{ url('https://www.instagram.com/taheggaalfath/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5 " target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/1.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Tahegga Primananda Alfath, S.H., M.H.
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Ketua Panitia Pengarah
                    </h2>
                    
                </div>
            </a>
        
            <a id="pak_chandra" href="{{ url('https://www.instagram.com/achan_id/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/2.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ade Chandra Kurnia Purwanto, S.Kom.
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Panitia Pengarah Universitas
                    </h2>
                    
                </div>
            </a>
        
            <a id="pak_deny" href="{{ url('https://www.instagram.com/denny_setiawan24/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/3.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Deny Setiawan, S.Kom.
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Panitia Pengarah Universitas
                    </h2>
                    
                </div>
            </a>
        
            <a id="mas_pandu" href="{{ url('https://www.instagram.com/ardhyapan/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/4.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ardhya Pandu Pratama, S.Kom.
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Panitia Pengarah Universitas
                    </h2>
                    
                </div>
            </a>
        
            <a id="fredy" href="{{ url('https://www.instagram.com/fredypradanapu2/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/8.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Fredy Pradana Putra
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Panitia Pengarah Mahasiswa
                    </h2>
                    
                </div>
            </a>
        
            <a id="vanessca" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/6.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Vanessca Vindy Audina Prayogo
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Panitia Pengarah Mahasiswa
                    </h2>
                    
                </div>
            </a>

            <a id="david" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/5.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Moch. David Herdiansyah
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Panitia Pengarah Mahasiswa
                    </h2>
                    
                </div>
            </a>

            <a id="ilda" href="{{ url('https://www.instagram.com/ildannisa') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/7.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ilda Annisa Afifah
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Ketua Pelaksana
                    </h2>
                    
                </div>
            </a>

            <a id="nabila" href="{{ url('https://www.instagram.com/nabilasandyy') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/9.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Nabila Sandy Sinta
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Kesekretariatan
                    </h2>
                    
                </div>
            </a>

            <a id="dewa" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/10.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Dewa Ramadhan
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Kesekretariatan
                    </h2>
                    
                </div>
            </a>

            <a id="juliana" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/11.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Juliana Fitria
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Kesekretariatan
                    </h2>
                    
                </div>
            </a>

            <a id="recky" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/12.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Recky Febryansyah Herlambang
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Kesekretariatan
                    </h2>
                    
                </div>
            </a>

            <a id="syaiful" href="{{ url('https://www.instagram.com/muha_mmsyaiful') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/14.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Muhammad Syaiful
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Div. Acara dan Kreatif
                    </h2>
                    
                </div>
            </a>

            <a id="yusuf" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/16.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Muhammad yusuf Rizqi Zulkarnain
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Acara dan Kreatif
                    </h2>
                    
                </div>
            </a>

            <a id="redita" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/13.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Redita Eny Agustin
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Acara dan Kreatif
                    </h2>
                    
                </div>
            </a>

            <a id="ilham" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/17.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ilham Taufik Kurrochim
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Acara dan Kreatif
                    </h2>
                    
                </div>
            </a>

            <a id="raehan" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/15.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Raehan Nova Pratama
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Acara dan Kreatif
                    </h2>
                    
                </div>
            </a>

            <a id="mervinda" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/18.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Mervinda Lastin Suchrodi
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Div. Humas dan Danus
                    </h2>
                    
                </div>
            </a>

            <a id="syifa" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/20.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Fadilatus Syifa
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Humas dan Danus
                    </h2>
                    
                </div>
            </a>

            <a id="madiro" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/19.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Maslakhatul Ma'diro
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Humas dan Danus
                    </h2>
                    
                </div>
            </a>

            <a id="hafizo" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/27.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Hafizo Fahrezi Setiono Putra
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Div. DokumentasiTI
                    </h2>
                    
                </div>
            </a>

            <a id="selviana" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/29.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Selviana Putri
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. DokumentasiTI
                    </h2>
                    
                </div>
            </a>

            <a id="irsyadulloh" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/28.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Irsyadulloh Ramadhan B.N
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. DokumentasiTI
                    </h2>
                    
                </div>
            </a>

            <a id="dea" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/31.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Dea Rinita Dewi
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. DokumentasiTI
                    </h2>
                    
                </div>
            </a>

            <a id="indra" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/30.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Indra Wira
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. DokumentasiTI
                    </h2>
                    
                </div>
            </a>

            <a id="ervan" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/21.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ervan Muhammad Marianto
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="ruhul" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/25.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ruhul Jihad Al islamy
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="sofi" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/24.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Muhammad Sofi
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="yusron" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/26.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Yusron Rafif Rangga Izdihar Zaidan
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="adinda" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/22.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Adinda Putri Aprilia
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="nilasari" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/23.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Nilasari Eka Ambarwati
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Perlengkapan dan Kesehatan
                    </h2>
                    
                </div>
            </a>

            <a id="saznaini" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/32.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Saznaini Ahsanti
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Koordinator Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="devi" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/44.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Devi Pratiwi
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="alya" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/43.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Alya Marshanda
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="ezza" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/38.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ezza Wahyu Indrianto
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="prasasti" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/36.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Prasasti Hadi Kusuma Wardani
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="safa" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/33.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Safa Sarah Azizah
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="intan" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/39.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Intan Herida
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="toti" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/45.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Toti Valentino Putra
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="dian" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/42.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Dian Ayu Permata
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="safina" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/37.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Safina Rahma
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="barru" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/46.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Barru Aliyyu Nissa Ismanto
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="ghyfanny" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/34.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Ghyfanny Ferdiansyah
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="laili" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/41.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Laili Ayu Safitri
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="tiara" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/40.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Tiara Stevany Gabryela Artamevia
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="shinta" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/35.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Shinta Damayanti
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>

            <a id="nelson" href="{{ url('https://www.instagram.com/') }}" class="inline-block px-3 mb-5 lg:mb-0 lg:mt-5" target="_blank">
                <div class="w-64 lg:w-44 h-[420px] lg:h-80 bg-slate-200 hover:bg-space-textungu rounded-full shadow-xl overflow-hidden transform transition-all hover:-translate-y-2 duration-300 flex flex-col items-center pt-2">
            
                    <img src="{{ asset('/src/img/Panitia/47.png') }}" alt="placeholder" class="rounded-full h-60 lg:h-40 w-60 lg:w-40 mb-3">
            
                    <!--Title and Date-->
                    <h1 class="font-bold text-space-back text-2xl lg:text-base mb-3">
                        Nelson Rizky Pradana Maulidio
                    </h1>
                    <h2 class="font-normal text-slate-600 text-base lg:text-sm flex flex-wrap">
                        Anggota Div. Naradamping
                    </h2>
                    
                </div>
            </a>
        </div>
    </section>
@endsection