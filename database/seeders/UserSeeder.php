<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataUser = [
            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 1
            ],
            [
                "name" => "Indra",
                "email" => "indra@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 1
            ],
            [
                "name" => "Ilham",
                "email" => "ilhma@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 2
            ],
            [
                "name" => "Akup",
                "email" => "akup@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 3
            ],
            [
                "name" => "Andi",
                "email" => "andi@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 4
            ],
        ];

        foreach ($dataUser as $key => $value) {
            User::create($value);
        }
    }
}
