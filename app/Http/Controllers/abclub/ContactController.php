<?php

namespace App\Http\Controllers\abclub;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\abclub\ContactNotification;
use App\Mail\abclub\NewslettersNotification;
use App\Mail\abclub\AdminContactNotification;


class ContactController extends Controller
{
    public function contact()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'contact';
        return view('users.global.contact', ['ongletActif' => $ongletActif]);
    }
    public function sendContact(Request $request)
    {
        //$data = $request->except('g-recaptcha-response');
        $request->validate(
            [
                'full_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email'],
                'subject' => ['required', 'string', 'max:255'],
                'message' => ['required', 'string'],
                'g-recaptcha-response' => 'required|captcha',
            ],
            [
                'g-recaptcha-response.required' => 'Veuillez confirmer que vous n\'etes pas un robot',
                'g-recaptcha-response.captcha' => 'Echec lors de la validation du captcha',
            ]
        );
        $contact_exept = $request->except('g-recaptcha-response');
        $contact = Contact::create($contact_exept);
        Mail::to($request->email)->send(new ContactNotification($contact));
        Mail::to('contact.site@abclub-paris.com')->send(new AdminContactNotification($contact));
        return redirect()->back()->with('success', 'Votre message a bien été envoyé');
    }


    public function newsLetters(Request $request)
    {
        //$data = $request->except('g-recaptcha-response');
        $request->validate(
            [
                'email' => 'required|email|unique:newsletter_subscribers',
                'g-recaptcha-response' => 'required|captcha',
            ],
            [
                'email.unique' => 'Cet email est déjà inscrit',
                'g-recaptcha-response.required' => 'Veuillez confirmer que vous n\'etes pas un robot',
                'g-recaptcha-response.captcha' => 'Echec lors de la validation du captcha',
            ]

        );

        $newsletter_exept = $request->except('g-recaptcha-response');
        $newsletter = NewsletterSubscriber::create($newsletter_exept);

        Mail::to($request->email)->send(new NewslettersNotification($newsletter));

        return redirect()->back()->with('success', 'Votre inscription a bien été prise en compte');
    }
}
