<?php

namespace App\Http\Controllers;

use App\Models\OrderFoodNo;
use App\Models\OrderNo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view(){
        $orderno = OrderNo::where('status', 'pending')->get();
        $preparing = OrderNo::where('status', 'preparing')->get();
        $completed = OrderNo::where('status', 'completed')->get();
        return view('orderlist', compact('orderno','preparing','completed'));
    }

    public function preparing(){
        $pending = OrderNo::where('status', 'pending')->get();
        $orderno = OrderNo::where('status', 'preparing')->get();
        $completed = OrderNo::where('status', 'completed')->get();
        return view('preparing', compact('orderno','pending','completed'));
    }
        
    public function viewhistory(){
        $orderno = OrderNo::all();
        return view('carthistory', compact('orderno'));
    }

    public function approve(Request $request){
        $id = $request->input('id');
        $order = OrderNo::where('id', $id)->first();
        $order->status = "preparing";
        $order->save();
        return redirect()->back();
    }

    public function completed(Request $request){
        $id = $request->input('id');
        $order = OrderNo::where('id', $id)->first();
        $order->status = "completed";
        $order->save();
        return redirect()->back();
    }

    

    
}
