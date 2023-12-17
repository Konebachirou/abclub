<?php

namespace App\Http\Controllers\abclub;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Pole;
use App\Models\Report;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'accueil';
        $poles = Pole::orderby('id', 'desc')->get();
        $slides = Slide::orderby('id', 'desc')->get();
        $events = Event::orderby('id', 'desc')->take(4)->get();
        $news = Report::orderby('id', 'desc')->where('is_report', true)->where('status', true)->take(3)->get();
        return view('users.global.home', ['poles' => $poles, 'slides' => $slides, 'events' => $events, 'news' => $news, 'ongletActif' => $ongletActif]);
    }

    public function jobs()
    {

        $ongletActif = 'jobs';
        return view('users.jobs.jobs', ['ongletActif' => $ongletActif]);
    }

    public function jobsDetail()
    {

        $ongletActif = 'jobs';
        return view('users.jobs.jobs_detail', ['ongletActif' => $ongletActif]);
    }



    public function anp()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'amid';
        return view('users.business.anp', ['ongletActif' => $ongletActif]);
    }

    public function about()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'amid';
        return view('users.amid.about', ['ongletActif' => $ongletActif]);
    }
}
