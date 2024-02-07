<?php

namespace App\Http\Controllers;

use App\Mail\abclub\Connect;
use App\Mail\abclub\ConnectSec;
use App\Models\Adhesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class payementController extends Controller
{
    public function checkoutfinish()  {
        $ongletActif = 'accueil';
        return view('users.global.connect_checkout', ['ongletActif' => $ongletActif]);
    }

    public function payer(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'EUR',
                            'product_data' => [
                                'name' => 'Frais adhésion African Business Club',
                                'images' => [
                                    "https://www.africanbusinessclub.org/storage/partenaire/pay.png"
                                ]
                            ],
                        'unit_amount' => 4000 ,
                    ],
                    'quantity' => 1,
                ]
            ],
            'mode' => 'payment',
            'invoice_creation' => ['enabled' => true],
            'success_url' => route('payerSucces_link', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('home_link', [], true),
        ]);
        return redirect($session->url);
    }

    public function payerSucces(Request $request)
    {
         Adhesion::create([
            'user_id' => Auth::user()->id,
            'num_payement' => $request->session_id,
        ]);
        Mail::to('data_it@abclub-paris.com')->send(new Connect());
        Mail::to('african.business_club@abclub-paris.com')->send(new ConnectSec());
        return redirect(route('felicitation_link'));
            
    }
      
}
