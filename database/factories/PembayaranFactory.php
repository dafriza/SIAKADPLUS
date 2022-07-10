<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pembayaran>
 */
class PembayaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tanggal_pembayaran' => $this->faker->dateTimeBetween('-1 month', '+12 month'),
            'id_mahasiswa' => $this->faker->numberBetween(1,100),
            'id_course' => $this->faker->numberBetween(1,4),
        ];
    }
}
