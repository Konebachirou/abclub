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
        $selects = [
            "Agriculture",
            "Automobile",
            "Aérospatiale",
            "Biotechnologie",
            "Chimie",
            "Construction",
            "Électronique",
            "Énergie (y compris l'énergie renouvelable)",
            "Finance",
            "Hôtellerie et tourisme",
            "Informatique",
            "Industrie pharmaceutique",
            "Médias et divertissement",
            "Métallurgie",
            "Pétrole et gaz",
            "Santé",
            "Services financiers",
            "Technologies de l'information",
            "Télécommunications",
            "Textile et habillement",
            "Transport et logistique"
        ];
        // Déterminer l'onglet actif
        $ongletActif = 'amid';
        return view('users.business.ane_form', [
            'ongletActif' => $ongletActif,
            'selects' => $selects,
        ]);
    }
    public function store(AneRequest $request)
    {

        Ane::create($request->all());
        $path =  $request->file('lien_video_presentation')->store('public/anes');
        $request["image"] = $path;

        return redirect('/amid/ane');
    }
}
