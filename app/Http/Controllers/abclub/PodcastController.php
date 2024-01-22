<?php

namespace App\Http\Controllers\abclub;

use App\Models\Event;
use App\Models\UserEvent;
use App\Models\Conferencier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Podcast;
use Illuminate\Support\Facades\Auth;

class PodcastController extends Controller
{
    public function podcast()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'podcast';
        $podcasts = Podcast::all();
        return view('users.podcast.index', ['podcasts' => $podcasts, 'ongletActif' => $ongletActif]);
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
