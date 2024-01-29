<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Event;
use Stripe\PaymentIntent;

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
         // Traitez les informations du paiement réussi ici
       //$event = Event::constructFrom($request->all());
		//dd($request->session_id,$event);
        // Vérifiez que c'est un événement de paiement réussi
        //if ($event->type === 'payment_intent.succeeded') {
        //    $paymentIntent = $event->data->object;
         //	dd($paymentIntent);
       
      
       	$payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = 'whsec_cYZuWAzPgHIjcmbEAe6Z1VgzutbXInoa'; // Remplacez par votre clé secrète de webhook
		dd($payload, $sigHeader);
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sigHeader, $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            // Signature incorrecte
            return response()->json(['error' => 'Signature incorrecte 1'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Signature incorrecte
            return response()->json(['error' => 'Signature incorrecte 2', 'desc'=> $e], 400);
        }
		dd($event);
        // Traitement spécifique à l'événement
        if ($event->type == 'payment_intent.succeeded') {
            $paymentIntent = $event->data->object; // Contient les informations sur le paiement réussi
            // Ajoutez ici votre logique pour traiter le paiement réussi
        }

        return response()->json(['status' => 'Webhook reçu']);
    }
      
}
