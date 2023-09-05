<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shipping;
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
        $news = Newsletter::count();
        $order = Order::count();
        $shipping = Shipping::count();
        $users=User::orderBy('id','ASC')->paginate(3);
        $products=Product::orderBy('id','ASC')->paginate(3);
        return view('back.index')->with('post',$post)
        ->with('posts',$posts)
        ->with('users',$users)
        ->with('products',$products)
        ->with('news',$news)
        ->with('order',$order)
        ->with('shipping',$shipping);
        }
        else
        {
        return view('font.404');  
        }
    }

    
   
}
