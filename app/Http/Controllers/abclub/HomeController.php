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
        $poles = Pole::orderby('id', 'desc')->get();
        $slides = Slide::orderby('id', 'desc')->get();
        $events = Event::orderby('id', 'desc')->take(4)->get();
        $news = Report::orderby('id', 'desc')->where('is_report', true)->where('status', true)->take(3)->get();
        return view('users.global.home', ['poles' => $poles, 'slides' => $slides, 'events' => $events, 'news' => $news]);
    }
}