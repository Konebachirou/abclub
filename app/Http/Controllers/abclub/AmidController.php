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
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;

class AmidController extends Controller
{
    public function about()
    {
        $partners = Partner::withPoleName('Pôle AMID')->get();
        $ongletActif = 'amid';
        return view('users.amid.about', ['partners' => $partners, 'ongletActif' => $ongletActif]);
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
        $partners = Partner::withPoleName('Pôle AMID')->get();

        return view('users.business.ane', ['slides' => $slides, 'partners' => $partners, 'winners' => $winners, 'ongletActif' => $ongletActif]);
    }

    public function anp()
    {
        $ongletActif = 'amid';
        $partners = Partner::withPoleName('Pôle AMID')->get();
        // dd($partners);
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

        $ane = Ane::create($request->all());

        // Enregistrement du fichier (image ou vidéo)
        if ($request->hasFile('lien_video_presentation')) {
            $fichier = $request->file('lien_video_presentation');
            $nomFichier = time() . '_' . $fichier->getClientOriginalName();
            $fichier->storeAs('public/amid', $nomFichier); // Stocker dans le dossier "storage/app/public/fichiers"

            // Mettez à jour le champ 'fichier' dans le modèle avec le nom du fichier
            $ane->update(['lien_video_presentation' => $nomFichier]);
        }
        // Générez le PDF et retournez la réponse avec téléchargement
        return $this->generatePdfAndDownload($ane);
    }

    protected function generatePdfAndDownload(Ane $ane)
    {
        return response()->streamDownload(function () use ($ane) {
            echo Pdf::loadHtml(
                Blade::render('pdf', ['record' => $ane])
            )->stream();
        }, 'candidature.pdf');
    }
}
