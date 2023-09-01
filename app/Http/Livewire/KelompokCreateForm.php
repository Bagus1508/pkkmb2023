<?php

namespace App\Http\Livewire;

use App\Models\Kelompok;
use Livewire\Component;
use phpDocumentor\Reflection\Types\Boolean;

class KelompokCreateForm extends Component
{
    public $kelompok;

    public function mount()
    {
        $this->kelompok = [
            ['name' => '']
        ];
    }

    public function addKelompokInput(): void
    {
        $this->kelompok[] = ['name' => ''];
    }

    public function removeKelompokInput(int $index): void
    {
        unset($this->kelompok[$index]);
        $this->kelompok = array_values($this->kelompok);
    }

    public function saveKelompok()
    {
        // setidaknya input pertama yang hanya required,
        // karena nanti akan difilter apakah input kedua dan input selanjutnya apakah berisi
        $this->validate([
            'kelompok.0.name' => 'required'
        ], ['kelompok.0.name.required' => 'Setidaknya input posisi pertama wajib diisi.']);

        // ambil input/request dari position yang berisi
        $kelompok = array_filter($this->kelompok, function ($a) {
            return trim($a['name']) !== "";
        });

        // alasan menggunakan create alih2 mengunakan ::insert adalah karena tidak looping untuk menambahkan created_at dan updated_at
        foreach ($kelompok as $kelompok) {
            Kelompok::create($kelompok);
        }

        redirect()->route('kelompok.index')->with('success', 'Data posisi berhasil ditambahkan.');
    }

    public function render()
    {
        return view('livewire.kelompok-create-form');
    }
}
