@extends('layouts.dashboard.app')

@section('content')            
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto lg:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-6 mb-5 text-2xl font-semibold text-gray-700">
                        Data Pelanggaran Peserta
                    </h2>
                    <p class="text-sm text-gray-400">
                        {{-- Total {{ count($peserta) }} Peserta --}}
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-blue-500 text-white w-full px-14 py-10 rounded-xl">
            <table>
                <tr>
                    <td class="w-2/12">NIM</td>
                    <td class="w-3.5">:</td>
                    <td class="">Test</td>
                </tr>
                <tr>
                    <td class="w-2/12">Nama</td>
                    <td class="w-3.5">:</td>
                    <td class="">Test</td>
                </tr>
                <tr>
                    <td class="w-2/12">Kelompok</td>
                    <td class="w-3.5">:</td>
                    <td class="">Test</td>
                </tr>
                <tr>
                    <td class="w-2/12">Fakultas</td>
                    <td class="w-3.5">:</td>
                    <td class="">Test</td>
                </tr>
                <tr>
                    <td class="w-2/12">Program Studi</td>
                    <td class="w-3.5">:</td>
                    <td class="">Test</td>
                </tr>
            </table>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 lg:grid-cols-12">
                <main class="col-span-12 p-4 lg:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-lg">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope="">Pelanggaran</th>
                                    <th class="py-4" scope="">Tanggal</th>
                                    <th class="py-4" scope="">Poin</th>
                                    <th class="py-4" scope="">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody class="bg-white">
                                {{-- @if (count($pelanggarann)) --}}

                                    @forelse ($pelanggarann as $key => $pelanggaran)
                                        <tr class="text-gray-700 border-b">
                                            <td class="">
                                                {{ $key + 1 }}
                                            </td>
                                            <td class="px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div>
                                                        <h2 class="font-medium text-black">
                                                            {{ ucfirst($pelanggaran->title ?? '') }}
                                                        </h2>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="w-6/12 px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div>
                                                        <h2 class="font-medium text-black">
                                                            {{ $pelanggaran->created_at ? $pelanggaran->created_at->translatedFormat('l, j F Y') : '' }}
                                                        </h2>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-1 py-5">
                                                <div class="flex items-center text-sm">
                                                    <div>
                                                        <h2 class="font-medium text-black">
                                                            {{ $pelanggaran->poin ?? '' }}
                                                        </h2>
                                                        {{-- @if ($ketentuan->jenis_ketentuan_id == $ketentuan->ketentuan->jenisketentuan->id) --}}
                                                        {{-- @if ($ketentuan->jenis_ketentuan_id)
                                                            <h2 class="font-medium text-black">
                                                                {{ ucfirst($ketentuan->jenisketentuan->name ?? '') }}
                                                            </h2>
                                                        @endif --}}
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            {{-- <td class="px-0">
                                                <form action="{{ route('admin.pelanggaran.destroy', $pelanggaran['id']) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                                                            <path d="M10 11V17" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14 11V17" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M4 7H20" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M6 7H12H18V18C18 19.6569 16.6569 21 15 21H9C7.34315 21 6 19.6569 6 18V7Z" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#ef4444" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </td> --}}
                                        </tr>
                                    @empty

                                        {{-- empty --}}
                                        
                                    @endforelse

                                {{-- @else
                                    <div class="flex w-full pt-2 lg:pt-8">
                                        <div class="m-auto text-center">
                                            <img src="{{ asset('/src/img/maskot_pkkmb_maaf_2.png') }}" alt="" class="w-32 mx-auto mb-2">
                        
                                            <h2 class="mb-1 text-2xl lg:text-3xl font-semibold text-gray-700">
                                                Peserta ini belum memiliki pelanggaran
                                            </h2>
                                            
                                            <p class="text-sm lg:text-base text-gray-400 mb-4">
                                                Peserta ini sangat taat dengan segala aturan kita. <br>
                                                Silahkan direkomendasikan untuk menjadi panitia tahun depan!
                                            </p>
                        
                                            <div class="relative">
                                                <a href="{{ route('admin.pelanggaran.index') }}" class="px-4 py-2 mt-10 lg:mt-2 text-left text-white rounded-md lg:rounded-xl bg-space-textungu">
                                                    Kembali Ke Halaman Utama
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif --}}

                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection