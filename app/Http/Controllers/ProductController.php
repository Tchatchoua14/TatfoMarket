<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('back.product.index', [
            'products' => $products,
        ]);

        // $posts = Post::all();
        // return view('post.index', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('back.produit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        //
            $this->validate($request,[
            'title'=>'string|required',
            'description'=>'string|nullable',
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

            
        // $file = $request->file('image');
        // $path = time() . '_' . $request->name . '.' . $file->getClientOriginalExtension();

        // Storage::disk('local')->put('public/' . $path, file_get_contents($file));

            // 'description' => $request->description,
            // 'image' => $path,
       

            $data=$request->all();
            $slug=Str::slug($request->title);
            $count=Product::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $data['slug']=$slug;
            $size=$request->input('size');
            if($size){
                $data['size']=implode(',',$size);
            }
            else{
                $data['size']='';
            }
            // return $size;
            // return $data;
            Product::create($data);
            // if($status){
            //     request()->session()->with('success','Product Successfully added');
            // }
            // else{
            //     request()->session()->flash('error','Please try again!!');
            // }
            // return redirect()->route('product.index');
    
        return back()->with('message', "La tâche a bien été créée !");
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
        return view('back.product.edit', compact('back.product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        //
        $product=Product::findOrFail($id);
        $this->validate($request,[
        'title'=>'string|required',
        'description'=>'string|nullable',
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

        $data=$request->all();
        $size=$request->input('size');
        if($size){
            $data['size']=implode(',',$size);
        }
        else{
            $data['size']='';
        }

        $product->fill($data)->save();
     
    
        return back()->with('message', "La tâche a bien été modifiée !");
     
        // $product->state = $request->has('state');
     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete(); 
     
    }

}
