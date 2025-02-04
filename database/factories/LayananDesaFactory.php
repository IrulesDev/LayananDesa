<?php

namespace Database\Factories;

use App\Models\PengajuanLayanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\layananDesa>
 */
class LayananDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->name(),
            'pengajuan_id' => PengajuanLayanan::all()->random()->id
        ];
    }
}
