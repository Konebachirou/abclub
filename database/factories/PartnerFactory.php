<?php

namespace Database\Factories;

use App\Models\Pole;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'logo' =>  fake()->imageUrl(),
            'website' => fake()->url(),
            'description' => fake()->paragraph(2.5),
            //'pole_id' => Pole::all()->random()->id
        ];
    }
}
