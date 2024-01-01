<?php

namespace App\Http\Controllers\abclub;

use App\Models\Office;
use Illuminate\Http\Request;
use App\Models\FormerPresident;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'about';
        $lastPresidents = FormerPresident::orderby('id', 'desc')->get();
        // dd($lastPresidents);
        $office = Office::orderby('id', 'desc')->first();
        // dd($office);
        return view('users.global.about', ['lastPresidents' => $lastPresidents, 'office' => $office, 'ongletActif' => $ongletActif]);
    }
}
