<?php

namespace Database\Seeders;

use App\Models\Pole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pole::insert([
            [
                'icon' => "service-01.png",
                'name' => 'Pôle Réseau',
                'description' => "Ce pôle est chargé d'organiser les événements de networking et 
                la communication entre nos alumnis, nos membres et nos adhérents.",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-02.png",
                'name' => 'Pôle AMID',
                'description' => "L'Africa Mobility and Innovation Days est un forum qu'organise l'African 
                Business Club autour de deux thématiques principales, le recrutement
                 des talents installés en Europe pour les marchés africains et l'entrepreneuriat.",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-03.png",
                'name' => 'Pôle Abc Connect',
                'description' => "L'ABC Connect est le réseau des adhérents de l'African Business Club.
                 Ce pôle est également chargé de promouvoir les opportunités de partenariats 
                 et le retour d'expérience de modèles africains.",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-04.png",
                'name' => 'Pôle Meet & Share',
                'description' => "ce pôle a en charge l'organisation de tables rondes autour
                 d'un thème en rapport avec l'Afrique et en faisant appel à des experts du domaine.",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'icon' => "service-05.png",
                'name' => 'Pôle Data Management & IT',
                'description' => "Ce pôle gère l'ensemble des outils digitaux de l'African 
                Business Club et participe à l'amélioration de l'offre proposée par l'association, via l'exploitation 
                des informations recueillies sur nos événements et canaux de communication.",
                'created_at' => now(),
                'updated_at' => now()

            ],
            [

                'icon' => "service-04.png",
                'name' => 'Pôle media',
                'description' => "Ce pôle met en lumière les activités de notre association
                 et est chargé du marketing, de la
                 communication, de la gestion du podcast et de la relation presse.",
                'created_at' => now(),
                'updated_at' => now()

            ],
        ]);
    }
}