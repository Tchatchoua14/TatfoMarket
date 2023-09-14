<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shipping;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->paginate(10);
        return view('back.order.index')->with('orders',$orders);
    }

    public function create()
    {
        return view('font.checkout');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'address'=>'string|nullable',
            'order_number'=>'nullable|numeric',
            'phone'=>'numeric|required',
            'country'=>'numeric|required',
            'city'=>'numeric|required',
            'apartment'=>'nullable',
            'compagny'=>'nullable',
            'post_code'=>'string|nullable', 
            'email'=>'string|required'
        ]);

        $order=new Order();
        $order->first_name = $request->first_name;
        $order->last_name = $request->last_name;
        $order->address = $request->address;
        $order->order_number = $request->order_number; 
        $order->post_code = $request->post_code;
        $order->email = $request->email;
        $order->country = $request->country;
        $order->company = $request->company;
        $order->apartment = $request->apartment;
        $order->city = $request->city; 
        $order->save();
        // 'user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','payment','first_name','last_name','country','post_code','address','city','company','apartmencountry','email','payment_method','payment_status','shipping_id','order_number'
      

        // dd($users);        
        return redirect()->route('cart.list')->with('success','Your product successfully placed in order');
    }


    public function destroy(string $id)
    {
                $order = Order::find($id);
                $order->delete();
                return redirect()->route('back.order.index')->with('success', 'Order Successfully deleted');
    }


    
}
