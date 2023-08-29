<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /** // 'product_' => Str::slug(request->input('product_name_en')), 
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::orderBy('id','ASC')->paginate(10);
        return view('back.product.index', [
            'products' => $products,
        ]);

        // $posts = Post::all();
        // return view('post.index', compact('posts'));

    }


    

    // public function store_product(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'price' => 'required',
    //         'stock' => 'required',
    //         'description' => 'required',
    //         'image' => 'required'
    //     ]);

    //     $file = $request->file('image');
    //     $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

    //     Storage::disk('local')->put('public/' . $path, file_get_contents($file));

    //     Product::create([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'stock' => $request->stock,
    //         'description' => $request->description,
    //         'image' => $path,
    //     ]);

    //     return Redirect::route('create_product');


    // public function update_product(Product $product, Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'price' => 'required',
    //         'stock' => 'required',
    //         'description' => 'required',
    //         'image' => 'required'
    //     ]);

    //     $file = $request->file('image');
    //     $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

    //     Storage::disk('local')->put('public/' . $path, file_get_contents($file));

    //     $product->update([
    //         'name' => $request->name,
    //         'price' => $request->price,
    //         'stock' => $request->stock,
    //         'description' => $request->description,
    //         'image' => $path,
    //     ]);

    //     return Redirect::route('show_product', $product);









    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all();
        return view('back.product.create')->with('categories',$category)->with('success', "Cet etudiant a bien été crée");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
           $data = $request->validate([
            'title'=>'string|required',
            'description'=>'string|nullable',
            // 'image1'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'image2'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            //  'image1'=>'nullable',
            //  'image2'=>'nullable',
            'image1'=>'string|required',
            'image2'=>'string|required',
            'stock'=>"required|numeric",
            'size'=>'nullable',
            'condition'=>'required|in:SALE,-16%,NEW,HOT,POPULAR',
            'color'=>'required|in:RED,BLACK,GREEN,WHITE,YELLOW',
            'status'=>'required|in:active,inactive',
            'price'=>'required|numeric',
            'priceReduction'=>'nullable|numeric',
            'cat_id'=>'required|exists:categories,id',
          
        ]);

            // $file1 = $request->file('image1');
            // $path1 = time() . '_' . $request->name . '.' . $file1->getClientOriginalExtension();
            // Storage::disk('local')->put('public/' . $path1, file_get_contents($file1));

            // $file2 = $request->file('image2');
            // $path2 = time() . '_' . $request->name . '.' . $file2->getClientOriginalExtension();
    
            // Storage::disk('local')->put('public/' . $path2, file_get_contents($file2));
    
            Product::create([
              
               'title' => $request->title,
               'slug' => $request->slug,
               'description' => $request->description,
            //    'image1' => $path1,
            //    'image2' => $path2,
               'image1' => $request->image1,
               'image2' => $request->image2,
               'stock' => $request->stock,
               'size' => $request->size,
               'condition' => $request->condition,
               'color' => $request->color,
               'status' => $request->status,
               'price' => $request->price,
               'priceReduction' => $request->priceReduction,
               'cat_id' => $request->cat_id,
            ]);
     
          return redirect()->route('back.product.index')->with('success', 'le prduit a été bien crée');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('back.product.show', compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        return view('back.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        $this->validate($request,[
        'title'=>'string|required',
        'description'=>'string|nullable',
        'image1'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'image2'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        'stock'=>"required|numeric",
        'size'=>'nullable',
        'condition'=>'required|in:SALE,-16%,NEW,HOT,POPULAR',
        'color'=>'required|in:RED,BLACK,GREEN,WHITE,YELLOW',
        'status'=>'required|in:active,inactive',
        'price'=>'required|numeric',
        'priceReduction'=>'nullable|numeric',
        'cat_id'=>'required|exists:categories,id',
    ]);

        $file1 = $request->file('image1');
        $path1 = time() . '_' . $request->name . '.' . $file1->getClientOriginalExtension();
        Storage::disk('local')->put('public/' . $path1, file_get_contents($file1));

        $file2 = $request->file('image2');
        $path2 = time() . '_' . $request->name . '.' . $file2->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path2, file_get_contents($file2));

        $product->title = $request->title;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->image1 = $request->path1;
        $product->image2 = $request->path2;
        $product->stock = $request->stock;
        $product->size = $request->size;
        $product->condition = $request->condition;
        $product->color = $request->color; 
        $product->status = $request->status;
        $product->price = $request->price;
        $product->priceReduction = $request->priceReduction;
        $product->cat_id = $request->cat_id;

        $product->save();

        $product->update($request->all());
     
        return redirect()->route('back.product.index')->with('success', 'le produit a etebien mise a jour');
     
        // $product->state = $request->has('state');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete(); 
        return redirect()->route('back.product.index')->with('success', "le produit a bien été supprimé");
     
    }

}
