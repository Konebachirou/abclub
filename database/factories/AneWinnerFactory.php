<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AneWinner>
 */
class AneWinnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'team_name' => fake()->firstName() . ' ' . fake()->lastName(),
            'team_picture' => fake()->imageUrl(),
            'description' => fake()->paragraph(3),
            'rating' => fake()->randomElement([1, 2, 3, 4, 5, 6]),
            'year' => fake()->date(),
        ];
    }
}
