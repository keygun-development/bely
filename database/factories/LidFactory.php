<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lid>
 */
class LidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Voornaam' => fake()->firstName,
            'Achternaam' => fake()->lastName,
            'Gebdatum' => fake()->date,
            'Sterkte' => fake()->numberBetween(1,5),
            'Verkortenaam' => fake()->name
        ];
    }
}
