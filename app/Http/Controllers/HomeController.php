<?php

namespace App\Http\Controllers;

use Hash;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Cart; 

class HomeController extends Controller
{
    
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
    {   $cartItems = \Cart::getContent();
        $products = Product::find([4,5,6,7,8]);
        $product1 = Product::find([9,10,11,12,13]);
        $product2 = Product::find([14,15,16,17,18]);
        $product3 = Product::find([19,20,21,22,25,26]);
        return view('font.index')->with('products',$products)->with('product1',$product1)->with('product2',$product2)->with('product3',$product3)->with('cartItems',$cartItems);
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
        $cartItems = \Cart::getContent();
        return view('font.checkout', compact('cartItems'));
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
