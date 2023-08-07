@extends('layouts.dashboard.app')

@push('style')
@powerGridStyles
@endpush

@section('buttons')
<div class="w-full mx-auto justify-end flex my-2">
    <div>
        <a href="{{ route('positions.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
            + Tambah Data Posisi
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')
<livewire:position-table />
@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush