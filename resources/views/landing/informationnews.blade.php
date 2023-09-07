@extends('layouts.landing.base')

@section('content')
    <section class="w-full bg-space-back pt-10 lg:pt-36 px-6 lg:px-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            
            <a href="{{ route('detail-informasi-berita') }}" class="overflow-hidden inline-block transform transition-all hover:-translate-y-2 duration-300" target="_blank">
                <img class="object-cover mb-5" src="{{ asset('/src/img/testnews.jpeg') }}" alt="thumbnail">

                <div class="px-4">
                    <h2 class="font-normal text-xs lg:text-sm text-slate-400 mb-2">
                        17 Agustus 2023{{-- {{ $item->created_at ? $item->created_at->format('d-m-Y') : '' }} --}}
                    </h2>
    
                    <h1 class="uppercase font-semibold text-white text-justify hover:text-space-textungu text-xl mb-2">
                        Kita coba dulu untuk beritanya : Ini adalah judul berita 1{{-- {{ $item->title ?? '' }} --}}
                    </h1>
                    
                    <p class="font-normal text-sm text-slate-400 mb-20 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempore tempora omnis rem nemo maxime porro dolorem minima iure adipisci possimus dolores rerum est, nam recusandae alias hic impedit mollitia expedita in veniam ea pariatur distinctio quas. Quasi, dolorum similique.
                    </p>
                </div>
            </a>

            <a href="{{ route('detail-informasi-berita') }}" class="overflow-hidden inline-block transform transition-all hover:-translate-y-2 duration-300" target="_blank">
                <img class="object-cover mb-5" src="{{ asset('/src/img/testnews.jpeg') }}" alt="thumbnail">

                <div class="px-4">
                    <h2 class="font-normal text-xs lg:text-sm text-slate-400 mb-2">
                        17 Agustus 2023{{-- {{ $item->created_at ? $item->created_at->format('d-m-Y') : '' }} --}}
                    </h2>
    
                    <h1 class="uppercase font-semibold text-white text-justify hover:text-space-textungu text-xl mb-2">
                        Kita coba dulu untuk beritanya : Ini adalah judul berita 1{{-- {{ $item->title ?? '' }} --}}
                    </h1>
                    
                    <p class="font-normal text-sm text-slate-400 mb-20 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempore tempora omnis rem nemo maxime porro dolorem minima iure adipisci possimus dolores rerum est, nam recusandae alias hic impedit mollitia expedita in veniam ea pariatur distinctio quas. Quasi, dolorum similique.
                    </p>
                </div>
            </a>

            <a href="{{ route('detail-informasi-berita') }}" class="overflow-hidden inline-block transform transition-all hover:-translate-y-2 duration-300" target="_blank">
                <img class="object-cover mb-5" src="{{ asset('/src/img/testnews.jpeg') }}" alt="thumbnail">

                <div class="px-4">
                    <h2 class="font-normal text-xs lg:text-sm text-slate-400 mb-2">
                        17 Agustus 2023{{-- {{ $item->created_at ? $item->created_at->format('d-m-Y') : '' }} --}}
                    </h2>
    
                    <h1 class="uppercase font-semibold text-white text-justify hover:text-space-textungu text-xl mb-2">
                        Kita coba dulu untuk beritanya : Ini adalah judul berita 1{{-- {{ $item->title ?? '' }} --}}
                    </h1>
                    
                    <p class="font-normal text-sm text-slate-400 mb-20 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempore tempora omnis rem nemo maxime porro dolorem minima iure adipisci possimus dolores rerum est, nam recusandae alias hic impedit mollitia expedita in veniam ea pariatur distinctio quas. Quasi, dolorum similique.
                    </p>
                </div>
            </a>

            <a href="{{ route('detail-informasi-berita') }}" class="overflow-hidden inline-block transform transition-all hover:-translate-y-2 duration-300" target="_blank">
                <img class="object-cover mb-5" src="{{ asset('/src/img/testnews.jpeg') }}" alt="thumbnail">

                <div class="px-4">
                    <h2 class="font-normal text-xs lg:text-sm text-slate-400 mb-2">
                        17 Agustus 2023{{-- {{ $item->created_at ? $item->created_at->format('d-m-Y') : '' }} --}}
                    </h2>
    
                    <h1 class="uppercase font-semibold text-white text-justify hover:text-space-textungu text-xl mb-2">
                        Kita coba dulu untuk beritanya : Ini adalah judul berita 1{{-- {{ $item->title ?? '' }} --}}
                    </h1>
                    
                    <p class="font-normal text-sm text-slate-400 mb-20 text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque tempore tempora omnis rem nemo maxime porro dolorem minima iure adipisci possimus dolores rerum est, nam recusandae alias hic impedit mollitia expedita in veniam ea pariatur distinctio quas. Quasi, dolorum similique.
                    </p>
                </div>
            </a>

        </div>
    </section>
@endsection