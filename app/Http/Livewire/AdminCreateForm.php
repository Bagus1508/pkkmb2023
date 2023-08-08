<?php

namespace App\Http\Livewire;

use App\Models\Position;
use App\Models\Role;
use App\Rules\NimRule;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AdminCreateForm extends Component
{
    public $students;
    public Collection $roles;
    public Collection $positions;

    public function mount()
    {
        $this->positions = Position::all();
        $this->roles = Role::all();
        $this->students = [
            ['name' => '', 'nim' => '', 'password' => '', 'role_id' => User::USER_ROLE_ID, 'position_id' => $this->positions->first()->id]
        ];
    }

    public function addStudentInput(): void
    {
        $this->students[] = ['name' => '', 'nim' => '', 'password' => '', 'role_id' => User::USER_ROLE_ID, 'position_id' => $this->positions->first()->id];
    }

    public function removeStudentInput(int $index): void
    {
        unset($this->students[$index]);
        $this->students = array_values($this->students);
    }

    public function savestudents()
    {
        // cara lebih cepat, dan kemungkinan data role tidak akan diubah/ditambah
        $roleIdRuleIn = join(',', $this->roles->pluck('id')->toArray());
        $positionIdRuleIn = join(',', $this->positions->pluck('id')->toArray());
        // $roleIdRuleIn = join(',', Role::all()->pluck('id')->toArray());

        // setidaknya input pertama yang hanya required,
        // karena nanti akan difilter apakah input kedua dan input selanjutnya apakah berisi
        $this->validate([
            'students.*.name' => 'required',
            'students.*.nim' => ['required', new NimRule ,'unique:users,nim'],
            'students.*.password' => '',
            'students.*.role_id' => 'required|in:' . $roleIdRuleIn,
            'students.*.position_id' => 'required|in:' . $positionIdRuleIn,
        ]);

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        $affected = 0;
        foreach ($this->students as $Student) {
            if (trim($Student['password']) === '') $Student['password'] = '123';
            $Student['password'] = Hash::make($Student['password']);
            User::create($Student);
            $affected++;
        }

        redirect()->route('admin.index')->with('success', "Ada ($affected) data admin yang berhasil ditambahkan.");
    }

    public function render()
    {
        return view('livewire.Admin-create-form');
    }
}
