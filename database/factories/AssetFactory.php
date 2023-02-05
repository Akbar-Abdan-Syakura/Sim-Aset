<?php

namespace Database\Factories;

use App\Models\tb_aset;
use App\Services\GenerateKodeAssetService;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    protected $model = tb_aset::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "kd_aset" => GenerateKodeAssetService::getGeneratedKode(),
            "nama" => $this->faker->name(),
            'tgl_perolehan' => $this->faker->dateTimeBetween(),
            "cabang_id" => $this->faker->numberBetween(1, 10),
            "penempatan_id" => $this->faker->numberBetween(1, 24),
            "spek" => $this->faker->text(),
            "qty" => $this->faker->numberBetween(1, 100),
            "umur_ekonomis_id" => $this->faker->numberBetween(1, 3),
            "kondisi_id" => $this->faker->numberBetween(1, 4),
            "harga" => $this->faker->numberBetween(100000, 1000000),
        ];
    }
}
