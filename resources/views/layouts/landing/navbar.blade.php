<nav id="header" class="w-full z-20 top-0 py-5 shadow-md">
    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 py-2 h-1/5">
        <div class="pl-4 flex items-center">
            <a class="absolute z-50 lg:w-2/12 w-4/12" href="/">
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
    </div>
</nav>
