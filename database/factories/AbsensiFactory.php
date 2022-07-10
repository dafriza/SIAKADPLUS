<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\absensi>
 */
class AbsensiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tanggal_absen' => $this->faker->dateTimeBetween('-1 week', '+2 week'),
            'id_mahasiswa' => $this->faker->numberBetween(1,100),
            'id_course' => $this->faker->numberBetween(1,4),
        ];
    }
}
