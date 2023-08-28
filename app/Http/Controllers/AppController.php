<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;
class AppController extends Controller
{
    public function Home(){
        $poles = [
                (object)[
                'id' => "1",
                    'icon' => "service-01.png",
                    'name' => 'Pôle Réseau',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
               (object) [
                'id' =>"2",
                'icon' => "service-02.png",
                    'name' => 'Pôle AMID',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
               (object) [
                'id' =>'3',
                'icon' => "service-03.png",
                    'name' => 'Pôle Abc Connect',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
               (object) [
                'id' =>'4',
                'icon' => "service-04.png",
                    'name' => 'Pôle Meet & Share',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
               (object) [
                'id' =>'5',
                'icon' => "service-05.png",
                    'name' => 'Pôle Data Management & IT',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
                (object) [
                'id' =>'6',
                    'icon' => "service-04.png",
                    'name' => 'Pôle media',
                    'color'=>'',
                    'desc' => "",
                    'resume' => "English Learning looking for random paragraphs, you've come to the right place. When a random word."
    
                ],
            ];

        $slides = [
            (object) [
                        'id' =>'6',
                        'img' => "images/banner/Accueil3.png",
                        'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                ],
            (object) [
                        'id' =>'6',
                        'img' => "images/banner/Accueil5.png",
                        'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                ],
            (object) [
                        'id' =>'6',
                        'img' => "images/banner/Accueil2.png",
                        'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
                    ],
        ];

        return view('users.global.home', compact('poles', 'slides'));
    }

    public function About(){

       $lastpresident = [
        (object)[
                'name' => "Ibrahim MAGASSA",
                'periode' => '2003-2006',
                'image'=>'team5.png'

            ],
            (object)[
                'name' => "Malick DIABATE",
                'periode' => '2022-2023',
                'image'=>''

            ],
           (object) [
                'name' => "Malick DIABATE",
                'periode' => '2021-2022',
                'image'=>''

            ],
           (object) [
                'name' => "Jany-Lyse ENGOTTO",
                'periode' => '2020-2021',
                'image'=>''

            ],
           (object) [
                'name' => "Florian ADONIS",
                'periode' => '2019-2020',
                'image'=>''

            ],
           (object) [
                'name' => "Yann-Ange KOUASSI",
                'periode' => '2018-2019',
                'image'=>''

            ],(object) [
                'name' => "Elysée JOHNSON",
                'periode' => '2016-2018',
                'image'=>''

            ],
           (object) [
                'name' => " Esther NDIMBA",
                'periode' => '2015-2016',
                'image'=>''

            ],(object) [
                'name' => "William LIBITE",
                'periode' => '2014-2015',
                'image'=>''

            ],
           (object) [
                'name' => "Elsa NANTCHOUANG",
                'periode' => '2013-2014',
                'image'=>''

            ],(object) [
                'name' => "Maité YOG",
                'periode' => '2011-2013',
                'image'=>''

            ],
           (object) [
                'name' => "Danick SONWA",
                'periode' => '2010-2011',
                'image'=>''

            ],(object) [
                'name' => "Yannick TAMAZE",
                'periode' => '2009-2010',
                'image'=>''

            ],
           (object) [
                'name' => "Mensah Kouam KAMDEM",
                'periode' => '2008-2009',
                'image'=>''

            ],(object) [
                'name' => "Aubin Setié KONAN",
                'periode' => '2007-2008',
                'image'=>''

            ],
           (object) [
                'name' => "Eva MARONE",
                'periode' => '2006-2007',
                'image'=>''

            ],
        ];
        return view('users.global.about', compact('lastpresident'));
    }

    public function Contact(){
        return view('users.global.contact');
    }

    public function News(){
        return view('users.news.news');
    }

    public function Events(){
        return view('users.events.event');
    }
}
