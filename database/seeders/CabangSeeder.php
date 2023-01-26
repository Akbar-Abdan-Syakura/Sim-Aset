<?php

namespace Database\Seeders;

use App\Models\tb_cabang;
use Illuminate\Database\Seeder;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cabang = [
            [
                'nama_cbng' => 'Kantor Pusat',
                'alamat' => 'Jl. PHH. Mustopa No. 72, Bandung, Jawa Barat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Bandung',
                'alamat' => 'Jl. PHH. Mustopa No. 72, Bandung, Jawa Barat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Banjarbaru',
                'alamat' => 'Jln. Karang Anyar 1, Ruko B02 Madani Land Cluster, Banjarbaru, Kalimantan Selatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Denpasar',
                'alamat' => 'Jln. Kenyeri No.138, Denpasar, Bali',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Jakarta',
                'alamat' => 'Jln. Biak No. 25, Cideng, Jakarta Pusat',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Makassar',
                'alamat' => 'Jln. AP. Petarani No.2, Makassar, Sulawesi Selatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Medan',
                'alamat' => 'Jln. Sutomo Ujung No. 171, Medan, Sumatera Utara',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Palembang',
                'alamat' => 'Jln. Kapten A. Rifai No.63, Palembang, Sumatera Selatan',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Semarang',
                'alamat' => 'Jl. Singosari 2 No. 23 Pleburan, Semarang, Jawa Tengah',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_cbng' => 'Kantor Cabang Surabaya',
                'alamat' => 'Jln. Jemur Andayani No.75, Gedung PT. POS Indonesia Surabaya Lantai 2, Surabaya, Jawa Timur',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        tb_cabang::insert($cabang);
    }
}
