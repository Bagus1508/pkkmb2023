<?php

namespace App\Http\Livewire;

use App\Models\Kelompok;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class KelompokEditForm extends Component
{
    public $kelompok = [];

    public function mount(Collection $kelompok)
    {
        $this->kelompok = []; // hapus kelompok collection
        foreach ($kelompok as $kelompok) {
            $this->kelompok[] = ['id' => $kelompok->id, 'name' => $kelompok->name];
        }
    }

    public function saveKelompok()
    {
        // tidak mengimplementasikan validasi, karena jika input kosong berarti data tersebut tidak akan diubah
        // ambil input/request dari kelompok yang berisi
        $kelompok = array_filter($this->kelompok, function ($a) {
            return trim($a['name']) !== "";
        });

        $affected = 0;
        foreach ($kelompok as $kelompok) {
            $affected += Kelompok::find($kelompok['id'])->update(['name' => $kelompok['name']]);
        }

        $message = $affected === 0 ?
            "Tidak ada data posisi yang diubah." :
            "Ada $affected data posisi yang berhasil diedit.";

        return redirect()->route('kelompok.index')->with('success', $message);
    }

    public function render()
    {
        return view('livewire.kelompok-edit.form');
    }
}
