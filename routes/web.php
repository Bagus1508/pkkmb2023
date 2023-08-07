<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePresenceController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\PresenceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware('auth')->group(function () {
    Route::middleware('role:admin,superadmin')->group(function () {
        Route::get('/dashboard/admin', [DashboardController::class, 'index'])->name('dashboard.indexadmin');
        // positions
        Route::get('/dashboard/admin/posisi', [PositionController::class, 'index'])->name('positions.index');
        Route::get('/dashboard/admin/posisi/tambah-data', [PositionController::class, 'create'])->name('positions.create');
        Route::get('/dashboard/admin/posisi/edit', [PositionController::class, 'edit'])->name('positions.edit');
        Route::delete('/dashboard/admin/posisi/{position}', [PositionController::class, 'destroy'])->name('positions.destroy');
        // peserta
        Route::get('/dashboard/admin/peserta', [StudentController::class, 'index'])->name('students.index');
        Route::get('/dashboard/admin/peserta/tambah-data', [StudentController::class, 'create'])->name('students.create');
        Route::get('/dashboard/admin/peserta/edit', [StudentController::class, 'edit'])->name('students.edit');
        // attendances (user/presensi)
        Route::get('/dashboard/admin/kehadiran', [AttendanceController::class, 'index'])->name('attendances.index');
        Route::get('/dashboard/admin/kehadiran/tambah-data', [AttendanceController::class, 'create'])->name('attendances.create');
        Route::get('/dashboard/admin/kehadiran/edit', [AttendanceController::class, 'edit'])->name('attendances.edit');
        Route::delete('/dashboard/admin/kehadiran/{attendance}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');

        // presensi (kehadiran)
        Route::resource('/dashboard/admin/presensi', PresenceController::class)->only(['index']);
        Route::get('/dashboard/admin/presensi/qrcode', [PresenceController::class, 'showQrcode'])->name('presences.qrcode');
        Route::get('/dashboard/admin/presensi/{attendance}', [PresenceController::class, 'show'])->name('presences.show');
        // not present data
        Route::get('/dashboard/admin/presensi/{attendance}/tidak-presensi', [PresenceController::class, 'notPresent'])->name('presences.not-present');
        Route::post('/dashboard/admin/presensi/{attendance}/tidak-presensi', [PresenceController::class, 'notPresent']);
        // present (url untuk menambahkan/mengubah user yang tidak hadir menjadi hadir)
        Route::post('/dashboard/admin/presensi/{attendance}/hadir', [PresenceController::class, 'presentUser'])->name('presences.present');
        Route::post('/dashboard/admin/presensi/{attendance}/terimaIzin', [PresenceController::class, 'acceptPermission'])->name('presences.acceptPermission');
        // students permissions

        Route::get('/dashboard/presensi/{attendance}/izin', [PresenceController::class, 'permissions'])->name('presences.permissions');
    });

    Route::middleware('role:user,admin,superadmin')->name('home-presences.')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'indexuserdashboard'])->name('indexuserdashboard');

        Route::get('/dashboard/user/presensi', [HomePresenceController::class, 'index'])->name('index');
        // desctination after scan qrcode
        Route::post('/dashboard/user/presensi/qrcode', [HomePresenceController::class, 'sendEnterPresenceUsingQRCode'])->name('sendEnterPresenceUsingQRCode');
        Route::post('/dashboard/user/presensi/qrcode/out', [HomePresenceController::class, 'sendOutPresenceUsingQRCode'])->name('sendOutPresenceUsingQRCode');

        Route::get('/dashboard/user/presensi/{attendance}', [HomePresenceController::class, 'show'])->name('show');
        Route::get('/dashboard/user/presensi/{attendance}/izin', [HomePresenceController::class, 'permission'])->name('permission');
    });

    Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});
/* Guest */
    //landing view
    Route::get('/', [LandingController::class, 'viewindex'])->name('index-landing');
    Route::get('/informasi', [LandingController::class, 'viewinformation'])->name('informasi-landing');
    Route::get('/panitia', [LandingController::class, 'viewcommittee'])->name('panitia-landing');
    Route::get('/pengumuman', [LandingController::class, 'viewannounce'])->name('pengumuman-landing');
    // auth
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'authenticate']);
