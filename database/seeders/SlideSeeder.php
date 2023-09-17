<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slide::insert([
            [
                'image' => "images/banner/Accueil3.png",
                'description' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => "images/banner/Accueil5.png",
                'description' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'image' => "images/banner/Accueil2.png",
                'description' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
