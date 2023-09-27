<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class AppController extends Controller
{

    public function ForgotPassword()
    {
        return view('users.auth.forgotpassword');
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
