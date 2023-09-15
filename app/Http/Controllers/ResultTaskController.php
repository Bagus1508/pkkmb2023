<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\TambahTugas;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ResultTaskController extends Controller
{
    public function index()
    {
        $tambahtugas = TambahTugas::all()->sortByDesc('data.is_start');

        return view('dashboard.admin.task.index', [
            "title" => "Daftar Tugas Dengan Pengumpulan",
            "tambahtugas" => $tambahtugas
        ]);
    }

    public function showResultTaskUser(Task $task)
    {
        return view('dashboard.admin.task.result', [
            "title" => "Lihat Data Tugas Peserta",
            "task" => $task
        ]);
    }

    public function show(TambahTugas $tambahtugas)
    {
        $tambahtugas->load(['task']);

        // dd($qrcode);
        return view('dashboard.admin.task.show', [
            "title" => "Data Detail Pengumpulan",
            "tambahtugas" => $tambahtugas,
        ]);
    }

    public function updateStatus(Task $task)
    {
        $validatedData = request()->validate([
            'status' => 'required|in:Terkirim,Proses,Revisi,Diterima',
        ]);

        $task->update([
            'status' => $validatedData['status'],
        ]);

        return redirect()->back()->with('success', 'Status berhasil diperbarui');
    }

    public function notPresent(TambahTugas $tambahTugas)
    {
        $byDate = $tambahTugas->date;
        if (request('display-by-date'))
            $byDate = request('display-by-date');

        $task = Task::query()
            ->where('tambahtugas_id', $tambahTugas->id)
            ->where('submit_date', $byDate)
            ->get(['submit_date', 'user_id']);
            
        $roleFilter = 'user'; // Ganti dengan peran yang ingin Anda tampilkan

        // Get participants or committee members based on position_id
        if ($task->isEmpty()) {
            $notSubmitData[] = 
            [
                "not_submit_date" => $byDate,
                "users" => User::query()
                    ->whereHas('role', function ($query) use ($roleFilter) {
                        $query->where('name', $roleFilter);
                    })
                    ->with('kelompok')
                    ->get()
                    ->toArray(),
            ];
        } else {
            $notSubmitData = $this->getNotSubmitStudents($task, $roleFilter);
        }

        return view('dashboard.admin.task.not-submit', [
            "title" => "Data Peserta Tidak Mengumpulkan",
            "tambahtugas" => $tambahTugas,
            "notSubmitData" => $notSubmitData,
            "roleFilter" => $roleFilter,
        ]);
    }

    private function getNotSubmitStudents($task, $roleFilter)
    {
        $uniqueSubmitDates = $task->unique("submit_date")->pluck('submit_date');
        $uniqueSubmitDatesAndCompactTheUserIds = $uniqueSubmitDates->map(function ($date) use ($task) {
            return [
                "submit_date" => $date,
                "user_ids" => $task->where('submit_date', $date)->pluck('user_id')->toArray()
            ];
        });
        $notPresentData = [];
        foreach ($uniqueSubmitDatesAndCompactTheUserIds as $tasks) {
            $notPresentData[] =
                [
                    "not_submit_date" => $tasks['submit_date'],
                    "users" => User::query()
                        ->whereHas('role', function ($query) use ($roleFilter) {
                            $query->where('name', $roleFilter);
                        })
                        ->with('kelompok')
                        ->whereNotIn('id', $tasks['user_ids'])
                        ->get()
                        ->toArray()
                ];
        }
        return $notPresentData;
    }

    public function destroy(Task $task)
    {
        try {
            $task->delete();
            return back()->with('success', 'Tugas peserta berhasil dihapus.');
        } catch (\Exception $ex) {
            return back()->with('error', 'Gagal menghapus tugas peserta.');
        }
    }
}
