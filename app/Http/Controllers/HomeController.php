<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Hash;

class HomeController extends Controller
{
    //
   
        // public function welcome()
        // {
        //     $products = Product::inRandomOrder()->take(6)->get();
        //     $hotProducts = Product::inRandomOrder()->take(3)->get();
        //     return view('welcome')->with([
        //         'products'=> $products,
        //         'hotProducts' => $hotProducts
        //     ]);
        // }
 

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function welcome()
    {
        return view('font.welcome');
    }

    public function index()
    {
        return view('font.index');
    }

    public function profile(){
        $profile=Auth()->user();
        // return $profile;
        return view('back.user.profile')->with('profile',$profile);
    }

    
    public function profileUpdate(Request $request,$id){
        // return $request->all();
        $user=User::findOrFail($id);
        $data=$request->all();
        $user->fill($data)->save();
    
        return redirect()->back()->with('message','Utilisateur a bien été bien mis a jour');
    }

    public function subscribe(Request $request)
    {
           $NewsLetter = new NewsLetter();
           $NewsLetter->name= $request->input('name'); 
           $NewsLetter->email= $request->input('email');
           $NewsLetter->save();
           return redirect()->back()->with('status','Thanks for Subscribing! We Will mail You Our Latest Updates');

    }
}
