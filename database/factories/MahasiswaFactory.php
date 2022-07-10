<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_course'=>$this->faker->numberBetween(1,4),
            'id_domisili'=>$this->faker->numberBetween(1,32),
            'nama'=>$this->faker->name(),
            'nim'=>$this->faker->numerify('202010370311###'),
            'studi'=>$this->faker->jobTitle(),
            'phone'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->email(),
            'email_kampus'=>$this->faker->email(),
            'web'=>$this->faker->domainName()
        ];
    }
}
