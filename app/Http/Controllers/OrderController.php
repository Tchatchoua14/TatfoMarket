<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use App\Models\Shipping;
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
            'coupon'=>'nullable|numeric',
            'phone'=>'numeric|required',
            'post_code'=>'string|nullable', 
            'email'=>'string|required'
        ]);

        if(empty(Cart::where('user_id',auth()->user()->id)->where('order_id',null)->first())){
          session()->flash('success','Cart is Empty !');
            return back();
        }

        $order=new Order();
        $order_data=$request->all();
        $order_data['order_number']='ORD-'.strtoupper(Str::random(10));
        $order_data['user_id']=$request->user()->id;
        $order_data['shipping_id']=$request->shipping;
        $shipping=Shipping::where('id',$order_data['shipping_id'])->pluck('price');
        $order_data['sub_total']= \Cart::getSubTotal();
        $order_data['quantity']= \Cart::getTotalQuantity();
        if(session('coupon')){
            $order_data['coupon']=session('coupon')['value'];
        }
        if($request->shipping){
            if(session('coupon')){
                $order_data['total_amount']= \Cart::getSubTotal()+$shipping[0]-session('coupon')['value'];
            }
            else{
                $order_data['total_amount']= \Cart::getSubTotal()+$shipping[0];
            }
        }
        else{
            if(session('coupon')){
                $order_data['total_amount']= \Cart::getSubTotal()-session('coupon')['value'];
            }
            else{
                $order_data['total_amount']= \Cart::getSubTotal();
            }
        }
        // return $order_data['total_amount'];
        $order_data['status']="new";
        if(request('payment_method')=='paypal'){
            $order_data['payment_method']='paypal';
            $order_data['payment_status']='paid';
        }
        else{
            $order_data['payment_method']='cod';
            $order_data['payment_status']='Unpaid';
        }
        $order->fill($order_data);
        $status=$order->save();
        if($order)
        // dd($order->id);
        $users=User::where('role','admin')->first();
        $details=[
            'title'=>'New order created',
            'actionURL'=>route('order.show',$order->id),
            'fas'=>'fa-file-alt'
        ];
        Notification::send($users, new StatusNotification($details));
        if(request('payment_method')=='paypal'){
            return redirect()->route('payment')->with(['id'=>$order->id]);
        }
        else{
            session()->forget('cart');
            session()->forget('coupon');
        }
        Cart::where('user_id', auth()->user()->id)->where('order_id', null)->update(['order_id' => $order->id]);

        // dd($users);        
       session()->flash('success','Your product successfully placed in order');
        return redirect()->route('cart.list');
    }


    public function destroy($id)
    {
        $order=Order::find($id);
        if($order){
            $status=$order->delete();
            if($status){
                session()->flash('success','Order Successfully deleted');
            }
            else{
                session()->flash('success','Order can not deleted');
            }
            return redirect()->route('order.index');
        }
        else{
            session()->flash('success','Order can not found');
            return redirect()->back();
        }
    }


    
}
