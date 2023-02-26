<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["nama"=>"bangunan","kode"=>"01","golongan_id"=>"1"],
            ["nama"=>"peralatan elektronik","kode"=>"01","golongan_id"=>"2"],
            ["nama"=>"peralatan kerja","kode"=>"02","golongan_id"=>"2"],
            ["nama"=>"ATK","kode"=>"01","golongan_id"=>"3"],
            ["nama"=>"komputer","kode"=>"02","golongan_id"=>"3"],
            ["nama"=>"meubeler","kode"=>"03","golongan_id"=>"3"],
            ["nama"=>"peralatan rumah tangga","kode"=>"04","golongan_id"=>"3"],
            ["nama"=>"entertainment","kode"=>"05","golongan_id"=>"3"],
        ];

        foreach ($data as $key => $value) {
            Kriteria::create($value);
        }
    }
}
