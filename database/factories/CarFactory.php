<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'carTitle' => fake()->company(),
            'price' => fake()->numberBetween($min= 6000, $max= 10000),
            'descreption' => fake()->text(),
            'published' => 1,
            'image' => fake()->imageurl(800,600),

        ];
    }
}
