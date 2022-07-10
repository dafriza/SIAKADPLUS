<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\provinsi>
 */
class ProvinsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    // protected $model = provinsi::class;
    public function definition()
    {
        return [
            'nama_provinsi' => $this->faker->state()
        ];
    }
}
