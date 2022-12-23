<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Wedstrijd>
 */
class WedstrijdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Datum' => fake()->dateTime,
            'Competitie' => fake()->dateTimeBetween('-2 years', '+1 days')->format('Y'),
            'SpelerWij1' => fake()->numberBetween(1, 10),
            'SpelerWij2' => fake()->numberBetween(1, 10),
            'SpelerWij3' => fake()->numberBetween(1, 10),
            'SpelerZij1' => fake()->numberBetween(1, 10),
            'SpelerZij2' => fake()->numberBetween(1, 10),
            'SpelerZij3' => fake()->numberBetween(1, 10),
            'ScoreWij' => fake()->numberBetween(1, 13),
            'ScoreZij' => fake()->numberBetween(1, 13),
        ];
    }
}
