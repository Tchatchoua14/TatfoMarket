<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','payment','first_name','last_name','country','post_code','address','city','company','apartment','phone','email','payment_method','payment_status','shipping_id','coupon'];

    public static function Order($id){ 
        return Order::with('cart')->find($id);
    }
    public static function countActiveOrder(){
        $data=Order::count();
        if($data){
            return $data;
        }
        return 0;
    }
    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
