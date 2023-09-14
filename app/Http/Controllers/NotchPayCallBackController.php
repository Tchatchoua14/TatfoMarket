<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use NotchPay\NotchPay;
use NotchPay\Payment;

class NotchPayCallBackController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): RedirectResponse
    {
        //
          // @ToDO Mis a jour de la commande dans votre base de données
          NotchPay::setApiKey('sb.Cdo6b4O77BATFtsPUCxlp3buDWtAjqQSV7hXX8fHSBkXC724BO9ncKwxKGfUIqQpsoYojcFYqJAr6GjfUgJ0XVGw1mEI2I4zg00bzfHx8K5mynoKRMXLNiwDLGTyw');
          $verifyTransaction = Payment::verify($request->get('reference'));
   
   
          if ($verifyTransaction->transaction->status === 'canceled') {
              session()->flash('success', __('Votre achat a été annulé veuillez relancer si vous souhaitez payer votre produit, Merci.'));
          } else {
              // @ToDO Envoie de mail de remerciement pour l'achat' de l'utilisateur qui est dans la base de données
   
              session()->flash('success', __('Votre achat a été effectué avec succès, Merci pour votre confiance.')); 
          }
   
   
          return redirect(route('cart.list')); 
    }
}
