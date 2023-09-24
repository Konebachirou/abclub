<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\FormerPresidentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(15)->create();
        $this->call(FormerPresidentSeeder::class);
        $this->call(PoleSeeder::class);
        $this->call(SlideSeeder::class);


        \App\Models\Report::factory(30)->create();
        \App\Models\Office::factory(5)->create();
        \App\Models\OfficeTeam::factory(10)->create();
        \App\Models\Event::factory(50)->create();
        \App\Models\Conferencier::factory(30)->create();

        \App\Models\Comment::factory(150)->create();
        \App\Models\Partner::factory(30)->create();
    }
}