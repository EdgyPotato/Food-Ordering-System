<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        @media screen and (orientation: portrait) {
            html {
                /* Rotate the content container */
                transform: rotate(-90deg);
                transform-origin: left top;
                /* Set content width to viewport height */
                width: 100vh;
                /* Set content height to viewport width */
                height: 100vw;
                overflow-x: hidden;
                position: absolute;
                top: 100%;
                left: 0;
            }
        }
    </style>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Load icon library -->
    <title>Invoice</title>
</head>

            <?php

            use App\Models\Payment;
            use App\Models\PaymentFoodNo;

            $payment = $_GET['id'];

            $paymentfoodno = PaymentFoodNo::where('payment_id', $payment)->get();
            $paymenttime = Payment::where('id', $payment)->first();
            ?>
            <div class="flex justify-center items-center p-8 h-full" id="print">
                <div class="bg-gray-100 border rounded-lg px-6 py-8 w-96">
                    <h1 class="font-bold text-2xl my-4 text-center text-black">MOLEK CAFE</h1>
                    <hr class="mb-2">
                    <div class="flex justify-between mb-6">
                        <h1 class="text-lg font-bold">Invoice</h1>
                        <div class="text-gray-700">
                            <div>Date: <?php echo $paymenttime->created_at ?></div>
                            <div>Invoice: INV100<?php echo $payment ?></div>
                        </div>
                    </div>
                    <hr class="h-px my-8 bg-gray-200 border-0">
                    <table class="w-full mb-8 mt-8">
                        <thead>
                            <tr>
                                <th class="text-left font-bold text-xl text-gray-700 pb-2">Items</th>
                                <th class="text-right font-bold text-xl text-gray-700 pb-2">Quantity</th>
                                <th class="text-right font-bold text-xl text-gray-700 pb-2">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $totalprice = 0;
                            foreach ($paymentfoodno as $paymentfoodnos) {
                                $price = 0;
                                $menu = DB::table('menus')->where('foodid', $paymentfoodnos->foodid)->first();
                                $price = $menu->price;
                                $topping = DB::table('payment_food_toppings')->where('food_no', $paymentfoodnos->id)->get();
                                foreach ($topping as $toppings) {
                                    if ($toppings->top_or_add == "topping") {
                                        $topvar = DB::table('toptions')->where('id', $toppings->choice_no)->first();
                                    } else {
                                        $topvar = DB::table('aoptions')->where('id', $toppings->choice_no)->first();
                                        $price = $price + $topvar->price;
                                    }
                                }
                                $totalprice += $price;
                            ?>
                                <tr>
                                    <td class="text-left font-medium text-black opacity-80"><?php echo $paymentfoodnos->foodid . ". " . $menu->foodname ?></td>
                                    <td class="text-right font-medium text-black opacity-80"><?php echo $paymentfoodnos->quantity ?></td>
                                    <td class="text-right font-medium text-black opacity-80">RM <?php echo number_format($price, 2) ?></td>
                                </tr>
                                <?php
                                $topping = DB::table('payment_food_toppings')->where('food_no', $paymentfoodnos->id)->get();
                                foreach ($topping as $toppings) {
                                    if ($toppings->top_or_add == "topping") {
                                        $topvar = DB::table('toptions')->where('id', $toppings->choice_no)->first();
                                    } else {
                                        $topvar = DB::table('aoptions')->where('id', $toppings->choice_no)->first();
                                    }
                                ?>
                                    <tr>
                                        <td class="text-left text-sm text-gray-500 italic"><?php echo '+ ' . $topvar->option ?></td>
                                        <td class="text-right text-gray-700"></td>
                                        <td class="text-right text-gray-700"></td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td class="text-left text-gray-500 italic h-2"></td>
                                    <td class="text-right text-gray-700"></td>
                                    <td class="text-right text-gray-700"></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-left text-xl font-bold text-gray-700 pt-8">Total</td>
                                <td class="text-left font-bold text-xl text-gray-700 pt-8"></td>
                                <td class="text-right font-bold text-xl text-gray-700 pt-8">RM <?php echo number_format($totalprice, 2) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="text-center text-gray-700 mb-2">Thank you for your visit!</div>
                    <div class="text-center text-gray-700 text-sm">Please come again.</div>
                </div>
            </div>    
    </div>
    </main>
    </div>
</body>

</html>