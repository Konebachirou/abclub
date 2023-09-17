<?php

namespace App\Http\Controllers\abclub;

use App\Http\Controllers\Controller;
use App\Models\Pole;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $poles = Pole::orderby('id', 'desc')->get();
        $slides = Slide::orderby('id', 'desc')->get();
        return view('users.global.home', ['poles' => $poles, 'slides' => $slides]);
    }
}