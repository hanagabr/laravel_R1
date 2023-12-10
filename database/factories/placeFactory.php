<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\place>
 */
class placeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'from' => fake()->numberBetween($min= 60, $max= 100),
            'to' => fake()->numberBetween($min= 100, $max= 500),
            'rate' => fake()->numberBetween($min= 60, $max= 100),
            'shortdesc' => fake()->text(),
            'name' => fake()->name(),
            'image' => fake()->imageurl(800,600),


        ];
    }
}
