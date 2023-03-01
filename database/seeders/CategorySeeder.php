<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'kd_category' => '01.01.001',
                'nama' => 'Rumah',
                'spek' => 'Tanah dan Bangunan SHM no.0258/Mekarrahayu dan no.02541/Mekarrahayu',
                'umur_ekonomis_id' => '1',
                "kriteria_id" => 1
            ],
            [
                'kd_category' => '04.01.002',
                'nama' => 'AC 1PK',
                'spek' => 'samsung/z-pipe05/putih',
                'umur_ekonomis_id' => '3',
                "kriteria_id" => 2
            ],
        ];

        foreach ($categories as $key => $item) {
            Category::create($item);
        }
    }
}
