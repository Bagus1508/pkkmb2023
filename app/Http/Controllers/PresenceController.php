<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Permission;
use App\Models\Presence;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PresenceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all()->sortByDesc('data.is_end')->sortByDesc('data.is_start');

        return view('dashboard.admin.presences.index', [
            "title" => "Daftar Presensi Dengan Kehadiran",
            "attendances" => $attendances
        ]);
    }

    public function show(Attendance $attendance)
    {
        $attendance->load(['positions', 'presences']);

        // dd($qrcode);
        return view('dashboard.admin.presences.show', [
            "title" => "Data Detail Kehadiran",
            "attendance" => $attendance,
        ]);
    }

    public function destroy(Presence $presence)
    {
        try {
            $presence->delete();
            return back()->with('success', 'Presensi peserta berhasil dihapus.');
        } catch (\Exception $ex) {
            return back()->with('error', 'Gagal menghapus presensi peserta.');
        }
    }

    public function showQrcode()
    {
        $code = request('code');
        $qrcode = $this->getQrCode($code);

        return view('dashboard.admin.presences.qrcode', [
            "title" => "Presensi QRCode | PKKMB 2023",
            "qrcode" => $qrcode,
            "code" => $code
        ]);
    }

    public function getQrCode(?string $code): string
    {
        if (!Attendance::query()->where('code', $code)->first())
            throw new NotFoundHttpException(message: "Tidak ditemukan presensi dengan code '$code'.");

        return parent::getQrCode($code);
    }

    public function notPresent(Attendance $attendance)
    {
        $byDate = $attendance->date;
        if (request('display-by-date'))
            $byDate = request('display-by-date');

        $presences = Presence::query()
            ->where('attendance_id', $attendance->id)
            ->where('presence_date', $byDate)
            ->get(['presence_date', 'user_id']);
            

        // Get participants or committee members based on position_id
        if ($presences->isEmpty()) {
            $notPresentData[] = 
            [
                "not_presence_date" => $byDate,
                "users" => User::query()
                    ->with('position')
                    ->get()
                    ->toArray(),
            ];
        } else {
            $notPresentData = $this->getNotPresentStudents($presences);
        }

        return view('dashboard.admin.presences.not-present', [
            "title" => "Data Peserta Tidak Hadir",
            "attendance" => $attendance,
            "notPresentData" => $notPresentData
        ]);
    }

    private function getNotPresentStudents($presences)
    {
        $uniquePresenceDates = $presences->unique("presence_date")->pluck('presence_date');
        $uniquePresenceDatesAndCompactTheUserIds = $uniquePresenceDates->map(function ($date) use ($presences) {
            return [
                "presence_date" => $date,
                "user_ids" => $presences->where('presence_date', $date)->pluck('user_id')->toArray()
            ];
        });
        $notPresentData = [];
        foreach ($uniquePresenceDatesAndCompactTheUserIds as $presence) {
            $notPresentData[] =
                [
                    "not_presence_date" => $presence['presence_date'],
                    "users" => User::query()
                        ->with('position')
                        ->whereNotIn('id', $presence['user_ids'])
                        ->get()
                        ->toArray()
                ];
        }
        return $notPresentData;
    }

    public function acceptPermissionByAdmin(Request $request, $attendanceId)
    {
        //dd($request->all()); // Debugging
    
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'presence_date' => 'required|date',
            'permission_reason' => 'required|string',
        ]);
    
        //dd('Validation passed'); // Debugging
    
        // Dapatkan objek Attendance sesuai dengan $attendanceId
        $attendance = Attendance::findOrFail($attendanceId);
    
        //dd('Attendance found'); // Debugging
        
        // Dapatkan objek User sesuai dengan user_id dari input
        $user = User::findOrFail($request->user_id);
    
        //dd('User found'); // Debugging
    
        // Simpan izin dan alasan izin oleh admin ke database
        $attendance->presences()->create([
            'user_id' => $user->id,
            'presence_date' => $request->presence_date,
            "presence_enter_time" => now()->toTimeString(),
            'is_permission' => true,
            'permission_reason' => $request->permission_reason,
        ]);
    
        //dd('Permission saved'); // Debugging
    
        return redirect()->back()->with('success', 'Izin berhasil diberikan oleh admin.');
    }
    
    

    public function presentUser(Request $request, $attendanceId)
    {
        //dd($request->all()); // Debugging
    
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'presence_date' => 'required|date',
        ]);
    
        //dd('Validation passed'); // Debugging
    
        // Dapatkan objek Attendance sesuai dengan $attendanceId
        $attendance = Attendance::findOrFail($attendanceId);
    
        //dd('Attendance found'); // Debugging
        
        // Dapatkan objek User sesuai dengan user_id dari input
        $user = User::findOrFail($request->user_id);
    
        //dd('User found'); // Debugging
    
        // Simpan Kehadiran
        $attendance->presences()->create([
            'user_id' => $user->id,
            'presence_date' => $request->presence_date,
            "presence_enter_time" => now()->toTimeString(),
            'is_permission' => false,
            'permission_reason' => $request->permission_reason,
        ]);
    
        //dd('Permission saved'); // Debugging

        return back()
            ->with('success', "Berhasil menyimpan data hadir atas nama \"$user->name\".");
    }
}
