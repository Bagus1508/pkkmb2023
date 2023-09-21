<?php

namespace App\Exports;

use App\Models\Pelanggaran;
use App\Models\Presence;
use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PowerComponents\LivewirePowerGrid\Traits\Exportable;

class HasilDataExport implements FromView, ShouldAutoSize
{
    use Exportable;

    private $users;
    private $task;
    private $presences;
    private $pelanggaran;

    public function __construct() {
        $this->users = User::all();
        $this->task = Task::all();
        $this->presences = Presence::all();
        $this->pelanggaran = Pelanggaran::all();
    }

    public function view() : View
    {
        return view('dashboard.admin.hasil.index',[
            'users' => $this->users,
            'task' => $this->task,
            'presences' => $this->presences,
            'pelanggaran' => $this->pelanggaran,
        ]);
    }
}
