<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.students.index', [
            "title" => "Peserta"
        ]);
    }

    public function create()
    {
        return view('dashboard.admin.students.create', [
            "title" => "Tambah Data Peserta"
        ]);
    }

    public function edit()
    {
        $ids = request('ids');
        if (!$ids)
            return redirect()->back();
        $ids = explode('-', $ids);

        // ambil data user yang hanya memiliki User::USER_ROLE_ID / role untuk peserta
        $students = User::query()
            ->whereIn('id', $ids)
            ->get();

        return view('dashboard.admin.students.edit', [
            "title" => "Edit Data Peserta",
            "students" => $students
        ]);
    }
}