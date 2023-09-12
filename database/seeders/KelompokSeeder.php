<?php

namespace Database\Seeders;

use App\Models\Kelompok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelompokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelompok::create([
            'name' => 'Milky Way',
        ]);
        Kelompok::create([
            'name' => 'Andromeda',
        ]);
        Kelompok::create([
            'name' => 'Black Eye',
        ]);
        Kelompok::create([
            'name' => 'Sunflower',
        ]);
        Kelompok::create([
            'name' => 'Sombrero',
        ]);
        Kelompok::create([
            'name' => 'Silver Coin',
        ]);
        Kelompok::create([
            'name' => 'Sculptor Blue',
        ]);
        Kelompok::create([
            'name' => 'Pinwheel',
        ]);
        Kelompok::create([
            'name' => 'Panitia Pegarah',
        ]);
        Kelompok::create([
            'name' => 'Ketua Pelaksana',
        ]);
        Kelompok::create([
            'name' => 'Kesekretariatan',
        ]);
        Kelompok::create([
            'name' => 'Acara dan Kreatif',
        ]);
        Kelompok::create([
            'name' => 'Humas dan Danus',
        ]);
        Kelompok::create([
            'name' => 'DokumentasiTI',
        ]);
        Kelompok::create([
            'name' => 'Perlengkapan dan Kesehatan',
        ]);
        Kelompok::create([
            'name' => 'Naradamping',
        ]);
    }
}
