<?php

namespace App\Http\Livewire;

use App\Http\Traits\useUniqueValidation;
use App\Models\Position;
use App\Models\Role;
use App\Models\User;
use App\Rules\NimRule;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Validation\Rule;
use Livewire\Component;

class adminEditForm extends Component
{
    use useUniqueValidation;

    public $students;
    public Collection $roles;
    public Collection $positions;

    public function mount(Collection $students)
    {
        $this->students = []; // reset, karena ada data students sebelumnya

        foreach ($students as $student) {
            $this->students[] = [
                'id' => $student->id,
                'name' => $student->name,
                'nim' => $student->nim,
                'nim' => $student->nim, // untuk cek validasi unique
                'role_id' => $student->role_id,
                'position_id' => $student->position_id
            ];
        }
        $this->roles = Role::all();
        $this->positions = Position::all();
    }

    public function saveStudents()
    {
        $roleIdRuleIn = join(',', $this->roles->pluck('id')->toArray());
        $positionIdRuleIn = join(',', $this->positions->pluck('id')->toArray());

        $this->validate([
            'students.*.name' => 'required',
            'students.*.nim' => ['required', new NimRule],
            'students.*.password' => '',
            'students.*.role_id' => 'required|in:' . $roleIdRuleIn,
            'students.*.position_id' => 'required|in:' . $positionIdRuleIn,
        ]);

        if (!$this->isUniqueOnLocal('nim', $this->students)) {
            $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
            return session()->flash('failed', 'Pastikan input NIM tidak mangandung nilai yang sama dengan input lainnya.');
        }

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        $affected = 0;
        foreach ($this->students as $student) {
            // cek unique validasi
            $studentBeforeUpdated = User::find($student['id']);

            if (!$this->isUniqueOnDatabase($studentBeforeUpdated, $student, 'nim', User::class)) {
                // Skip validation if NIM is same as original data
                if ($student['nim'] !== $studentBeforeUpdated->nim) {
                    $this->dispatchBrowserEvent('livewire-scroll', ['top' => 0]);
                    return session()->flash('failed', "NIM dari data peserta {$student['id']} sudah terdaftar. Silahkan masukkan NIM yang berbeda!");
                }
            }

            $affected += $studentBeforeUpdated->update([
                'name' => $student['name'],
                'nim' => $student['nim'],
                'role_id' => $student['role_id'],
                'position_id' => $student['position_id'],
            ]);
        }

        $message = $affected === 0 ?
            "Tidak ada data admin yang diubah." :
            "Ada $affected data admin yang berhasil diedit.";

        return redirect()->route('admin.index')->with('success', $message);
    }

    public function render()
    {
        return view('livewire.admin-edit-form');
    }
}
