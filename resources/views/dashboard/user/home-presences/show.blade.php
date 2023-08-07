@extends('layouts.dashboard.app')

@section('content')
<div class="container">
    <div class="flex flex-col gap-y-5 gap-x-5">
  
        <!-- Main modal -->
        <div id="scannerModal" data-modal-backdrop="qrcode-scanner-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-2xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Presensi QR-Code
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="scannerModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <div id="reader"></div>
                    </div>
                </div>
            </div>
        </div>
  
        {{-- camera start --}}
        <div class="container" id="qrcode-scanner-modal" tabindex="-1">
                        <div id="reader" class="container"></div>
        </div>
        {{-- camera stop --}}
        <div class="border px-4 py-4 sm:mb-10 rounded-lg shadow-lg">
            <div class="mb-2">
                @include('partials.attendance-badges')
            </div>
            @include('partials.alerts')

            <h1 class="font-bold text-xl">{{ $attendance->title }}</h1>
            <p class="text-gray-500">{{ $attendance->description }}</p>

            <div class="my-4">
                <span class="shadow-md font-semibold py-2 px-2 rounded-md bg-gray-300">Batas Waktu : {{
                    substr($attendance->data->start_time, 0 , -3) }} - {{
                    substr($attendance->data->batas_start_time,0,-3 )}}</span>
            </div>

            @if (!$attendance->data->is_using_qrcode)
            <livewire:presence-form :attendance="$attendance" :data="$data">
                @else
                @include('dashboard.user.home-presences.partials.qrcode-presence')
            @endif
        </div>
        <div class="border px-4 py-4 mb-3 rounded-lg shadow-lg">
            <h5 class="mb-3">Histori Presensi :</h5>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jam Masuk
                            </th>
                            {{-- <th scope="col" class="px-6 py-3">
                                Jam Keluar
                            </th> --}}
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($priodDate as $date)
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </td>
                            {{-- not presence / tidak hadir --}}
                            @php
                            $histo = $history->where('presence_date', $date)->first();
                            @endphp
                            @if (!$histo)
                            <td class="px-6 py-4">
                                {{ $date }}
                            </td>
                            <td class="px-6 py-4">
                                @if($date == now()->toDateString())
                                <div class="text-center bg-blue-100 text-blue-800 text-xs font-medium px-1 py-0.5 rounded-full">Belum Hadir</div>
                                @else
                                <div class="text-center bg-red-100 text-red-800 text-xs font-medium px-1 py-0.5 rounded-full">Tidak Hadir</div>
                                @endif
                            </td>
                            @else
                            <td class="px-6 py-4">{{ $histo->presence_date }}</td>
                            <td class="px-6 py-4">{{ $histo->presence_enter_time }}</td>
                            {{-- <td>@if($histo->presence_out_time)
                                {{ $histo->presence_out_time }}
                                @else
                                <span class="text-center bg-blue-100 text-blue-800 text-xs font-medium px-1 py-0.5 rounded-full">Belum Presensi Keluar</span>
                                @endif
                            </td> --}}
                            <td class="px-6 py-4">
                                @if ($histo->is_permission)
                                <div class="text-center bg-yellow-100 text-yellow-800 text-xs font-medium px-1 py-0.5 rounded-full">Izin</div>
                                @else
                                <div class="text-center bg-green-100 text-green-800 text-xs font-medium px-1 py-0.5 rounded-full">Hadir</div>
                                @endif
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection