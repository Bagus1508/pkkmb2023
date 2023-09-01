<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DetailUser;
use App\Models\Kelompok;
use Illuminate\Validation\ValidationException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(PositionSeeder::class);

        $csvFile = storage_path('datauser/testseeder.csv');

        if (($handle = fopen($csvFile, "r")) !== false) {
            $header = null;

            DB::beginTransaction();

            try {
                while (($row = fgetcsv($handle, 0, ";")) !== false) {
                    if (!$header) {
                        $header = $row;
                        continue;
                    }

                    $data = array_combine($header, $row);

                    //dd($data);

                    $user = User::create([
                        'name' => $data['nama'],
                        'nim' => $data['nim'],
                        'password' => Hash::make($data['password']),
                        'position_id' => $data['position_id'],
                        'role_id' => $data['role_id'],
                        'kelompok_id' => null,
                    ]);

                    /* $kelompok = Kelompok::create([
                        'name' => $data['kelompok'],
                    ]); */

                    $detail = DetailUser::create([
                        'user_id' => $user->id,
                        'photo' => '',
                        'nim' => $data['nim'],
                        'email' => $data['email'],
                        'nama_lengkap' => $data['nama'],
                        'prodi' => $data['prodi'],
                        'fakultas' => $data['fakultas'],
                        'no_hp' => $data['no_hp'],
                        'sistem_kuliah' => $data['sistem_kuliah'],
                        'tahun_angkatan' => $data['tahun_angkatan'],
                        'jalur_penerimaan' => $data['jalur_penerimaan'],
                        'jenis_kelamin' => $data['jenis_kelamin'],
                        'tgl_lahir' => $data['tgl_lahir'],
                        'tempat_lahir' => $data['tempat_lahir'],
                        'agama' => $data['agama'],
                        'alamat' => $data['alamat'],
                    ]);
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollback();
                throw $e;
            } finally {
                fclose($handle);
            }
        }

        /* \App\Models\User::factory()->create([
            'name' => 'Bagus Adianto (Admin)',
            'nim' => '04321028',
            'role_id' => Role::where('name', 'superadmin')->first('id'),
            'position_id' => Position::where('name', 'Panitia')->first('id'),
        ]);
        \App\Models\User::factory(1)->create([
            'role_id' => Role::where('name', 'superadmin')->first('id'),
            'position_id' => Position::where('name', 'Panitia')->first('id'),
        ]);
        \App\Models\User::factory(10)->create([
            'role_id' => Role::where('name', 'user')->first('id'), // user === employee
            'position_id' => Position::select('id')->inRandomOrder()->first()->id
        ]); */
    }
}
