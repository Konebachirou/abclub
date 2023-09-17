<?php

namespace App\Http\Controllers\abclub;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function events()
    {
        $events = Event::orderby('id', 'desc')->get();
        $reseaux = Event::withPoleName('Pôle Réseau')->get();
        $amids = Event::withPoleName('Pôle AMID')->get();
        $nmss = Event::withPoleName('Pôle Meet & Share')->get();
        return view('users.events.event', ['events' => $events, 'reseaux' => $reseaux, 'amids' => $amids, 'nmss' => $nmss]);
    }

    public function eventsDatails(string $title)
    {
        $event = Event::where('title', $title)->first();
        return view('users.events.event_detail', ['event$event' => $event]);
    }
}