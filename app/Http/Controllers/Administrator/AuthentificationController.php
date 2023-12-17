<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthentificationController extends Controller
{
    public function signin()
    {
        $ongletActif = 'profil';
        
        return view('users.auth.login',[
            'ongletActif' => $ongletActif,
        ]);
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function Register(){
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
        $ongletActif = 'profil';
        return view('users.auth.register',[
            'ongletActif' => $ongletActif,
            'selects' => $selects,
        ]);
    }
}
