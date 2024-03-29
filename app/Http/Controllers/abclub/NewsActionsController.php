<?php

namespace App\Http\Controllers\abclub;

use App\Models\Pole;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexNews()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'news';
        $reports = Report::orderby('id', 'desc')->where('is_report', true)->where('is_action', false)->where('status', true)->get();
        $reseaux = Report::withPoleName('Pôle Réseau')->where('is_report', true)->where('is_action', false)->where('status', true)->get();
        $amids = Report::withPoleName('Pôle AMID')->where('is_report', true)->where('is_action', false)->where('status', true)->get();
        $nmss = Report::withPoleName('Pôle Meet & Share')->where('is_report', true)->where('is_action', false)->where('status', true)->get();
        return view('users.news.news', ['reports' => $reports, 'reseaux' => $reseaux, 'amids' => $amids, 'nmss' => $nmss, 'ongletActif' => $ongletActif]);
    }

    public function indexActions()
    {
        $ongletActif = 'about';
        $actions = Report::orderby('id', 'desc')->where('is_action', true)->where('is_report', false)->where('status', true)->take(3)->get();
        return view('users.global.action', ['actions' => $actions, 'ongletActif' => $ongletActif]);
    }

    public function details(string $title)
    {
        $ongletActif = 'news';
        $new = Report::where('title', $title)->first();
        $similars = Report::latest()->take(3)->get();
        $album = $new->album;
        return view('users.news.news_detail', ['new' => $new, 'similars' => $similars,'album' => $album, 'ongletActif' => $ongletActif]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
