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
        
        // $category = Category::all();
        $products = Product::all();
        return view('back.product.index', [ 
            'products' => $products,
        ]);
 
    } 


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category=Category::all();
        return view('back.product.create')->with('categories',$category);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //
        //    $data = $request->validate([
        //     'name'=>'string|required', 
        //     'description'=>'string|nullable',
        //     // "image1" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        //     // "image2" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        //     "image1" => "required|image",
        //     "image2" => "required|image",
        //     // 'image1'=>'string|required',
        //     // 'image2'=>'string|required',
        //     // 'image1'=>'image',
        //     // 'image2'=>'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'stock'=>"required|numeric",
        //     'size'=>'nullable',
        //     'condition'=>'required|in:SALE,-16%,NEW,HOT,POPULAR',
        //     'color'=>'required|in:RED,BLACK,GREEN,WHITE,YELLOW',
        //     'status'=>'required|in:active,inactive',
        //     'price'=>'required|numeric',
        //     'priceReduction'=>'nullable|numeric',
        //     'cat_id'=>'required|exists:categories,id',
          
        // ]);
   

            // $file1 = $request->file('image1');
            // $path1 = time() . '_' . $request->name . '.' . $file1->getClientOriginalExtension();
            // Storage::disk('local')->put('public/images/' . $path1, file_get_contents($file1));

            
            // $file2 = $request->file('image2');
            // $path2 = time() . '_' . $request->name . '.' . $file2->getClientOriginalExtension();
            // Storage::disk('local')->put('public/images/' . $path2, file_get_contents($file2));
            // $path1 = $request->file('image1')->store('images', 'public');
            // $path2 = $request->file('image2')->store('images', 'public');
    
            $product = new Product();
            $product->name = $request->name;
            $product->slug = $request->slug;
            $product->description = $request->description;
            $product->image1 = $request->image1;
            $product->image2 = $request->image2;
            $product->stock = $request->stock;
            $product->status = $request->status;
            $product->price = $request->price;
            $product->priceReduction = $request->priceReduction; 
            $product->cat_id = $request->cat_id;
            $product->save();
            
        //   Product::create([ 
        //        'name' => $request->name,
        //        'description' => $request->description,
        //        'image1' => $path1,
        //        'image2' => $path2,
        //        'stock' => $request->stock,
        //        'size' => $request->size,
        //        'condition' => $request->condition,
        //        'color' => $request->color,
        //        'status' => $request->status,
        //        'price' => $request->price,
        //        'priceReduction' => $request->priceReduction,
        //        'cat_id' => $request->cat_id,
        //     ]); 
     
          return redirect()->route('product.index')->with('success', 'Product Successfully created !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('font.produit-layout', compact('product')); 
        // return response()->json($product);
        // $product = Product::findOrFail($id);
    }

    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::all();
        $product=Product::findOrFail($id);

        return view('back.product.edit')->with('product',$product)->with('categories',$category);
    }

    public function edit1(string $id)
    {
        //
        $category = Category::all();
        $product=Product::findOrFail($id);
        $items=Product::where('id',$id)->get();
        return view('font.produit-layout')->with('product',$product)->with('items',$items)->with('categories',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
   
        // $file1 = $request->file('image1');
        // $path1 = time() . '_' . $request->name . '.' . $file1->getClientOriginalExtension();
        // Storage::disk('local')->put('public/images/' . $path1, file_get_contents($file1));

        
        // $file2 = $request->file('image2');
        // $path2 = time() . '_' . $request->name . '.' . $file2->getClientOriginalExtension();
        // Storage::disk('local')->put('public/images/' . $path2, file_get_contents($file2));

        $product = Product::find($id);
        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->description = $request->description;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->stock = $request->stock;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->priceReduction = $request->priceReduction; 
        $product->cat_id = $request->cat_id;
        $product->save();
     
        return redirect()->route('product.index')->with('success','Product Successfully updated');
     
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();  
        return redirect()->route('product.index')->with('success', 'Le produit a bien été suprimé');
     
    }

}
