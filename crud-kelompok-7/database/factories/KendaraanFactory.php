<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomor_polisi' => fake()->unique()->regexify('[A-Z]{1}[0-9]{4}[A-Z]{2}'),
            'merek' => fake()->words(1, true),
            'tipe' => fake()->words(1, true),
            'kategori' => fake()->words(2, true),
            'tahun' => fake()->numberBetween(1000, 2026),
            'warna' => fake()->safeColorName()
        ];
    }
}
