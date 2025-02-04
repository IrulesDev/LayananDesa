<?php

namespace Database\Factories;

use App\Models\keluarga;
use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Penduduk::class;
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'keluarga_id' => Keluarga::all()->random()->id,
            'nik' =>fake()->unique()->numerify('#########'),
        ];
    }
}
