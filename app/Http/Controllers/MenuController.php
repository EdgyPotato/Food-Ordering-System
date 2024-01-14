<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Aoptions;
use App\Models\FoodOrderNo;
use App\Models\Menu;
use App\Models\Order;
use App\Models\OrderFoodNo;
use App\Models\OrderNo;
use App\Models\tempOrder;
use App\Models\Topping;
use App\Models\Toptions;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use function Laravel\Prompts\alert;

class MenuController extends Controller
{
    public function save(Request $request)
    {
        $id = $request->input("id");
        $validation = Menu::where("foodid", $id)->get();
        if (count($validation) > 0) {
            return redirect()->back()->withErrors($validation);
        }
        $foodname = $request->input('foodname');
        $description = $request->input('description');
        $price = $request->input('foodprice');
        $categories = $request->input('categories');
        $url = $request->file('my_image');
        $binaryData = base64_encode(file_get_contents($url->path()));
        $menu = new Menu();
        $menu->foodid = $id;
        $menu->foodname = $foodname;
        $menu->description = $description;
        $menu->price = $price;
        $menu->categories = $categories;
        $menu->image_url = $binaryData;
        $menu->status = "active";
        $menu->save();

        $toppinglist = $request->input("topping");

        $counter = 1;
        $counter2 = 1;
        $latestToppingId = null;
        if ($toppinglist)
            foreach ($toppinglist as $toppinglist) {
                $topping = new Topping();
                $topping->foodid = $id;
                $topping->title = $toppinglist;
                $topping->save();

                if ($counter2 == 1) {
                    $latestTopping = Topping::latest()->first();
                    $latestToppingId = $latestTopping->id;
                    $counter2++;
                } else {
                    $latestToppingId++;
                }

                $stringChoice = "choicetopping" . strval($counter);
                $choicelist = $request->input($stringChoice);
                foreach ($choicelist as $choicelist) {
                    $choice = new Toptions();
                    $choice->option = $choicelist;
                    $choice->topping_id = $latestToppingId;
                    $choice->save();
                }
                $counter++;
            }

        //Addon (not topping)
        $addonlist = $request->input("addon");
        $c1 = 1;
        $c2 = 1;
        $latestToppingId = null;
        if ($addonlist)
            foreach ($addonlist as $addonlist) {
                $topping = new Addon();
                $topping->foodid = $id;
                $topping->title = $addonlist;
                $topping->save();

                if ($c2 == 1) {
                    $latestTopping = Addon::latest()->first();
                    $latestToppingId = $latestTopping->id;
                    $c2++;
                } else {
                    $latestToppingId++;
                }

                $stringChoice = "choiceaddon" . strval($c1);
                $stringPrice = "priceaddon" . strval($c1);
                $choicelist = $request->input($stringChoice);
                $pricelist = $request->input($stringPrice);
                $a = 0;
                foreach ($choicelist as $choicelist) {
                    $choice = new Aoptions();
                    $choice->option = $choicelist;
                    $choice->addon_id = $latestToppingId;
                    $choice->price = $pricelist[$a];
                    $choice->save();
                    $a++;
                }
                $c1++;
            }

        return redirect()->back();
    }

    public function index(Request $request)
    {
        $id = $request->input("id");
        $food = Menu::where('foodid', $id)->first();
        $topping = Topping::where('foodid', $food->foodid)->get();
        $addon = Addon::where('foodid', $food->foodid)->get();
        if ($food) {
            return view('food', compact('food', 'topping', 'addon'));
        } else {
            // Handle the case where the record with the given ID was not found
            return response()->view('error', ['message' => 'Record not found'], 404);
        }
    }

    public function getTempOrder(Request $request)
    {
        $count = 1;
        $radiostr = "radio" . $count;
        $foodid = $request->input('foodid');

        $food_no = new FoodOrderNo(); //change to take the largest number
        $food_no->table_no = session('table');
        $food_no->quantity = $request->input("quantity");
        $requestinput = $request->input("request");
        if ($requestinput)
            $food_no->request = $requestinput;
        else
            $food_no->request = null;
        $food_no->foodid = $foodid;
        $food_no->save();
        $latestfoodid = FoodOrderNo::max('id');
        while ($request->has($radiostr)) {
            $id = $request->input($radiostr);
            $tempOrder = new tempOrder();
            $tempOrder->choice_no = $id;
            $tempOrder->top_or_add = "topping";
            $tempOrder->food_no = $latestfoodid;
            $tempOrder->save();

            $count++;
            $radiostr = "radio" . $count;
        }

        $count = 1;
        $checkstr = "checkbox" . $count;
        while ($request->has($checkstr)) {
            foreach ($request->input($checkstr) as $checkbox) {
                $tempOrder = new tempOrder();
                $tempOrder->choice_no = $checkbox;
                $tempOrder->top_or_add = "addon";
                $tempOrder->food_no = $latestfoodid;
                $tempOrder->save();
            }
            $count++;
            $checkstr = "checkbox" . $count;
        }
        $table = session('table');

        return redirect("/?table=$table");
    }

    public function cart()
    {
        $table = session('table');
        $food = FoodOrderNo::where('table_no', $table)->get();

        return view('cart', compact('food'));
    }
    public function addminus(Request $request)
    {
        $action = $request->input("action");
        $foodItemId = explode('_', $action)[1];
        $action = explode('_', $action)[0];
        if ($action == "add") {
            $adjustfood = FoodOrderNo::where('id', $foodItemId)->first();
            if ($adjustfood->quantity >= 10) {
                echo '<script>alert("Error: Quantity limit reached!");</script>';
            } else {
                // Increase the quantity by 1
                $adjustfood->quantity = $adjustfood->quantity + 1;
            }
            $adjustfood->save();
            return redirect()->back();
        } else if ($action == "minus") {
            $adjustfood = FoodOrderNo::where('id', $foodItemId)->first();
            if ($adjustfood->quantity <= 1) {
                #no doing anything
            } else {
                // Decrease the quantity by 1
                $adjustfood->quantity = $adjustfood->quantity - 1;
            }
            $adjustfood->save();
            return redirect()->back();
        } else if ($action == "delete") {
            $deletefood = FoodOrderNo::where('id', $foodItemId)->first();
            $deletetemp = tempOrder::where('food_no', $deletefood->id)->delete();
            $deletefood->delete();
            return redirect()->back();
        } else if ($action == "edit") {
            $editfood = FoodOrderNo::where('id', $foodItemId)->first();
            $temporder = DB::table('temp_orders')
                ->where('food_no', '=', $editfood->id)
                ->first();


            $id = $editfood->foodid;
            $food = Menu::where('foodid', $id)->first();
            $topping = Topping::where('foodid', $food->foodid)->get();
            $addon = Addon::where('foodid', $food->foodid)->get();
            $temporder = DB::table('temp_orders')
                ->where('food_no', '=', $editfood->id)
                ->get();
            return view("foodedit", compact('food', 'topping', 'addon', 'temporder'));
        } else if ($action = "submit") {
            $table = session('table');
            $ordernumber = new OrderNo();
            $ordernumber->status = "pending";
            $ordernumber->save();
            $ordernumber = OrderNo::latest()->first();
            $foodorderno = FoodOrderNo::where('table_no', $table)->get();
            if ($foodorderno) {
                foreach ($foodorderno as $foodordernos) {
                    $orderno = new OrderFoodNo();
                    $orderno->id = $foodordernos->id;
                    $orderno->table_no = $table;
                    $orderno->quantity = $foodordernos->quantity;
                    $orderno->request = $foodordernos->request;
                    $orderno->order_no = $ordernumber->id;
                    $orderno->foodid = $foodordernos->foodid;
                    $orderno->save();
                    $tempOrder = tempOrder::where('food_no', $foodordernos->id)->get();

                    foreach ($tempOrder as $tempOrder) {
                        $order = new Order();
                        $order->choice_no = $tempOrder->choice_no;
                        $order->top_or_add = $tempOrder->top_or_add;
                        $order->food_no = $tempOrder->food_no;
                        $order->save();
                    }
                    $foodordernos->delete();
                }
            }
            return redirect()->back();
        }
    }

    public function cusedit(Request $request)
    {
        $action = $request->input("selectedno");
        $foodItemId = explode('_', $action)[1];
        $editfood = FoodOrderNo::where('id', $foodItemId)->first();
        $editfood->quantity = $request->input("quantity");
        $requestinput = $request->input("request");
        if ($requestinput)
            $editfood->request = $requestinput;
        else
            $editfood->request = null;
        $editfood->save();
        $deletefood = tempOrder::where('food_no', $foodItemId)->delete();
        $count = 1;
        $radiostr = "radio" . $count;
        while ($request->has($radiostr)) {
            $id = $request->input($radiostr);
            $tempOrder = new tempOrder();
            $tempOrder->choice_no = $id;
            $tempOrder->top_or_add = "topping";
            $tempOrder->food_no = $foodItemId;
            $tempOrder->save();

            $count++;
            $radiostr = "radio" . $count;
        }

        $count = 1;
        $checkstr = "checkbox" . $count;
        while ($request->has($checkstr)) {
            foreach ($request->input($checkstr) as $checkbox) {
                $tempOrder = new tempOrder();
                $tempOrder->choice_no = $checkbox;
                $tempOrder->top_or_add = "addon";
                $tempOrder->food_no = $foodItemId;
                $tempOrder->save();
            }
            $count++;
            $checkstr = "checkbox" . $count;
        }
        return redirect("addcart");
    }

    public function deletemenu(Request $request)
    {
        $action = $request->input("action");
        $id = $request->input('id');

        if ($action == "delete") {
            $affectedRows = Menu::where('foodid', $id)->update(['status' => 'deleted']);
            return redirect()->back();
        } else if ($action == "preview") {
            $food = Menu::where('foodid', $id)->first();
            $topping = Topping::where('foodid', $food->foodid)->get();
            $addon = Addon::where('foodid', $food->foodid)->get();
            if ($food) {
                return view('preview', compact('food', 'topping', 'addon'));
            } else {
                // Handle the case where the record with the given ID was not found
                return response()->view('error', ['message' => 'Record not found'], 404);
            }
        }
        // Update the status to 'deleted' directly

    }

    public function invisible(Request $request)
    {
        $action = $request->input('action');
        $id = $request->input('id');
        $menu = Menu::where('foodid', $id)->update(['status' => $action]);
        return redirect()->back();
    }
}
