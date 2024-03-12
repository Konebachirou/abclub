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
        \App\Models\User::factory()->create([
            'firstName' => 'Admin',
            'lastName' => 'ABC',
            'tel' => '0612345678',
            'domaine' => 'Informatique',
            'is_member' => true,
            'is_admin' => true,
            'email' => 'admin@abc.com',
            'password' => bcrypt('ramadan2024@'),
        ]);
        \App\Models\User::factory(15)->create();
        $this->call(FormerPresidentSeeder::class);
        $this->call(PoleSeeder::class);
        $this->call(SlideSeeder::class);

        \App\Models\Report::factory(10)->create();
        \App\Models\Office::factory(10)->create();
        \App\Models\OfficeTeam::factory(10)->create();
        \App\Models\Event::factory(10)->create();
        \App\Models\Conferencier::factory(10)->create();
        \App\Models\Comment::factory(5)->create();

        \App\Models\Partner::factory(10)->create();

        \App\Models\AneWinner::factory(10)->create();
        \App\Models\Job::factory(10)->create();
        \App\Models\UserJob::factory(10)->create();
        \App\Models\UserEvent::factory(10)->create();
    }
}
