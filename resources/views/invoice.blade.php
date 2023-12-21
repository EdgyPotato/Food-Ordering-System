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
    <title>Add Menu</title>
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="orderlist">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/order.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="menulist">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/menu.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Menu</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="reservation_staff">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/reservation.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Reservation</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="notification">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/notification.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Notification</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 bg-gray-300 rounded" href="payment">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                </svg>
                <span class="ml-2 font-medium">Payment</span>
            </a>
        </div>

    </div>
    <a class="flex items-center justify-center w-full h-16 mt-auto bg-gray-100 hover:bg-gray-300" href="logout">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
        </svg>
        <span class="ml-2 font-medium">Logout</span>
    </a>
</div>
<!-- Component End  -->

<body class="bg-gray-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <main class="flex flex-col w-full h-full">
            <nav class="flex pt-4 pl-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="payment" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Payment
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Complete Payment</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Invoice</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex items-center justify-end flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 px-12 py-4 dark:bg-gray-900">
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-4 h-3 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>

                        Email
                    </button>
                    <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                        <svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                            <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                        </svg>
                        Downloads
                    </button>
                </div>

            </div>

            <?php

            use App\Models\PaymentFoodNo;
            use Carbon\Carbon;

            $time = Carbon::now();
            $payment = $_GET['invoice_no'];

            $paymentfoodno = PaymentFoodNo::where('payment_id', $payment)->get();
            ?>
            <div class="flex justify-center items-center p-8 h-full">
                <div class="bg-gray-100 border rounded-lg px-6 py-8 w-96">
                    <h1 class="font-bold text-2xl my-4 text-center text-black">MOLEK CAFE</h1>
                    <hr class="mb-2">
                    <div class="flex justify-between mb-6">
                        <h1 class="text-lg font-bold">Invoice</h1>
                        <div class="text-gray-700">
                            <div>Date: <?php echo $time->toDateTimeString() ?></div>
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
    <script>

    </script>
</body>

</html>