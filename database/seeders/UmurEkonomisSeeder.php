<?php

namespace Database\Seeders;

use App\Models\tb_umur_ekonomis;
use Illuminate\Database\Seeder;

class UmurEkonomisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $umur = [
            [
                'kelompok' => 'Tanah dan Bangunan',
                'umur_ekonomis' => '20 Tahun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'kelompok' => 'Inventaris Kelompok 1',
                'umur_ekonomis' => '4 Tahun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'kelompok' => 'Inventaris Kelompok 2',
                'umur_ekonomis' => '8 Tahun',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        tb_umur_ekonomis::insert($umur);
    }
}
