@extends('layouts.landing.base')

@section('content')
<section class=" bg-[url('https://i.ibb.co/64JkD61/fotoregistrasi.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
        <div class="w-full bg-white rounded-lg shadow-lg dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 pt-10 px-5">
                <img class="" src="../../../src/img/PKKMB 1.png" alt="logo">    
            </a>
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                @include('partials.loginalerts')
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Silahkan Masuk
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{ route('auth.login') }}" method="POST">
                    @csrf
                    <div>
                        <label for="nim" class="block mb-2 text-sm font-medium text-gray-900 ">NIM</label>
                        <input type="number" name="nim" id="nim" class="peer bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('nim') focus:ring-red-600 focus:border-red-600 border-red-600  @enderror" placeholder="NIM" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="peer bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 @error('password') focus:ring-red-600 focus:border-red-600 border-red-600  @enderror" required="">
                    </div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Masuk</button>
                    <a type="button" class="w-full text-gray-500 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')
<script type="module" src="{{ asset('js/auth/login.js') }}"></script>
@endpush