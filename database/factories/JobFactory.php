<?php

namespace Database\Factories;

use App\Models\Pole;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $jobTitle = fake()->jobTitle();
        $company = fake()->company();
        return [
            'job_title' => $jobTitle,
            'image' => fake()->imageUrl(),
            'company' => $company,
            'domain' => fake()->randomElement(['Informatique', 'Electronique', 'Automobile', 'Medecine', 'Gestion', 'Commerce', 'Chimie', 'Pharmacie', 'Enseignement', 'Sante']),
            'status' => fake()->randomElement([true, false]),
            'slug' => Str::slug($jobTitle . '-' . $company),
            'job_link' => fake()->url(),
            'type' => fake()->randomElement(['FREELANCE', 'CDI', 'CDD', 'Alternance', 'Stage', 'Intérime']),
            'location' => fake()->city(),
            'company_desc' => fake()->sentence(2, true),
            'mission' => fake()->paragraphs(10, true),
            'pole_id' => Pole::all()->random()->id,
            'diplomes' => fake()->sentence(1, true),
            'experiences' => fake()->sentence(2, true),
            'languages' => fake()->sentence(1, true),
            'competences' => fake()->sentence(2, true),
            'process' => fake()->sentence(2, true),
        ];
    }
}
