<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                "name" => "admin",
                "fullname" => "Administrator"
            ],
            [
                "name" => "manager",
                "fullname" => "Manager SDM & Sarana"
            ],
            [
                "name" => "gm",
                "fullname" => "General Manager Umum & SDM"
            ],
            [
                "name" => "branch",
                "fullname" => "Kepala Kantor Cabang"
            ],
        ];
        // "admin", "manager", "gm", "branch"

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
