<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matkul>
 */
class MatkulFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nim' => $this->faker->unique()->numerify('##########'),
        'nama' => $this->faker->name(),
        'matkul' => $this->faker->randomElement(['Rekayasa Web', 'Mobile App','Grid','Mechin Learning','IOT']),
    ];
    }
}
