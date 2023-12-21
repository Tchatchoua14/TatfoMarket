<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model 
{
    use HasFactory;

    protected $fillable=['name','slug','description','image1','image2','stock','status','price','priceReduction','cat_id'];


    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }


    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    // public function carts(){
    //     return $this->hasMany(Cart::class)->whereNotNull('order_id');
    // }

    // public function wishlists(){
    //     return $this->hasMany(Wishlist::class)->whereNotNull('cart_id');
    // }
    
}
