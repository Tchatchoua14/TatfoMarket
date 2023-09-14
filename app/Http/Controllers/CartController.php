<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart; 


class CartController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    // +237698500461
    // CARD NUMBER 4929076432525038
    // EXP 06/2025
    // CVC 477



    public function cartList () 
    { 
       $cartItems = \Cart::getContent();
       // dd($cartItems);
       return view('font.cart', compact('cartItems')); 
   }


   public function addToCart(Request $request)
   {
        \Cart::add([
           'id' => $request->id,
           'name' => $request->name,
           'price' => $request->price,
           'quantity' => $request->quantity,
           'attributes' => array(
               'image1' => $request->image1,
           )
       ]);
       session()->flash('success', 'Product is Added to Cart Successfully !');

       return redirect()->route('cart.list');
   }


   public function updateCart(Request $request)
   {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity,
                ],
            ]
        );

       session()->flash('success', 'Item Cart is Updated Successfully !');

       return redirect()->route('cart.list');
   }

   public function removeCart(Request $request)
   {
      \Cart::remove($request->id);
       session()->flash('success', 'Item Cart Remove Successfully !');

       return redirect()->route('cart.list');
   }

   public function clearAllCart()
   {
      \Cart::clear();

       session()->flash('success', 'All Item Cart Clear Successfully !');

       return redirect()->route('cart.list');
   }


}
