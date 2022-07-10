<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(1),
            'sub_title'=> $this->faker->sentence(3),
            'img_title'=>$this->faker->imageUrl(651,400,'cats',true),
            'img_content'=>$this->faker->paragraph(),
            'img_mindmap'=>$this->faker->imageUrl(934,567,'cats',true),
            'link'=>$this->faker->url(),
            'harga'=>$this->faker->numberBetween(100000,200000)
        ];
    }
}
