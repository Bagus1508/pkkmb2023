<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pelanggaran;
use App\Models\Presence;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $peserta = User::where('position_id', '1')->orderBy('kelompok_id', 'asc')->orderBy('name', 'asc')->get();
        $pelanggaran = Pelanggaran::whereIn('peserta_id', $peserta->pluck('id'))->get();
        $presensi = Presence::whereIn('user_id', $peserta->pluck('id'))->get();
        $tugas = Task::whereIn('user_id', $peserta->pluck('id'))->get();
        
        //dd($pelanggaran);
        return view('dashboard.admin.hasil.index', compact('peserta', 'pelanggaran', 'presensi'), ["title" => "Hasil Kelulusan"]);
    }
}
