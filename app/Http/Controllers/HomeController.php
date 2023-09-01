<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

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
        $products = Product::paginate(20);
        return view('font.welcome')->with('products',$products);
    } 

    public function index()
    {
        $products = Product::find([4,5,6,7,8]);
        $product1 = Product::find([9,10,11,12,13]);
        $product2 = Product::find([14,15,16,17,18]);
        $product3 = Product::find([19,20,21,22,25,26]);
        return view('font.index')->with('products',$products)->with('product1',$product1)->with('product2',$product2)->with('product3',$product3);
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

    // public function subscribe(Request $request)
    // {
    //        $NewsLetter = new NewsLetter();
    //        $NewsLetter->name= $request->input('name'); 
    //        $NewsLetter->email= $request->input('email');
    //        $NewsLetter->save();
    //        return redirect()->back()->with('status','Thanks for Subscribing! We Will mail You Our Latest Updates');

    // }

    public function wishlist()
    {
        return view('font.wishlist');
    }

    public function checkout()
    {
        return view('font.checkout');
    }

    public function home1()
    {
        return view('font.home1');
    }

    public function home2()
    {
        return view('font.home2');
    }

    public function home3()
    {
        return view('font.home3');
    }

    public function home5()
    {
        return view('font.home5');
    }

    public function home6()
    {
        return view('font.home6');
    }

    public function home7()
    {
        return view('font.home7');
    }

    public function home8()
    {
        return view('font.home8');
    }

    public function home9()
    {
        return view('font.home9');
    }

    public function home10()
    {
        return view('font.home10');
    }

    public function home11()
    {
        $products = Product::paginate(13);
        return view('font.home11')->with('products',$products);
    }

    public function home12()
    {
        return view('font.home12');
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

    public function shop1()
    {
        return view('font.shop1');
    }

    public function shop()
    {
        return view('font.shop');
    }

    public function shopDescription()
    {
        return view('font.shop-description');
    }

    public function shopRight()
    {
        return view('font.shop-right');
    }

    public function produitVideo()
    {
        return view('font.produit-video');
    }

    public function produitRound()
    {
        return view('font.produit-round');
    }

    public function produitLayout()
    {
        return view('font.produit-layout');
    }

    public function produitLabels()
    {
        return view('font.produit-labels');
    }

    public function produitDrop()
    {
        return view('font.produit-drop');
    }

    public function blogLeft()
    {
        return view('font.blog-left');
    }

    public function blogGrid()
    {
        return view('font.blog-grid');
    }

    public function blogArticle()
    {
        return view('font.blog-article');
    }

    public function look2()
    {
        return view('font.look2');
    }

    public function look1()
    {
        return view('font.look1');
    }

    // public function cart()
    // {
    //     return view('font.cart');
    // }

    // public function cart1()
    // {
    //     return view('font.cart1');
    // }

    public function collection()
    {
        return view('font.collection');
    }

    public function compare1()
    {
        return view('font.compare1');
    }

    public function compare2()
    {
        return view('font.compare2');
    }

    public function FAQ()
    {
        return view('font.FAQ');
    }

    public function about()
    {
        return view('font.about');
    }



}
