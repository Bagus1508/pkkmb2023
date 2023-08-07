<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('landing.information', [
            "title" => "Informasi"
        ]);
    }
}
