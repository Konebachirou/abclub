<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Report;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => User::all()->random()->firstName,
            'email' => User::all()->random()->email,
            'report_id' => Report::all()->random()->id,
            'content' => fake()->paragraph(),
            'is_approved' => fake()->boolean(),
            //'parent_id' => Comment::all()->random()->id,
        ];
    }
}
