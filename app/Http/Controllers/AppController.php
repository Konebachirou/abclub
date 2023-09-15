<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class AppController extends Controller
{
    public function Home()
    {
        $poles = [
            (object)[
                'id' => "1",
                'icon' => "service-01.png",
                'name' => 'Pôle Réseau',
                'color' => '',
                'desc' => "Ce pôle est chargé d'organiser les événements de networking et 
                la communication entre nos alumnis, nos membres et nos adhérents."

            ],
            (object) [
                'id' => "2",
                'icon' => "service-02.png",
                'name' => 'Pôle AMID',
                'color' => '',
                'desc' => "L'Africa Mobility and Innovation Days est un forum qu'organise l'African 
                Business Club autour de deux thématiques principales, le recrutement
                 des talents installés en Europe pour les marchés africains et l'entrepreneuriat."

            ],
            (object) [
                'id' => '3',
                'icon' => "service-03.png",
                'name' => 'Pôle Abc Connect',
                'color' => '',
                'desc' => "L'ABC Connect est le réseau des adhérents de l'African Business Club.
                 Ce pôle est également chargé de promouvoir les opportunités de partenariats 
                 et le retour d'expérience de modèles africains."

            ],
            (object) [
                'id' => '4',
                'icon' => "service-04.png",
                'name' => 'Pôle Meet & Share',
                'color' => '',
                'desc' => "ce pôle a en charge l'organisation de tables rondes autour
                 d'un thème en rapport avec l'Afrique et en faisant appel à des experts du domaine."

            ],
            (object) [
                'id' => '5',
                'icon' => "service-05.png",
                'name' => 'Pôle Data Management & IT',
                'color' => '',
                'desc' => "Ce pôle gère l'ensemble des outils digitaux de l'African 
                Business Club et participe à l'amélioration de l'offre proposée par l'association, via l'exploitation 
                des informations recueillies sur nos événements et canaux de communication."

            ],
            (object) [
                'id' => '6',
                'icon' => "service-04.png",
                'name' => 'Pôle media',
                'color' => '',
                'desc' => "Ce pôle met en lumière les activités de notre association
                 et est chargé du marketing, de la
                 communication, de la gestion du podcast et de la relation presse."

            ],
        ];

        $slides = [
            (object) [
                'id' => '6',
                'img' => "images/banner/Accueil3.png",
                'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
            ],
            (object) [
                'id' => '6',
                'img' => "images/banner/Accueil5.png",
                'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
            ],
            (object) [
                'id' => '6',
                'img' => "images/banner/Accueil2.png",
                'desc' => "Construisez votre carrière avec<br /> <strong
                        class='color-white'>l'African Business Club</strong></h1>",
            ],
        ];

        return view('users.global.home', compact('poles', 'slides'));
    }

    // public function About()
    // {

    //     $lastpresident = [
    //         (object)[
    //             'name' => "Ibrahim MAGASSA",
    //             'periode' => '2003-2006',
    //             'image' => 'team5.png'

    //         ],
    //         (object)[
    //             'name' => "Malick DIABATE",
    //             'periode' => '2022-2023',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Malick DIABATE",
    //             'periode' => '2021-2022',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Jany-Lyse ENGOTTO",
    //             'periode' => '2020-2021',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Florian ADONIS",
    //             'periode' => '2019-2020',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Yann-Ange KOUASSI",
    //             'periode' => '2018-2019',
    //             'image' => ''

    //         ], (object) [
    //             'name' => "Elysée JOHNSON",
    //             'periode' => '2016-2018',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => " Esther NDIMBA",
    //             'periode' => '2015-2016',
    //             'image' => ''

    //         ], (object) [
    //             'name' => "William LIBITE",
    //             'periode' => '2014-2015',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Elsa NANTCHOUANG",
    //             'periode' => '2013-2014',
    //             'image' => ''

    //         ], (object) [
    //             'name' => "Maité YOG",
    //             'periode' => '2011-2013',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Danick SONWA",
    //             'periode' => '2010-2011',
    //             'image' => ''

    //         ], (object) [
    //             'name' => "Yannick TAMAZE",
    //             'periode' => '2009-2010',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Mensah Kouam KAMDEM",
    //             'periode' => '2008-2009',
    //             'image' => ''

    //         ], (object) [
    //             'name' => "Aubin Setié KONAN",
    //             'periode' => '2007-2008',
    //             'image' => ''

    //         ],
    //         (object) [
    //             'name' => "Eva MARONE",
    //             'periode' => '2006-2007',
    //             'image' => ''

    //         ],
    //     ];
    //     return view('users.global.about', compact('lastpresident'));
    // }

    // public function Contact()
    // {
    //     return view('users.global.contact');
    // }

    public function News()
    {
        return view('users.news.news');
    }

    public function Events()
    {
        return view('users.events.event');
    }

    public function Action()
    {
        return view('users.global.action');
    }

    public function Login()
    {
        return view('users.auth.login');
    }
    public function Register()
    {
        return view('users.auth.register');
    }

    public function ForgotPassword()
    {
        return view('users.auth.forgotpassword');
    }

    public function NewsDatails()
    {
        return view('users.news.news_detail');
    }
    public function EventsDatails()
    {
        return view('users.events.event_detail');
    }


    public function Profil()
    {
        return view('users.user_dashboard.info');
    }
    public function Dashboard()
    {
        return view('users.user_dashboard.home');
    }
    public function MyEvents()
    {
        return view('users.user_dashboard.my_event');
    }
    public function Setting()
    {
        return view('users.user_dashboard.setting');
    }
}