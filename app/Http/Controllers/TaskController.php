<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskindex() {
        return view('dashboard.user.task.index', [
            "title" => "Tugas Peserta"
        ]);
    }

    public function taskindividual() {
        return view('dashboard.user.task.individual.index', [
            "title" => "Tugas Individu Peserta"
        ]);
    }

    public function taskgroup() {
        return view('dashboard.user.task.group.index', [
            "title" => "Tugas Individu Peserta"
        ]);
    }
}
