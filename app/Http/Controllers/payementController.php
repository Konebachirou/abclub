<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class payementController extends Controller
{
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
                                    // "https://www.africanbusinessclub.org/storage/report/01HM040NXMT634DE0QCGBTZ6T4.png",
                                    "http://127.0.0.1:8000/storage/report/01HM040NXMT634DE0QCGBTZ6T4.png"
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
         // Traitez les informations du paiement réussi ici
         $paymentIntent = $request->input('data.object');
         dd($paymentIntent);
    }
}
