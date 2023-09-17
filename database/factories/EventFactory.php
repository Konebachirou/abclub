<?php

namespace Database\Factories;

use App\Models\Pole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'illustration' => fake()->imageUrl(),
            'description' => fake()->paragraph(),
            'is_active' => fake()->boolean(),
            'is_free' => fake()->boolean(),
            'pole_id' => Pole::all()->random()->id,
            'lieu' => fake()->city(),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'start_times' => fake()->time(),
            'end_times' => fake()->time(),
            'Number_of_place' => fake()->numberBetween(1, 100),
        ];
    }
}
