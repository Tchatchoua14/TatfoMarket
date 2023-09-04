<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable=['user_id','product_id','cart_id','price','amount','quantity'];

    // public function product(){
    //     return $this->belongsTo(Product::class,'product_id'); 
    // }

    public function products()
    {
        return $this->hasMany(Product::class, 'id', 'product_id');
    }
}
