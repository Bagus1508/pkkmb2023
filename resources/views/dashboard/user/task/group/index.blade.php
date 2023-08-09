@extends('layouts.dashboard.app')

@section('content')
<div class="bg-fixed rounded-xl lg:px-20 px-5 py-10" style="background-image: url('/src/img/svg/bg/flat-mountains.svg')">
    <div class="container py-[100px] lg:px-20 rounded-2xl bg-white shadow-lg">
        <div class="container flex items-center justify-center mx-auto bg-white rounded-[43px]">
            <div class="items-center text-center">
                <div class="pb-5 container mx-auto">
                    <div class="font-bold text-2xl">
                    <h1 class="mb-4 font-poppins font-extrabold text-[38px] lg:text-[64px] text-[#33458F]">
                        TUGAS KELOMPOK
                    </h1>
                    </div>
                    <img src="../../../../src/img/PKKMB 1.png" title="PKKMB 1.png" class="container mx-auto w-1/2 h-1/2 border-b-8 border-[#FF9B2F]"/>
                </div>
            </div>
        </div>
        <form class="container px-10 lg:mx-auto">
            <div class="relative z-0 w-full mb-6 group">
                <label for="NIM" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
                <input type="text" name="floating_name" id="floating_name" class="block py-2.5  w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none px-3" placeholder="{{ auth()->user()->nim }}" required disabled />
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="Nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                <input type="text" name="floating_nim" id="floating_nim" class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none px-3" placeholder="{{ auth()->user()->name }}" required disabled />
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label for="Prodi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
                <input type="text" name="major" id="floating_major" class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none px-3" placeholder="{{ auth()->user()->prodi }}" disabled/>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-6 group">
                    <label for="Fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fakultas</label>
                    <input type="text" name="floating_faculty" id="floating_faculty" class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none px-3" placeholder="{{ auth()->user()->fakultas }}" disabled/>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <label for="Kelompok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelompok</label>
                    <input type="text" name="floating_group" id="floating_group" class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none px-3" placeholder="{{ auth()->user()->kelompok }}" disabled/>
                </div>
            </div>
            <div class="mb-6">
                <label for="Jawaban" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jawaban</label>
                <textarea id="Jawaban" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jawaban"></textarea>
            </div>
            <div class="mb-6"> 
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload file</label>
                <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="user_avatar" type="file">
                <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="inputtypefile">jpg/pdf/png/mp4</div>
            </div>
            <div class="justify-end items-end flex mx-auto">
                <a type="button" href="{{ route('dashboard-user.taskindex') }}" class="text-gray-500 bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mt-6 text-center nx-2">Kembali</a>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 mt-6 text-center mx-2">Submit</button>
            </div>  
        </form>      
    <div>
</div>
@endsection

@push('js')
@endpush