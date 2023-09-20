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

        $reports = Report::orderby('id', 'desc')->where('is_report', true)->where('is_action', false)->get();
        $reseaux = Report::withPoleName('Pôle Réseau')->where('is_report', true)->where('is_action', false)->get();
        $amids = Report::withPoleName('Pôle AMID')->where('is_report', true)->where('is_action', false)->get();
        $nmss = Report::withPoleName('Pôle Meet & Share')->where('is_report', true)->where('is_action', false)->get();
        return view('users.news.news', ['reports' => $reports, 'reseaux' => $reseaux, 'amids' => $amids, 'nmss' => $nmss]);
    }

    public function indexActions()
    {
        $actions = Report::orderby('id', 'desc')->where('is_action', true)->where('is_report', false)->take(3)->get();
        return view('users.global.action', ['actions' => $actions]);
    }

    public function details(string $title)
    {
        $new = Report::where('title', $title)->first();
        $similars = Report::latest()->take(3)->get();
        return view('users.news.news_detail', ['new' => $new, 'similars' => $similars]);
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