<?php

namespace App\Http\Controllers;

use Hash;
use Cart; 
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    
    public function welcome()
    { 
        $cartItems = \Cart::getContent();
        $products = Product::find([4,5,6,7,8]);
        $product1 = Product::find([9,10,11,12,13]);
        $product2 = Product::find([14,15,16,17,18]);
        $product3 = Product::find([19,20,21,22,25,26]);
        return view('font.welcome')->with('products',$products)->with('product1',$product1)->with('product2',$product2)->with('product3',$product3)->with('cartItems',$cartItems);
    } 

    public function index()
    {   $cartItems = \Cart::getContent();
        $products = Product::find([4,5,6,7,8]);
        $product1 = Product::find([9,10,11,12,13]);
        $product2 = Product::find([14,15,16,17,18]);
        $product3 = Product::find([19,20,21,22,25,26]);
        return view('font.index')->with('products',$products)->with('product1',$product1)->with('product2',$product2)->with('product3',$product3)->with('cartItems',$cartItems);
    }

    public function commande(){
        $order = Order::latest()->get();
        return view('font.mail.neworder', compact('order'));
    }

    public function order(){
        $order = Order::latest()->get();
        $cartItems = \Cart::getContent();
        return view('font.mail.order', compact('order'))->with('cartItems',$cartItems); 
    }


    public function Search(Request $request){
        $key = trim($request->get('q'));
        $categories = Category::all();
        $recent_products=Product::where('status','active')->orderBy('id','DESC')->limit(5)->get();
        $products=Product::orwhere('name', 'like', "%{$key}%")
                    ->orwhere('slug', 'like', "%{$key}%")
                    ->orwhere('description', 'like', "%{$key}%")
                    ->orwhere('color', 'like', "%{$key}%")
                    ->orwhere('price', 'like', "%{$key}%")
                    ->orwhere('priceReduction', 'like', "%{$key}%")
                    ->orwhere('size', 'like', "%{$key}%")
                    ->orwhere('created_at', 'desc')
                    ->orderBy('id','DESC')
                    ->get(); 
        return view('font.search', ['key' => $key,])->with('products',$products)->with('recent_products',$recent_products)->with('categories',$categories);
    }
  

    public function checkout()
    {   
        $subtotal = \Cart::getSubTotal();
        $cartItems = \Cart::getContent(); 
        return view('font.checkout', compact('cartItems'))->with('subtotal',$subtotal);
    }

    public function store()
    {   
        // $cartItems = \Cart::getContent();
        return redirect()->route('checkout');  
    }

    // public function contact()
    // {
    //     return view('font.contact');
    // }

    public function compte()
    {
        return view('font.compte');
    }

    public function mail()
    {
        $order = Order::all();
        return view('font.mail.order')->with('order',$order);
    }

    public function home2()
    {
        return view('font.home2');
    }

    public function home5()
    {
        return view('font.home5');
    }

    public function home7()
    {
        return view('font.home7');
    }

    public function home8()
    {
        return view('font.home8');
    }

    public function home11()
    {
        $products = Product::paginate(13);
        return view('font.home11')->with('products',$products);
    }

    public function home13()
    {
        return view('font.home13');
    }

    public function home14()
    {
        return view('font.home14');
    }

    public function home15()
    {
        return view('font.home15');
    }

    public function Terms()
    {
        return view('font.Terms');
    }

    public function shop()
    {
        return view('font.shop');
    }


    public function produitLayout()
    {
        return view('font.produit-layout');
    }

    public function collection()
    {
        return view('font.collection');
    }

    public function compare1()
    {
        return view('font.compare1');
    }

    public function FAQ()
    {
        return view('font.FAQ');
    }

    public function about()
    {
        return view('font.about');
    }

    public function adresse()
    {
        return view('font.adresse');
    }




}
