@extends('layouts.dashboard.app')

@section('content')
<div class="container py-5">
    <div class="p-4 bg-white rounded-lg md:p-8 border shadow-md my-4">
        <h2 class="mb-2 text-2xl font-extrabold tracking-tight text-gray-900">Data {{ auth()->user()->position->name }} PKKMB :</h2>
        <!-- List -->
        <ul role="list" class="space-y-4 text-gray-500 dark:text-gray-400">
            <li class="flex space-x-2 items-center">
                <span class="leading-tight">Nama : </span>
                <span>{{ auth()->user()->name }}</span>
            </li>
            <li class="flex space-x-2 items-center">
                <span class="leading-tight">NIM : </span>
                <span>{{ auth()->user()->nim }}</span>
            </li>
            <li class="flex space-x-2 items-center">
                <span class="leading-tight">Program Studi : </span>
                <span>{{ auth()->user()->detailuser->prodi }}</span>
            </li>
            <li class="flex space-x-2 items-center">
                <span class="leading-tight">Fakultas : </span>
                <span>{{ auth()->user()->detailuser->fakultas }}</span>
            </li>
            <li class="flex space-x-2 items-center">
                <span class="leading-tight">Kelompok : </span>
                <span>{{ auth()->user()->kelompok->name ?? 'Belum masuk kelompok' }}</span>
            </li>
        </ul>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama/Judul Tugas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Mulai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Selesai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Mulai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Selesai
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tambahtugas as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->start_date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->end_date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->start_time }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->batas_start_time }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                             @include('partials.task-badges')
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        {{-- Cari tugas yang sesuai dengan tambahtugas_id saat ini --}}
                        @php
                            $task = \App\Models\Task::where('tambahtugas_id', $item->id)
                                ->where('user_id', auth()->user()->id)
                                ->first();
                        @endphp
                
                        {{-- Periksa apakah tugas ditemukan --}}
                        @if ($task)
                            @if ($task->status === 'Terkirim')
                                <div class="text-center bg-blue-100 text-blue-800 text-xs font-medium px-1 py-0.5 rounded-full">Terkirim</div>
                            @elseif ($task->status === 'Proses')
                                <div class="text-center bg-yellow-100 text-yellow-800 text-xs font-medium px-1 py-0.5 rounded-full">Diproses</div>
                            @elseif ($task->status === 'Revisi')
                                <div class="text-center bg-red-100 text-red-800 text-xs font-medium px-1 py-0.5 rounded-full">Revisi</div>
                            @elseif ($task->status === 'Diterima')
                                <div class="text-center bg-green-100 text-green-800 text-xs font-medium px-1 py-0.5 rounded-full">Diterima</div>
                            @else
                                <div class="text-center bg-blue-100 text-blue-800 text-xs font-medium px-1 py-0.5 rounded-full">Belum Mengumpulkan</div>
                            @endif
                        @else
                            {{-- Tugas tidak ditemukan, mungkin belum mengumpulkan --}}
                            <div class="text-center bg-blue-100 text-blue-800 text-xs font-medium px-1 py-0.5 rounded-full">Belum Mengumpulkan</div>
                        @endif
                    </td>                             
                    <td class="px-6 py-4">
                        <a href="{{ route('dashboard-user.taskshow', $item->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('script')
<script>
    // Ambil semua elemen <td> dengan class "nomor-urut"
    const nomorUrutElems = document.querySelectorAll('.nomor-urut');

    // Update nomor urut pada setiap elemen <td>
    function updateNomorUrut() {
        nomorUrutElems.forEach((elem, index) => {
            elem.textContent = index + 1;
        });
    }

    // Panggil fungsi updateNomorUrut saat halaman selesai dimuat
    window.onload = updateNomorUrut;
</script>
@endpush