<?php

namespace App\Http\Controllers;

use App\Models\FoodOrderNo;
use App\Models\Order;
use App\Models\OrderFoodNo;
use App\Models\OrderNo;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view()
    {
        $orderno = OrderNo::where('status', 'pending')->get();
        $preparing = OrderNo::where('status', 'preparing')->get();
        $completed = OrderNo::where('status', 'completed')->get();
        return view('orderlist', compact('orderno', 'preparing', 'completed'));
    }

    public function preparing()
    {
        $pending = OrderNo::where('status', 'pending')->get();
        $orderno = OrderNo::where('status', 'preparing')->get();
        $completed = OrderNo::where('status', 'completed')->get();
        return view('preparing', compact('orderno', 'pending', 'completed'));
    }

    public function complete()
    {
        $pending = OrderNo::where('status', 'pending')->get();
        $preparing = OrderNo::where('status', 'preparing')->get();
        $orderno = OrderNo::where('status', 'completed')->get();
        return view('completed', compact('orderno', 'pending', 'preparing'));
    }

    public function viewhistory()
    {
        $orderno = OrderNo::all();
        return view('carthistory', compact('orderno'));
    }

    public function approve(Request $request)
    {
        $action = $request->input('action');
        $id = $request->input('id');
        if ($action == "approve") {
            $order = OrderNo::where('id', $id)->first();
            $order->status = "preparing";
            $order->save();
            return redirect()->back();
        } else {
            $orderno = OrderNo::where('id', $id)->first();
            return view('editorder', compact('orderno'));
        }
    }


    public function completed(Request $request)
    {
        $id = $request->input('id');
        $order = OrderNo::where('id', $id)->first();
        $order->status = "completed";
        $order->save();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $id = $request->input('id');
        $action = $request->input("action");
        $orderid = $request->input("orderid");
        $tcounter = $request->input("tcounter");
        $acounter = $request->input("acounter");
        $note = $request->input("request");
        if ($action == "deleteorder") {
            $deletedtopping = Order::where('food_no', $id)->delete();
            $deletefoodno = OrderFoodNo::where('id', $id)->first();
            $checks = $deletefoodno->order_no;
            $deletefoodno = OrderFoodNo::where('id', $id)->delete();
            $last = OrderFoodNo::where('order_no', $checks)->first();
            if (!$last) {
                $deleteorderno = OrderNo::where('id', $checks)->delete();
                return redirect("orderlist");
            }
            return redirect()->back();
        } else if ($action == "delete") {
            $deletefoodno = OrderFoodNo::where("id", $orderid[0])->first();
            $deleteorderno = Orderno::where('id', $deletefoodno->order_no)->first(); //delete
            $deletefoodno = OrderFoodNo::where("order_no", $deleteorderno->id)->get(); //delete
            foreach($deletefoodno as $deletefoodnos){
                $deletetopping = Order::where('food_no', $deletefoodnos->id)->delete();
            }
            $deletefoodno = OrderFoodNo::where("order_no", $deleteorderno->id)->delete(); 
            $deleteorderno->delete();
            return redirect("orderlist");
        } else {
            if ($orderid)
                foreach ($orderid as $count => $orderid) {
                    $deletetopping = Order::where('food_no', $orderid)->where("top_or_add", "topping")->delete();
                    $update = OrderFoodNo::where('id', $orderid)->update(['request' => $note[$count]]);
                    for ($i = 1; $i <= $tcounter[$count]; $i++) {
                        $toppingstring = "topping" . $orderid . $i;
                        $topping = $request->input($toppingstring);
                        if ($topping) {
                            $newTopping = new Order();
                            $newTopping->choice_no = $topping;
                            $newTopping->top_or_add = "topping";
                            $newTopping->food_no = $orderid;
                            $newTopping->save();
                        }
                    }


                    $deleteaddon = Order::where('food_no', $orderid)->where("top_or_add", "addon")->delete();
                    for ($i = 1; $i <= $acounter; $i++) {
                        $addonstring = "addon" . $orderid . $i;
                        $addon = $request->input($addonstring);
                        if ($addon)
                            foreach ($addon as $addons) {
                                $newTopping = new Order();
                                $newTopping->choice_no = $addons;
                                $newTopping->top_or_add = "addon";
                                $newTopping->food_no = $orderid;
                                $newTopping->save();
                            }
                    }
                }
            return redirect("orderlist");
        }
    }
}
