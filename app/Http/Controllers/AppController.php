<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function Home(){
        return view('users.global.home');
    }

    public function About(){

       $lastpresident= [
            [
                'name' => "Ibrahim MAGASSA",
                'periode' => '2003-2006',
                'image'=>'team5.png'

            ],
            [
                'name' => "Malick DIABATE",
                'periode' => '2022-2023',
                'image'=>''

            ],
            [
                'name' => "Malick DIABATE",
                'periode' => '2021-2022',
                'image'=>''

            ],
            [
                'name' => "Jany-Lyse ENGOTTO",
                'periode' => '2020-2021',
                'image'=>''

            ],
            [
                'name' => "Florian ADONIS",
                'periode' => '2019-2020',
                'image'=>''

            ],
            [
                'name' => "Yann-Ange KOUASSI",
                'periode' => '2018-2019',
                'image'=>''

            ], [
                'name' => "Elysée JOHNSON",
                'periode' => '2016-2018',
                'image'=>''

            ],
            [
                'name' => " Esther NDIMBA",
                'periode' => '2015-2016',
                'image'=>''

            ], [
                'name' => "William LIBITE",
                'periode' => '2014-2015',
                'image'=>''

            ],
            [
                'name' => "Elsa NANTCHOUANG",
                'periode' => '2013-2014',
                'image'=>''

            ], [
                'name' => "Maité YOG",
                'periode' => '2011-2013',
                'image'=>''

            ],
            [
                'name' => "Danick SONWA",
                'periode' => '2010-2011',
                'image'=>''

            ], [
                'name' => "Yannick TAMAZE",
                'periode' => '2009-2010',
                'image'=>''

            ],
            [
                'name' => "Mensah Kouam KAMDEM",
                'periode' => '2008-2009',
                'image'=>''

            ], [
                'name' => "Aubin Setié KONAN",
                'periode' => '2007-2008',
                'image'=>''

            ],
            [
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
}
