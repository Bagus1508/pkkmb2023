<?php

namespace App\Http\Livewire;

use App\Models\TambahTugas;
use Illuminate\Validation\Rule;
use Livewire\Component;

class TambahTugasEditForm extends Component
{
    public $tambahtugas;

    public function mount(TambahTugas $tambahtugas)
    {
        $this->tambahtugas = [
            'id' => $tambahtugas->id,
            'title' => $tambahtugas->title,
            'description' => $tambahtugas->description,
            'start_date' => $tambahtugas->start_date,
            'end_date' => $tambahtugas->end_date,
            'start_time' => $tambahtugas->start_time,
            'batas_start_time' => $tambahtugas->batas_start_time,
            'input_type' => $tambahtugas->input_type,
        ];
    }


    public function save()
    {
        $this->validate([
            'tambahtugas.title' => 'required',
            'tambahtugas.description' => 'required',
            'tambahtugas.start_date' => 'required',
            'tambahtugas.end_date' => 'required',
            'tambahtugas.start_time' => 'required',
            'tambahtugas.batas_start_time' => 'required',
            'tambahtugas.input_type' => 'required',
        ]);

        // Buat objek model TambahTugas dengan data dari array
        $model = TambahTugas::find($this->tambahtugas['id']);
        $model->update($this->tambahtugas);

        session()->flash('success', 'Data tugas berhasil diedit.');

        return redirect()->route('tambahtugas.index');
    }

    public function render()
    {
        return view('livewire.tambahtugas-edit-form');
    }
}
