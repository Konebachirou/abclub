<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function ForgotPassword()
    {
        $ongletActif = 'profil';
        return view('users.auth.forgotpassword',['ongletActif' => $ongletActif]);
    }

    public function profil()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.info',['ongletActif' => $ongletActif]);
    }

    public function Dashboard()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.home',['ongletActif' => $ongletActif]);
    }

    public function MyEvents()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.my_event',['ongletActif' => $ongletActif]);
    }

    public function Setting()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.setting',['ongletActif' => $ongletActif]);
    }

    public function MyJobs()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.my_jobs',['ongletActif' => $ongletActif]);
    }

    
}
