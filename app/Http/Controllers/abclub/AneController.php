<?php

namespace App\Http\Controllers\abclub;

use App\Models\Ane;
use App\Models\Slide;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\abclub\AneRequest;

class AneController extends Controller
{
    public function ane()
    {
        $slides = Slide::orderby('id', 'desc')->get();
        $ongletActif = 'amid';
        return view('users.business.ane', ['slides' => $slides, 'ongletActif' => $ongletActif]);
    }

    public function postuler()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'amid';
        return view('users.business.ane_form', ['ongletActif' => $ongletActif]);
    }
    public function store(AneRequest $request)
    {

        Ane::create($request->all());
        $path =  $request->file('lien_video_presentation')->store('public/anes');
        $request["image"] = $path;

        return redirect('/amid/ane');
    }
}
