<?php

namespace App\Http\Controllers\abclub;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\NewsletterSubscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\abclub\ContactNotification;
use App\Http\Requests\abclub\ContactRequest;
use App\Mail\abclub\NewslettersNotification;
use App\Mail\abclub\AdminContactNotification;
use App\Http\Requests\abclub\NewsletterSubscriberRequest;

class ContactController extends Controller
{
    public function contact()
    {
        // Déterminer l'onglet actif
        $ongletActif = 'contact';
        return view('users.global.contact', ['ongletActif' => $ongletActif]);
    }
    public function sendContact(ContactRequest $request)
    {
        //$data = $request->except('g-recaptcha-response');
      	$request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $contact = Contact::create($data);
        Mail::to($request->email)->send(new ContactNotification($contact));
        Mail::to('contact.site@abclub-paris.com')->send(new AdminContactNotification($contact));
        return redirect()->back()->with('success', 'Votre message a bien été envoyé');
    }

    public function newsLetters(NewsletterSubscriberRequest $request)
    {
        //$data = $request->except('g-recaptcha-response');
      	$request->validate([
            'g-recaptcha-response' => 'required|captcha',
        ]);
        $newsletterSubscriber = NewsletterSubscriber::create($data);
        Mail::to($request->email)->send(new NewslettersNotification($newsletterSubscriber));

        return redirect()->back()->with('success', 'Votre inscription a bien été prise en compte');
    }
}
