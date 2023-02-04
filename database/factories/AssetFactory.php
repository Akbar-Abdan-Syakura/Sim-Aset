<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "kd_aset" => "kode_" . $this->faker->unique()->randomNumber(),
            "nama" => $this->faker->name()
        ];
    }
}