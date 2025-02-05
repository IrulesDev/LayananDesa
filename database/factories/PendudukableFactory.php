<?php

namespace Database\Factories;

use App\Models\LayananDesa;
use App\Models\Penduduk;
use App\Models\PengajuanLayanan;
use App\Models\PerangkatDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pendudukable>
 */
class PendudukableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'penduduk_id' => Penduduk::all()->random()->id,
            'pendudukable_id' =>fake()->randomElement([
                PengajuanLayanan::all()->random()->id,
                PerangkatDesa::all()->random()->id,
                LayananDesa::all()->random()->id,
            ]),
            'layanan_type' =>fake()->randomElement([
                PengajuanLayanan::class,
                PerangkatDesa::class,
                LayananDesa::class,
            ])
        ];
    }
}
