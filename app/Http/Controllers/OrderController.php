<?php

namespace App\Http\Controllers;

use App\Models\OrderFoodNo;
use App\Models\OrderNo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view(){
        $orderno = OrderNo::all();
        return view('orderlist', compact('orderno'));
    }

    public function viewhistory(){
        $orderno = OrderNo::all();
        return view('carthistory', compact('orderno'));
    }
}
