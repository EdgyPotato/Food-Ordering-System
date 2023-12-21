<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderFoodNo;
use App\Models\OrderNo;
use App\Models\Payment;
use App\Models\PaymentFoodNo;
use App\Models\PaymentFoodTopping;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function viewpayment(Request $request)
    {
        $table_no = $request->input("table_no");
        $order = OrderFoodNo::where("table_no", $table_no)->get();
        return view("completepayment", compact('order'));
    }

    public function deletepayment(Request $request)
    {
        $foodno = $request->input('foodno');
        if (count($foodno)) {
            $payment = new Payment();
            $payment->save();

            foreach ($foodno as $foodnos) {
                $payment = Payment::max('id');
                $orderfoodno = OrderFoodNo::where('id', $foodnos)->first();
                $paymentfoodno = new PaymentFoodNo();
                $paymentfoodno->table_no = $orderfoodno->table_no;
                $paymentfoodno->quantity = $orderfoodno->quantity;
                $paymentfoodno->payment_id = $payment;
                $paymentfoodno->foodid = $orderfoodno->foodid;
                $paymentfoodno->save();
                $orderno = OrderNo::where('id', $orderfoodno->order_no)->delete();
                $ordertopping = Order::where('food_no', $foodnos)->get();
                if (count($ordertopping)) {
                    foreach ($ordertopping as $ordertoppings) {
                        $paymentfoodtopping = new PaymentFoodTopping();
                        $paymentfoodtopping->choice_no = $ordertoppings->choice_no;
                        $paymentfoodtopping->top_or_add = $ordertoppings->top_or_add;
                        $paymentfoodtopping->food_no = PaymentFoodNo::max('id');
                        $paymentfoodtopping->save();
                    }

                    $ordertopping = Order::where('food_no', $foodnos)->delete();
                }
                $orderfoodno->delete();
            }
        }
        return redirect("invoice/?invoice_no=$payment");
    }
}
