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
        return view('users.global.contact');
    }
    public function sendContact(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());
        Mail::to($request->email)->send(new ContactNotification($contact));
        //Mail::to('admin_email')->send(new AdminContactNotification($contact));
        return redirect()->back()->with('success', 'Votre message a bien été envoyé');
    }

    public function newsLetters(NewsletterSubscriberRequest $request)
    {
        $newsletterSubscriber = NewsletterSubscriber::create($request->validated());
        Mail::to($request->email)->send(new NewslettersNotification($newsletterSubscriber));

        return redirect()->back()->with('success', 'Votre inscription a bien été prise en compte');
    }
}
