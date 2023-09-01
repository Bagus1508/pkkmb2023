<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Holiday;
use App\Models\Permission;
use App\Models\Presence;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class HomePresenceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::query()
            // ->with('positions')
            ->forCurrentUser(auth()->user()->position_id)
            ->get()
            ->sortByDesc('data.is_end')
            ->sortByDesc('data.is_start');

        return view('dashboard.user.home-presences.index', [
            "title" => "Beranda",
            "attendances" => $attendances
        ]);
    }

    public function show(Attendance $attendance)
    {
        $presences = Presence::query()
            ->where('attendance_id', $attendance->id)
            ->where('user_id', auth()->user()->id)
            ->get();

        $isHasEnterToday = $presences
            ->where('presence_date', $attendance->date /* now()->toDateString() */)
            ->isNotEmpty();

        $data = [
            'is_has_enter_today' => $isHasEnterToday, // sudah absen masuk
            /* 'is_not_out_yet' => $presences->where('presence_out_time', null)->isNotEmpty(), // belum absen pulang */
        ];

        $history = Presence::query()
            ->where('user_id', auth()->user()->id)
            ->where('attendance_id', $attendance->id)
            ->get();

        // untuku melihat peserta yang tidak hadir
        $priodDate = CarbonPeriod::create($attendance->created_at->toDateString(), now()->toDateString())
            ->toArray();

        foreach ($priodDate as $i => $date) { // get only stringdate
            $priodDate[$i] = $date->toDateString();
        }

        $priodDate = array_slice(array_reverse($priodDate), 0, 30);

        return view('dashboard.user.home-presences.show', [
            "title" => "Informasi presensi Kehadiran",
            "attendance" => $attendance,
            "data" => $data,
            'history' => $history,
            'priodDate' => $priodDate
        ]);
    }
    
    // for qrcode
    public function sendEnterPresenceUsingQRCode(Request $request)
    {   

        $code = request('code');
        $attendance = Attendance::query()->where('code', $code)->first();
            
            // Cek apakah pengguna sudah melakukan presensi masuk pada tanggal yang sama
            $isEnteredToday = Presence::query()
            ->where('user_id', auth()->user()->id)
            ->where('attendance_id', $attendance->id)
            ->whereDate('presence_date', $attendance->date /* now()->toDateString() */)
            ->exists();

            if ($isEnteredToday) {
                return response()->json([
                    "success" => false,
                    "message" => "Anda sudah melakukan presensi masuk pada sesi ini."
                ], 400);
            }

            // fix: user bisa presensi dengan tanggal yang sama, cek apakah user id attendance id dan presence date sudah ada
            Presence::create([
                "user_id" => auth()->user()->id,
                "attendance_id" => $attendance->id,
                "presence_date" => $attendance->date /* now()->toDateString() */,
                "presence_enter_time" => now()->toTimeString(),
                'is_permission' => false,
                /* "presence_out_time" => null */
            ]);

            return response()->json([
                "success" => true,
                "message" => "Kehadiran atas nama '" . auth()->user()->name . "' berhasil dikirim."
            ]);

        return response()->json([
            "success" => false,
            "message" => "Terjadi masalah pada saat melakukan presensi."
        ], 400);
    }
}
