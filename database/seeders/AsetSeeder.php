<?php

namespace Database\Seeders;

use App\Models\tb_aset;
use Illuminate\Database\Seeder;

class AsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aset = [
            [
                'kd_aset' => '01.01.002',
                'nama' => 'Rumah',
                'tgl_perolehan' => '2016-03-31',
                'cabang_id' => '1',
                'penempatan_id' => '1',
                'spek' => 'Tanah dan Bangunan SHM no.0258/Mekarrahayu dan no.02541/Mekarrahayu',
                'qty' => '2',
                'umur_ekonomis_id' => '1',
                'usia_aset' => '6',
                'kondisi_id' => '2',
                'harga' => '76128000',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        tb_aset::insert($aset);
    }
}
