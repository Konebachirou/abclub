<?php

namespace Database\Factories;

use App\Models\Pole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence($nbWords = 15, $variableNbWords = true),
            'description' => fake()->paragraph(nbSentences: 8),
            'illustration' => fake()->imageUrl(),
            'caption' => fake()->sentence(),
            'status' => fake()->boolean(),
            'date' => fake()->date(),
            'pole_id' => Pole::all()->random()->id,
            'is_report' => fake()->boolean(),
            'is_action' => fake()->boolean(),
        ];
    }
}
