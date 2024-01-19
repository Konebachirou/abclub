<?php

namespace App\Http\Controllers\abclub;

use App\Models\Event;
use App\Models\UserEvent;
use App\Models\Conferencier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function podcast()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'event';
        $events = Event::orderby('id', 'desc')->where('is_event', true)->get();
        // dd($events);
        $reseaux = Event::withPoleName('Pôle Réseau')->get();
        $amids = Event::withPoleName('Pôle AMID')->get();
        $nmss = Event::withPoleName('Pôle Meet & Share')->get();
        return view('users.podcast.index', ['events' => $events, 'reseaux' => $reseaux, 'amids' => $amids, 'nmss' => $nmss, 'ongletActif' => $ongletActif]);
    }

    public function podcastDatails(string $title)
    {
        $ongletActif = 'event';
        $event = Event::where('title', $title)->first();
        $conferencier = Conferencier::where('event_id', $event->id)->get();
        return view('users.podcast.detail', ['event' => $event, 'conferencier' => $conferencier, 'ongletActif' => $ongletActif]);
    }

    public function userEvent(Request $request)
    {
        $event = Event::where('id', $request->event_id)->first();
        UserEvent::create([
            'user_id' => Auth::user()->id,
            'event_id' => $event->id
        ]);
        return redirect($event->payment_link);
    }
}
