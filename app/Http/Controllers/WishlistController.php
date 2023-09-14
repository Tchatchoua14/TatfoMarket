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
//     $product = Product::findOrFail($request->id);
//         \Cart::instance('wishlist')
//         ->add($request->id, $request->name, $request->price, $request->image1)
//         ->associate('app\Product');
          
           
       
//        session()->flash('success', 'Product is Added to Wishlist Successfully !');

//        return redirect()->route('wishlist');
//    }

//  public function destroy()
   
}
