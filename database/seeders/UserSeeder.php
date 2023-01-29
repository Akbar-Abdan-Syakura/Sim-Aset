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
            ]
        ];

        foreach ($dataUser as $key => $value) {
            User::create($value);
        }
    }
}
