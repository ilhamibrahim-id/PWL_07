<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matkul = [
            [
                'nama_matkul' => 'PWL',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'PBO',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Basdat Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'SMBD',
                'sks' => 3,
                'jam' => 4,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Proyek 1',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
        ];

        DB::table('matakuliah')->insert($matkul);
    }
}
