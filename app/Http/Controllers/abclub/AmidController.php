<?php

namespace App\Http\Controllers\abclub;

use Carbon\Carbon;
use App\Models\Ane;
use App\Models\Event;
use App\Models\Slide;
use App\Models\Partner;
use App\Models\AneWinner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\abclub\AneRequest;

class AmidController extends Controller
{
    public function about()
    {
        $ongletActif = 'amid';
        return view('users.amid.about', ['ongletActif' => $ongletActif]);
    }

    public function ane()
    {
        $slides = Slide::orderby('id', 'desc')->get();
        $ongletActif = 'amid';

        $year = Carbon::now()->year;

        $winners = AneWinner::whereYear('year', $year)
            ->where('status', true)
            ->orderBy('rating', 'asc') // Trie par rating croissant (le rang)
            ->take(3)
            ->get();
        return view('users.business.ane', ['slides' => $slides, 'winners' => $winners, 'ongletActif' => $ongletActif]);
    }

    public function anp()
    {
        $ongletActif = 'amid';
        $partners = Partner::withPoleName('Pôle AMID')->get();
        $conferences = Event::orderby('id', 'desc')->where('is_event', false)->get();
        return view('users.business.anp', ['ongletActif' => $ongletActif, 'partners' => $partners, 'conferences' => $conferences]);
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
