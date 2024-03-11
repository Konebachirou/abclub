<?php

namespace Database\Factories;

use App\Models\Pole;
use App\Models\Conferencier;
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
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'is_active' => true,
            'is_paid' => false,
            'Number_of_place' => fake()->numberBetween(100, 1000),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'start_times' => fake()->time(),
            'end_times' => fake()->time(),
            'payment_link' => fake()->url(),
            'lieu' => fake()->city(),
            'conferencier_id' => Conferencier::all()->random()->id,
            'pole_id' => Pole::all()->random()->id
        ];
    }
}
