<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_barang" => $this->faker->sentence(),
            "harga" => $this->faker->numerify('###000'),
            "stok" => $this->faker->numerify(),
            "id_suplier" => $this->faker->numerify(),

        ];
    }
}
