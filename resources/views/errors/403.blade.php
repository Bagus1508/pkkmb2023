@extends('layouts.landing.base')
{{-- 403 --}}
@section('content')
<section id="error" class="z-50 bg-slate-200">
    <div class="container px-0">
        <div class="pt-36 pb-8 min-h-screen">
            <div class="w-full px-4">
                <div class="flex mb-10 items-center justify-center">
                    <img src="{{ asset('/assets/images/error/sorry_1.png') }}" alt="Sorry Bird" class="w-40">
                </div>
            </div>

            <div class="w-full px-4">
                <div class="max-w-2xl mx-auto text-center mb-14 ">
                    <h2 class="font-bold text-xl mb-5 lg:text-2xl ">Mohon Maaf Kak {{ auth()->user()->name }} Tidak Bisa Mengakses Halaman Ini</h2>
                    <p class="font-normal text-xs text-secondary lg:text-sm ">Akun yang kakak miliki tidak dapat mengakses pada halaman ini</p>
                    <p class="font-normal text-xs mb-10 text-secondary lg:text-sm ">Dikarenakan akun tidak memiliki hak akses tersebut</p>
                    <a href="{{ route('home-presences.indexuserdashboard') }}" class="font-medium text-xs text-white bg-blue-500 py-3 px-4 mb-4 rounded-md hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">
                        Kembali Ke Halaman Utama
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
@endpush