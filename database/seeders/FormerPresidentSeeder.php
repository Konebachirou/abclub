<?php

namespace Database\Seeders;

use App\Models\FormerPresident;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FormerPresidentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormerPresident::insert([
            [
                'first_name' => "ERNEST ",
                'last_name' => "Caesar D'OLIVEIRA",
                'image' => 'ernest.png',
                'start_date' => '2022',
                'end_date' => '2023',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "DIABATE",
                'last_name' => "Malick",
                'image' => 'malick.png',
                'start_date' => '2021',
                'end_date' => '2022',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "ENGOTTO",
                'last_name' => "Jany-Lyse",
                'image' => 'jany.png',
                'start_date' => '2020',
                'end_date' => '2021',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "ADONIS",
                'last_name' => "Florian",
                'image' => 'florant.png',
                'start_date' => '2019',
                'end_date' => '2020',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "KOUASSI",
                'last_name' => "Yann-Ange",
                'image' => 'yann.png',
                'start_date' => '2018',
                'end_date' => '2019',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "JOHNSON",
                'last_name' => "Elysée",
                'image' => 'johnson.png',
                'start_date' => '2016',
                'end_date' => '2018',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "NDIMBA",
                'last_name' => "Esther",
                'image' => 'ester.png',
                'start_date' => '2015',
                'end_date' => '2016',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "LIBITE",
                'last_name' => "William",
                'image' => 'wiliam.png',
                'start_date' => '2014',
                'end_date' => '2015',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "NANTCHOUANG",
                'last_name' => "Elsa",
                'image' => 'elsa.png',
                'start_date' => '2013',
                'end_date' => '2014',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "YOG",
                'last_name' => "Maité",
                'image' => 'yog.png',
                'start_date' => '2011',
                'end_date' => '2013',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "SONWA",
                'last_name' => "Danick",
                'image' => 'danick.png',
                'start_date' => '2011',
                'end_date' => '2012',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "TAMAZE",
                'last_name' => "Yannick",
                'image' => 'tamaze.png',
                'start_date' => '2009',
                'end_date' => '2010',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "KAMDEM",
                'last_name' => "Mensah Kouam",
                'image' => 'mensa.png',
                'start_date' => '2008',
                'end_date' => '2009',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "KONAN",
                'last_name' => "Aubin Setié",
                'image' => 'aubin.png',
                'start_date' => '2007',
                'end_date' => '2008',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [

                'first_name' => "MARONE",
                'last_name' => "Eva",
                'image' => 'eva.png',
                'start_date' => '2006',
                'end_date' => '2007',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'first_name' => "MAGASSA",
                'last_name' => "Ibrahim",
                'image' => 'magassa.png',
                'start_date' => '2003',
                'end_date' => '2006',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}