@extends('layouts.dashboard.app')

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('presences.show', $attendance->id) }}" class="btn btn-sm btn-light">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')

<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <h5 class="font-bold text-lg">Judul : {{ $attendance->title }}</h5>
                <h6 class="text-sm">Deskripsi : {{ $attendance->description }}</h6>
                <div class="d-flex align-items-center gap-2">
                    <span href="" class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded">Tidak Hadir</span>
                </div>
            </div>
            <div class="col-md-6">
                <form action="" method="get">
                    <div class="mb-3">
                        <label for="filterDate" class="text-gray-500">Tampilkan Berdasarkan Tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="rounded-md border-gray-500" id="filterDate" name="display-by-date"
                                value="{{ request('display-by-date') }}">
                            <button class="bg-blue-100 hover:bg-blue-200 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-md" type="submit" id="button-addon1">Tampilkan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if (count($notPresentData) === 0)
<small class="text-danger fw-bold">Tidak ada data yang bisa ditampilkan, <a href="">Tampilkan data berdasarkan hari
        ini.</a></small>
@endif

<div>
    @foreach ($notPresentData as $data)
    <div class="p-3 rounded bg-white border border-gray-400 mb-4">
        <div>Hari : <span class="font-bold">
                {{ \Carbon\Carbon::parse($data['not_presence_date'])->dayName }}
                {{ \Carbon\Carbon::parse($data['not_presence_date'])->isCurrentDay() ? '(Hari ini)' : '' }}
            </span>
        </div>
        <div>Tanggal : <span class="font-bold">{{ $data['not_presence_date'] }}</span></div>
        <div>Jumlah : <span class="font-bold">{{ count($data['users']) }}</span></div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Posisi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Handle
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($data['users'] as $user)    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user['name'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user['nim'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user['position']['name'] }}
                    </td>
                    <td class="px-6 py-4 flex">
                        <form action="{{ route('presences.present', $attendance->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user['id'] }}">
                            <input type="hidden" name="presence_date" value="{{ $data['not_presence_date'] }}">
                            <button class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded hover:underline" type="submit">Hadir</button>
                        </form>
                        <form action="{{ route('presences.acceptPermission', $attendance->id) }}" method="POST" >
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user['id'] }}">
                            <button class="bg-yellow-100 text-yellow-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded hover:underline" type="submit">Izin</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endforeach
</div>

@endsection