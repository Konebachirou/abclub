<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Actions\User\CreateUserAction;
use App\Http\Requests\Administrator\UserRegsitrationRequest;

class AuthentificationController extends Controller
{
    public function signin()
    {
        $ongletActif = 'profil';

        return view('users.auth.login', [
            'ongletActif' => $ongletActif,
        ]);
    }

    public function authenticate(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('profil');
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

    public function Register()
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
        $ongletActif = 'profil';
        return view('users.auth.register', [
            'ongletActif' => $ongletActif,
            'selects' => $selects,
        ]);
    }

    public function registration(UserRegsitrationRequest $request, CreateUserAction $createUserAction)
    {
        $createUserAction->handle($request->validated());

        Auth::attempt($request->only('email', 'password'));

        $request->session()->regenerate();

        return redirect()->intended('profil');
    }
}
