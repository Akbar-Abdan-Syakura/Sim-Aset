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
                'kd_category' => 'AST-00001',
                'nama' => 'Rumah',
                'spek' => 'Tanah dan Bangunan SHM no.0258/Mekarrahayu dan no.02541/Mekarrahayu',
                'umur_ekonomis_id' => '1',
            ],
            [
                'kd_category' => 'AST-00002',
                'nama' => 'AC 1PK',
                'spek' => 'samsung/z-pipe05/putih',
                'umur_ekonomis_id' => '3',
            ],
        ];

        foreach ($categories as $key => $item) {
            Category::create($item);
        }
    }
}
