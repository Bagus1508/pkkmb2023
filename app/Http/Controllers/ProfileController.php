<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function profileindex() {
        return view('dashboard.user.profile.index', [
            "title" => "Profile Peserta"
        ]);
    }

    public function profileedit()
    {

        $user = auth()->user(); // Mengambil data pengguna saat ini yang sedang login

        return view('dashboard.user.profile.edit', [
            "title" => "Edit Data Peserta",
            "students" => $user
        ]);
    }

}
