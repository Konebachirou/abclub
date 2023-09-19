<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfficeTeam>
 */
class OfficeTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'image' => 'default.jpg', // You can modify this as needed
            'level' => fake()->word,
            'country' => fake()->country,
            'city' => fake()->city,
            'email' => fake()->unique()->safeEmail,
            'is_active' => true,
            'description' => fake()->paragraph(nbSentences:5),
            'facebook' => 'https://www.facebook.com/' . fake()->userName,
            'linkedin' => 'https://www.linkedin.com/in/' . fake()->userName,
            'twitter' => 'https://twitter.com/' . fake()->userName,
            'instagram' => 'https://www.instagram.com/' . fake()->userName,
            'office_id' => Office::all()->random()->id,
        ];
    }
}
