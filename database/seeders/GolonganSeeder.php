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
            ["name" => "aset", "kode" => "01"],
            ["name" => "peralatan", "kode" => "04"],
            ["name" => "inventaris kantor", "kode" => "05"],
            ["name" => "inventaris kantor", "kode" => "05"],
        ];

        foreach ($data as $key => $value) {
            Golongan::create($value);
        }
    }
}
