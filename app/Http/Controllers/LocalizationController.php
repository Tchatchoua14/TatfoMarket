<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    //
    // public function index(){
    //     return view('lang');
    // }

    // public function change(Request $request){
    //    App::setLocale($request->lang);
    //    session()->put('locale', $request->lang);
    //    return redirect()->back();

    // }

     public function getLang(){ 
        return App::getLocale();
    }

    public function setLang($lang){ 
        Session::put('lang', $lang);
        return redirect()->back();
    }
} 
