<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackController extends Controller
{
    //   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role=="admin"){
        $post = Product::count();
        $posts = User::count();
        $users=User::orderBy('id','ASC')->paginate(3);
        $products=Product::orderBy('id','ASC')->paginate(3);
        return view('back.index')->with('post',$post)->with('posts',$posts)->with('users',$users)->with('products',$products);
        }
        else
        {
        return view('font.404');  
        }
    }

   
}
