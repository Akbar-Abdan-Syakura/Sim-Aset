<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Seeder;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ["nama" => "aset", "kode" => "01"],
            ["nama" => "peralatan", "kode" => "04"],
            ["nama" => "inventaris kantor", "kode" => "05"],
            ["nama" => "inventaris kantor", "kode" => "05"],
        ];

        foreach ($data as $key => $value) {
            Golongan::create($value);
        }
    }
}
