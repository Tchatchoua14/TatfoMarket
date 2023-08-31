<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    //
    public function index(){
        // $profile=Auth()->user();
        return view('lang');
    }

    public function change(Request $request){
       App::setLocale($request->lang);
       session()->put('locale', $request->lang);
       return redirect()->route('home');

    }
} 
