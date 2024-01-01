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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <!-- Load icon library -->
    <title>Add Menu</title>
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="<?php echo e(asset('image/logo.png')); ?>" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="orderlist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/order.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="menulist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/menu.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Menu</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="reservation_staff">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/reservation.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Reservation</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="notification">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/notification.png')); ?>" width="24px" height="24px">
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
                            <a href="" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Complete Payment</a>
                        </div>
                    </li>
                </ol>
            </nav>

            <?php


            ?>
            <div class=" bg-white m-12 p-12  rounded-md shadow-md">
                <form action="deletepayment">
                    <div class="bg-gray-100 border rounded-lg px-6 py-8">
                        <h1 class="font-bold text-2xl my-4 text-center text-black">ORDER LIST <br> Table <?php if(count($order)) echo $order[0]->table_no; ?></h1>
                        <hr class="mb-2">
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
                                foreach ($order as $orders) {
                                    $price = 0;
                                    $menu = DB::table('menus')->where('foodid', $orders->foodid)->first();
                                    $price = $menu->price;
                                    $topping = DB::table('orders')->where('food_no', $orders->id)->get();
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
                                    <input type="hidden" name="foodno[]" value="<?php echo $orders->id ?>">
                                    <tr>
                                        <td class="text-left font-medium text-black opacity-80"><?php echo $orders->foodid . ". " . $menu->foodname ?></td>
                                        <td class="text-right font-medium text-black opacity-80"><?php echo $orders->quantity ?></td>
                                        <td class="text-right font-medium text-black opacity-80">RM <?php echo number_format($price, 2) ?></td>
                                    </tr>
                                    <?php
                                    $topping = DB::table('orders')->where('food_no', $orders->id)->get();
                                    foreach ($topping as $toppings) {
                                        if ($toppings->top_or_add == "topping") {
                                            $topvar = DB::table('toptions')->where('id', $toppings->choice_no)->first();
                                        } else {
                                            $topvar = DB::table('aoptions')->where('id', $toppings->choice_no)->first();
                                        }
                                    ?>
                                        <tr>
                                            <td class="text-left text-gray-500 italic"><?php echo '+ ' . $topvar->option ?></td>
                                            <td class="text-right text-gray-700"></td>
                                            <td class="text-right text-gray-700"></td>
                                        </tr>
                                    <?php } ?>
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
                    </div>
                    <div>
                        <button type="submit" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-30 shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-2xl px-5 py-2.5 text-center w-full h-24 mt-12" onclick="return confirm('Are you sure want to complete this order?')">Confirm Payment</button>
                    </div>
                </form>
            </div>
    </div>
    </main>
    </div>
    <script>

    </script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/completepayment.blade.php ENDPATH**/ ?>