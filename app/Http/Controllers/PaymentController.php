<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use NotchPay\NotchPay;
use NotchPay\Payment;

class PaymentController extends Controller
{
    /**
     * Handle the incoming request.
     */
 
    public function __construct()
    {
        $this->middleware('auth');
    }

// sb.Cdo6b4O77BATFtsPUCxlp3buDWtAjqQSV7hXX8fHSBkXC724BO9ncKwxKGfUIqQpsoYojcFYqJAr6GjfUgJ0XVGw1mEI2I4zg00bzfHx8K5mynoKRMXLNiwDLGTyw

    public function __invoke(Product $product): RedirectResponse
    {
        //
        NotchPay::setApiKey('sb.Cdo6b4O77BATFtsPUCxlp3buDWtAjqQSV7hXX8fHSBkXC724BO9ncKwxKGfUIqQpsoYojcFYqJAr6GjfUgJ0XVGw1mEI2I4zg00bzfHx8K5mynoKRMXLNiwDLGTyw');

        try {
            $payload = Payment::initialize([
                'amount' => $product->price,
                'email' => Auth::user()->email,
                'name' => Auth::user()->name,
                'currency' => 'XAF',
                'reference' => Auth::id() . '-' . uniqid(),
                'callback' => route('notchpay-callback'),
                'description' => $product->description,
            ]);
 
            return redirect($payload->authorization_url);
        } catch (NotchPay\Exception\ApiException $e) {
            session()->flash('error', __('Impossible de procéder au paiement, veuillez recommencer plus tard. Merci'));
 
            return back();
        } 
        

    }
}
