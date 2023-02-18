<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            AsetSeeder::class,
            CabangSeeder::class,
            KondisiSeeder::class,
            PenempatanSeeder::class,
            UmurEkonomisSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
