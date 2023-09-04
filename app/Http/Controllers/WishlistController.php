<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cart; 

class WishlistController extends Controller
{
    //
    public function wishlist () 
    { 
       $cartItems = \Cart::getContent();
       // dd($cartItems);
       return view('font.wishlist', compact('cartItems')); 
   }


//    public function addWishList(Request $request)
//    {
//         \Cart::add([
//            'id' => $request->id,
//            'name' => $request->name,
//            'price' => $request->price,
//            'quantity' => $request->quantity,
//            'attributes' => array(
//                'image1' => $request->image1,
//                'size' => $request->size,
//                'color' => $request->color,
//            )
//        ]);
//        session()->flash('success', 'Product is Added to Wishlist Successfully !');

//        return redirect()->route('wishlist');
//    }


   
}
