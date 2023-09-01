<nav class="absolute bg-transparent w-full items-center z-40">
    <div class="container w-full px-2 lg:px-4 items-center">
        <div class="flex justify-center">
            
            <div class="flex">
                <div class="hidden justify-between w-full md:flex md:w-auto md:order-1 items-center space-x-1">
                    <a href="{{ route('index-landing') }}" class="block {{ request()->is('/') ? 'pt-8 pb-1 px-2 text-white font-sans font-bold hover:text-gray-300 border-b-2 border-white hover:border-gray-300 transition duration-300' : 'pt-8 pb-1 px-2 text-white font-sans font-normal hover:text-gray-300 hover:border-b-2 hover:border-gray-300 transition duration-300' }}">Beranda</a>
                    <a href="{{ route('informasi-landing') }}" class="block {{ request()->is('informasi', 'informasi/berita', 'informasi/kegiatan', 'informasi/pengumuman') ? 'pt-8 pb-1 px-2 text-white font-sans font-bold hover:text-gray-300 border-b-2 border-white hover:border-gray-300 transition duration-300' : 'pt-8 pb-1 px-2 text-white font-sans font-normal hover:text-gray-300 hover:border-b-2 hover:border-gray-300 transition duration-300' }}">Informasi</a>
                    <a href="{{ route('home-presences.indexuserdashboard') }}" class="block {{ request()->is('login') ? 'pt-8 pb-1 px-2 text-white font-sans font-bold hover:text-gray-300 border-b-2 border-white hover:border-gray-300 transition duration-300' : 'pt-8 pb-1 px-2 text-white font-sans font-normal hover:text-gray-300 hover:border-b-2 hover:border-gray-300 transition duration-300' }}">Dashboard</a>
                </div>
            </div>
            
            <div class="lg:hidden flex items-center">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 mobile-menu-button">
                    <span class="hamburger-line transision duration-300 ease-in-out  origin-bottom-left"></span>
                    <span class="hamburger-line transision duration-300 ease-in-out"></span>
                    <span class="hamburger-line transision duration-300 ease-in-out origin-bottom-left"></span>
                </button>
            </div>
        </div>
    </div>

    
    <div class="hidden mobile-menu">
        <ul>
            <li><a href="{{ route('index-landing') }}" class="block {{ request()->is('/') ? 'text-sm px-2 py-4 font-sans font-normal text-white bg-primary hover:bg-orange-300 transition duration-500' : 'text-sm px-2 py-4 font-sans font-normal text-gray-600 hover:text-white hover:bg-orange-300 transition duration-500' }}">Beranda</a></li>
            <li><a href="{{ route('informasi-landing') }}" class="block {{ request()->is('informasi') ? 'text-sm px-2 py-4 font-sans font-normal text-white bg-primary hover:bg-orange-300 transition duration-500' : 'text-sm px-2 py-4 font-sans font-normal text-gray-600 hover:text-white hover:bg-orange-300 transition duration-500' }}">Informasi</a></li>
            <li><a href="{{ route('home-presences.indexuserdashboard') }}" class="block {{ request()->is('login') ? 'text-sm px-2 py-4 font-sans font-normal text-white bg-primary hover:bg-orange-300 transition duration-500' : 'text-sm px-2 py-4 font-sans font-normal text-gray-600 hover:text-white hover:bg-orange-300 transition duration-500' }}">Dashboard</a></li>
        </ul>
    </div>
    
    {{-- <div class="w-full container mx-auto flex flex-wrap items-center mt-0 py-2 h-1/5">
        <div class="pl-4 flex items-center">
            <a class="absolute z-50 lg:w-2/12 w-4/12" href="/home">
                <img src="../src/img/logo/logo.png" alt="logopkkmb" class="">
            </a>
        </div>
        <div class="block lg:hidden pr-4 ml-auto">
            <button id="nav-toggle" href="/home"
               class="flex items-center p-1 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">

                <svg class="fill-current h-6 w-6 bg-primary" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
            </button>
        </div>
        <div
            class="w-full flex-grow lg:flex lg:items-center
             lg:w-auto hidden mt-5 lg:mt-0 bg-white lg:bg-transparent p-4 lg:p-0 z-20 ml-0 md:ml-80"
            id="nav-content">
            <ul class="list-reset lg:flex justify-center flex-1 items-center mx-auto">
                <li class="mr-3 lg:inline-flex block">
                    @php
                        use Illuminate\Support\Facades\URL;
                    @endphp
                    <a class="lg:inline-block flex py-2 px-4 text-[#FFC484] font-bold no-underline hover:text-orange-500 {{ URL::current() === url('/') ? 'text-orange-500 border-orange-500 border-b-4':'' }}" href="{{ route('index-landing') }}">Home</a>
                    <a class="lg:inline-block flex py-2 px-4 text-[#FFC484] font-bold no-underline hover:text-orange-500 {{ URL::current() === url('/informasi') ? 'text-orange-500 border-orange-500 border-b-4':'' }}" href="{{ route('informasi-landing') }}">Informasi</a>
                    <a class="lg:inline-block flex py-2 px-4 text-[#FFC484] font-bold no-underline hover:text-orange-500 {{ URL::current() === url('/pengumuman') ? 'text-orange-500 border-orange-500 border-b-4':'' }}" href="{{ route('pengumuman-landing') }}">Pengumuman</a>
                </li>
            </ul>
        </div>
        <div
            class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-5 lg:mt-0 bg-white lg:bg-transparent p-4 lg:p-0 z-20"
            id="nav-content">
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
                <li class="mr-3 lg:inline-flex block">
                    @auth
                    <a href="/dashboard" class="px-[32px] py-1 bg-blue-500 hover:bg-blue-600 text-white rounded-[100px] mx-2">Dashboard</a>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="px-[32px] py-1 bg-gray-200 hover:bg-gray-300 text-gray-500 rounded-[100px] mx-2">Logout</button>
                    </form>
                        @else
                        <a href="/login" class="px-[32px] py-1 bg-[#F89D08] hover:bg-[#FFC484] text-white rounded-[100px]">Login</a>
                    @endauth
                </li>
            </ul>
        </div>
    </div> --}}
</nav>
