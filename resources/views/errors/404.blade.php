@extends('layouts.landing.base')

@section('content')
<section id="error" class="z-50 bg-slate-200">
    <div class="container px-0">
        <div class="pt-36 pb-8 min-h-screen">
            <div class="w-full px-4 mt-10">
                <div class="flex mb-10 items-center justify-center">
                    <img src="{{ asset('/assets/images/error/sorry_1.png') }}" alt="Sorry Bird" class="w-40">
                </div>
            </div>

            <div class="w-full px-4">
                <div class="max-w-2xl mx-auto text-center mb-14 ">
                    <h2 class="font-bold text-xl mb-5 lg:text-2xl ">404</h2>
                    <h2 class="font-bold text-xl mb-5 lg:text-2xl ">Mohon maaf halaman ini tidak tersedia</h2>
                    <a href="{{ route('index-landing') }}" class="font-medium text-xs text-white bg-purple-500 py-3 px-4 mb-4 rounded-md hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">
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