<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        $orders=Order::orderBy('id','DESC')->paginate(10);
        return view('back.order.index')->with('orders',$orders);
    }

    
}
