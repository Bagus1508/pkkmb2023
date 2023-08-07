@extends('layouts.dashboard.app')

@push('style')
@powerGridStyles
@endpush

@section('content')
<div class="mb-5">
    <div class="w-1/2 p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">{{ $attendance->title }}</h5>
        <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">{{ $attendance->description }}</p>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 my-2">
            <div>
                Status : @include('partials.attendance-badges')
            </div>
            <div>
                <a href="{{ route('presences.not-present', $attendance->id) }}" class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded-lg font-semibold">
                    Belum Presensi
                </a>
            </div>
            <div>
                <a href="{{ route('presences.qrcode', ['code' => $attendance->code]) }}" class="bg-green-500 hover:bg-green-600 text-white px-2 py-1 rounded-lg font-semibold">
                    QR-Code
                </a>
            </div>
        </div>

        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 my-2">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                <div class="mb-2">
                    <small class="font-semibold bg-gray-100 rounded-lg px-2 py-1">Range Jam Masuk</small>
                    <div class="mt-1">{{ $attendance->start_time }} - {{ $attendance->batas_start_time }}</div>
                </div>
                <div class="mb-2">
                    <small class="font-semibold bg-gray-100 rounded-lg px-2 py-1">Range Jam Keluar</small>
                    <div class="mt-1">{{ $attendance->start_time }} - {{ $attendance->batas_start_time }}</div>
                </div>
            </div>
        </div>

        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 my-2">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-4">
                <small class="font-semibold">Posisi</small>
                <div>
                    @foreach ($attendance->positions as $position)
                    <span class="bg-green-500 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full">{{ $position->name }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <livewire:presence-table attendanceId="{{ $attendance->id }}" />
</div>

@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush