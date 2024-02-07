<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $visitor = $request->cookie('visitor');
		$data = $request->except('g-recaptcha-response');

        if (!$visitor) {
            // Le visiteur n'est pas enregistré, générez un nouvel identifiant
            $visitor = uniqid();
            // Récupérer l'adresse IP du visiteur
            $ip = $request->ip();
            // Utiliser la bibliothèque Location pour obtenir des informations sur l'adresse IP
            $location = Location::get();
            //$location = Location::get($ip);

            // Ajoutez les informations obtenues à votre logique de suivi des visiteurs
            $country = $location->countryCode ?? 'N/A';
            $city = $location->cityName ?? 'N/A';
            // Enregistrez le visiteur dans la base de données
            Visitor::create([
                'visitor' => $visitor,
                'ip' => $ip,
                'country' => $country,
                'city' => $city
            ]);

            // Stockez l'identifiant dans un cookie et continuez la requête
            $response = $next($request);
            return $response->cookie('visitor', $visitor);
        }

        // Le visiteur est déjà enregistré, continuez la requête
        return $next($request);
    }
}
