<?php

namespace App\Http\Controllers;

use App\Models\DetailUser;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function viewindex() {
        return view('landing.index', [
            "title" => "Beranda"
        ]);
    }

    public function viewannounce() {
        return view('landing.announce', [
            "title" => "Pengumuman"
        ]);
    }

    public function viewcommittee() {
        return view('landing.committee', [
            "title" => "Panitia"
        ]);
    }

    public function viewinformation() {
        // $users = DetailUser::where('user_id', Auth::user()->id)->get();
        
        return view('landing.information', [
            "title" => "Kegiatan"
        ]);
    }

    public function viewnews() {
        return view('landing.informationnews', [
            "title" => "Berita"
        ]);
    }

    public function information() {
        return view('landing.informationintro', [
            "title" => "Informasi"
        ]);
    }
}
