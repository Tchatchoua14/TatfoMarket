<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        $newsletters = Newsletter::all();
        return view('back.newsletter.index')->with('newsletters', $newsletters);
    }

    public function create()
    {
        return view('font.index');
    } 

    public function store(Request $request){
      
           $NewsLetter = new NewsLetter();
           $NewsLetter->email= $request->input('email');
           $NewsLetter->save();
           return redirect()->route('profile.edit')->with('success','Thanks for Subscribing! We Will mail You Our Latest Updates');
        // return redirect()->route('home')->with('status','Thanks for Subscribing! We Will mail You Our Latest Updates');
    }

    public function destroy(Newsletter $newsletter){
        $newsletter->delete(); 
        return redirect()->route('index')->with('success', 'La newsletter a bien été supprimée');
        
    }
}
