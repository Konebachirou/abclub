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
        $this->call(FormerPresidentSeeder::class);

        \App\Models\Office::factory(5)->create();
        \App\Models\OfficeTeam::factory(10)->create();
    }
}
