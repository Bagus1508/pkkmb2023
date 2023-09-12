<?php

namespace App\Http\Livewire;

use App\Models\TambahTugas;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class TambahTugasCreateForm extends Component
{   
    public $tambahtugas;

    public function save()
    {
        // Validasi input
        $this->validate([
            'tambahtugas.title' => 'required|string|min:6',
            'tambahtugas.description' => 'required|string|max:500',
            'tambahtugas.start_date' => 'required',
            'tambahtugas.end_date' => 'required',
            'tambahtugas.start_time' => 'required|date_format:H:i',
            'tambahtugas.batas_start_time' => 'required|date_format:H:i|after:start_time',
            'tambahtugas.input_type' => 'required',
            // Dan tambahkan validasi untuk kolom-kolom lainnya sesuai kebutuhan Anda
        ]);

        // Simpan data ke database
        $tambahtugas = TambahTugas::create($this->tambahtugas);

        // Redirect atau lakukan tindakan lain setelah penyimpanan berhasil
        return redirect()->route('tambahtugas.index')->with('success', "Tugas berhasil ditambahkan.");
    }

    public function render()
    {
        return view('livewire.tambahtugas-create-form');
    }
}
