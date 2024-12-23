<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nip' => $this->faker->unique()->numerify('##########'),
        'nama' => $this->faker->name(),
        'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
        'alamat' => $this->faker->address(),
        'tanggal_lahir' => $this->faker->date(),
        'jurusan' => $this->faker->randomElement(['TI', 'SI', 'ILKOM']),
    ];
    }
}
