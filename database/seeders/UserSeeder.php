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
                "name" => "Indra Ibrahim",
                "email" => "indra@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 1
            ],
            [
                "name" => "Raden M Ilham",
                "email" => "ilham@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 2
            ],
            [
                "name" => "Akub Zainal",
                "email" => "akub@gmail.com",
                "email_verified_at" => now(),
                "password" => Hash::make("admin"),
                "role_id" => 3
            ],
            [
                "name" => "Andi Rochman",
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
