<?php

namespace App\Http\Controllers\abclub;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Conferencier;

class EventController extends Controller
{
    public function events()
    {
          // Déterminer l'onglet actif
        $ongletActif = 'event';
        $events = Event::orderby('id', 'desc')->get();
        $reseaux = Event::withPoleName('Pôle Réseau')->get();
        $amids = Event::withPoleName('Pôle AMID')->get();
        $nmss = Event::withPoleName('Pôle Meet & Share')->get();
        return view('users.events.event', ['events' => $events, 'reseaux' => $reseaux, 'amids' => $amids, 'nmss' => $nmss, 'ongletActif' => $ongletActif]);
    }

    public function eventsDatails(string $title)
    {
        $event = Event::where('title', $title)->first();
        $conferencier = Conferencier::where('event_id',$event->id)->get();
        // dd($event);
        return view('users.events.event_detail', ['event' => $event,'conferencier' => $conferencier]);
    }
}