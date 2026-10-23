<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Kendaraan::create([
            'nomor_polisi' => 'A1234BC',
            'merek' => 'BMW',
            'tipe' => 'M4',
            'kategori' => 'HYPER CAR',
            'tahun' => 2023,
            'warna' => 'Silver'
        ]);

        \App\Models\Kendaraan::factory(20)->create();
    }
}
