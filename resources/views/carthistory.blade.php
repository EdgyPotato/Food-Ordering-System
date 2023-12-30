<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <title>Menu</title>
</head>

<body class="bg-grey-200">
    <div class="w-full px-6 py-4 bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400 rounded-b-3xl shadow-xl">
        <div class="return">
            <a href=addcart><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
        </div>
    </div>

    <div class="flex flex-col justify-between items-center">
        <div class="flex flex-col w-11/12 px-5 py-5 mt-5 bg-white shadow-md max-w-md rounded-xl">
            <h1 class="text-3xl font-bold mb-3">Order History</h1>
            <?php
            $amount = 0;
            foreach ($orderno as $orderno) {
                $order = DB::table('order_food_nos')
                    ->where('order_no', '=', $orderno->id)
                    ->first();
                if ($order->table_no == session('table')) {
                    $order = DB::table('order_food_nos')
                        ->where('order_no', '=', $orderno->id)
                        ->get();
                    
                    $totalprice = 0;
            ?>
                    <div>
                        <?php
                        foreach ($order as $orders) {
                            $menu = DB::table('menus')
                                ->where('foodid', '=', $orders->foodid)
                                ->first();

                            $price = $menu->price;

                        ?>
                            <div class="flex flex-row items-start justify-between">
                                <div class="flex flex-row items-start align-middle text-center">
                                    <div class="flex flex-col items-start">
                                        <h1 class="text-xl font-bold"><?php echo $menu->foodid . '. ' . $menu->foodname . '  x' . $orders->quantity; ?></h1>
                                        <?php
                                        $toppingorder = DB::table('orders')
                                            ->where('food_no', '=', $orders->id)
                                            ->get();
                                        foreach ($toppingorder as $description) {
                                            if ($description->top_or_add == "topping") {
                                                $temp = DB::table('toptions')
                                                    ->where('id', '=', $description->choice_no)
                                                    ->first();
                                            } else {
                                                $temp = DB::table('aoptions')
                                                    ->where('id', '=', $description->choice_no)
                                                    ->first();
                                                $price = $price + $temp->price;
                                            }

                                        ?>
                                            <p class="italic text-grey-700">+ <?php echo $temp->option ?></p>
                                        <?php }
                                        $price *= $orders->quantity;
                                        ?>
                                    </div>
                                </div>
                                <h2 class="text-base font-semibold leading-7"><?php echo 'RM ' . number_format($price, 2) ?></h2>
                            </div>
                        <?php
                            $totalprice += $price;
                        } #end foreach
                        ?>

                        <div class="flex flex-row items-start justify-between mt-2">
                            <h1 class="text-xl font-bold">Total: </h1>
                            <h2 class="text-base font-semibold leading-7"><?php echo 'RM ' . number_format($totalprice, 2) ?></h2>
                        </div>
                    </div>

                    <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">
            <?php
                    $amount += $totalprice;
                } #endif
            } #endforeach
            ?>
            <div class="flex flex-row items-start justify-between mt-2">
                <h1 class="text-2xl font-bold">Total Amount: </h1>
                <h2 class="text-xl font-semibold leading-7"><?php echo 'RM ' . number_format($amount, 2) ?></h2>
            </div>
        </div>
    </div>
</body>

</html>