<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\domisili>
 */
class DomisiliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_provinsi' => $this->faker->numberBetween(1,32),
            'id_ibukota' => $this->faker->numberBetween(1,32),
        ];
    }
}
