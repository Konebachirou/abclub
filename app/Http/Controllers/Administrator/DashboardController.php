<?php

namespace App\Http\Controllers\Administrator;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\abclub\ResetPasswordMail;
use App\Http\Requests\Administrator\EditProfileRequest;
use App\Http\Requests\Administrator\EditPasswordRequest;

class DashboardController extends Controller
{
    public function ForgotPassword()
    {
        $ongletActif = 'profil';
        return view('users.auth.forgotpassword', ['ongletActif' => $ongletActif]);
    }

    public  function ResetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $newPassword = "abclub_password_" . time();
            $user->update([
                'password' => Hash::make($newPassword),
            ]);

            Mail::to($user->email)->send(new ResetPasswordMail($user, $newPassword));
            return redirect()->route('login_link');
        } else {
            return back()->with('error', 'Cet email n\'existe pas');
        }
    }

    public function profil()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.info', ['ongletActif' => $ongletActif]);
    }

    public function Dashboard()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.home', ['ongletActif' => $ongletActif]);
    }

    public function MyEvents()
    {
        $ongletActif = 'profil';
        $user = User::where('id', Auth()->user()->id)->first();
        $userEvents = $user->events()->paginate(4);

        return view('users.user_dashboard.my_event', ['ongletActif' => $ongletActif, 'userEvents' => $userEvents]);
    }

    public function Setting()
    {
        $ongletActif = 'profil';
        return view('users.user_dashboard.setting', ['ongletActif' => $ongletActif]);
    }

    public function editProfil(EditProfileRequest $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('images', 'public');
            $user->image = $path;
        } else {
            $user->image = $user->image;
        }

        $user->update([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'tel' => $request->tel,
            'domaine' => $request->domaine,
            'address' => $request->address,
            'image' => $user->image

        ]);

        return back()->with('success', 'Profil mis a jour avec succes');
    }
    public function editPassword(EditPasswordRequest $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->update($request->all());
        return back()->with('success', 'Mot de passe mis a jour avec succes');
    }
    public function MyJobs()
    {
        $ongletActif = 'profil';
        $user = User::where('id', Auth()->user()->id)->first();
        $userJobs = $user->jobs()->paginate(4);
        return view('users.user_dashboard.my_jobs', ['ongletActif' => $ongletActif, 'userJobs' => $userJobs]);
    }
}
