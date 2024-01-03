<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Edit Order</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico')}}">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="orderlist">
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

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <?php
        $foodno = DB::table("order_food_nos")->where('order_no', $orderno->id)->get();
        $count = 1;
        ?>
        <main class="flex w-full">
            <form class="flex w-full" id="form" action="staffedit" action="get">
                <input type="hidden" name='id' id='hidden'>
                <input type="hidden" name='action' id='action'>
                <div class="flex flex-col mx-6 my-6 px-6 py-6 bg-pigment-indigo-400 shadow-md rounded-3xl w-full">
                    <h1 class="text-5xl text-white font-bold">Table <?php if ($foodno) echo $foodno[0]->table_no; ?></h1>
                    <div class="grid grid-cols-2 justify-between items-center px-6 py-6 gap-x-12 gap-y-12 w-full">
                        <?php
                        foreach ($foodno as $foodno) {
                            $menu = DB::table("menus")->where('foodid', $foodno->foodid)->first();
                        ?>
                            <div class="flex flex-col px-5 py-5 bg-white shadow-md max-w-md rounded-xl w-full">
                                <div class="flex justify-end">
                                    <button type="button" class="px-1 py-1" onclick="if(confirm('Are you sure want to delete')) submitForm('<?php echo $foodno->id; ?>', 'deleteorder')">
                                        <svg class="fill-none stroke-pigment-indigo-400 stroke-[3px]" xmlns="http://www.w3.org/2000/svg" width="23.335" height="23.335" viewBox="0 0 23.335 23.335">
                                            <g transform="translate(-302.995 -562.503) rotate(45)">
                                                <line class="a" x2="30" transform="translate(613.5 183.5)" />
                                                <line class="a" x2="30" transform="translate(628.5 168.5) rotate(90)" />
                                            </g>
                                        </svg>
                                    </button>
                                </div>

                                <div class="w-full flex justify-between items-center">
                                    <h1 class="text-2xl font-bold"><?php echo $menu->foodid . ". " . $menu->foodname . " x" . $foodno->quantity; ?></h1>
                                    <h2 class="text-sm font-bold">RM{{ number_format($menu->price, 2) }}</h2>
                                </div>

                                <input type="hidden" name="orderid[]" value="<?php echo $foodno->id ?>">

                                <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                                <?php
                                $ordertopping = DB::table("orders")->where("food_no", $foodno->id)->get();

                                $topping = DB::table("toppings")->where("foodid", $menu->foodid)->get();
                                $c = 1;
                                foreach ($topping as $toppings) { ?>
                                    <div class="w-full">
                                        <div class="flex flex-row justify-between">
                                            <div>
                                                <h2 class="text-xl font-bold"><?php echo $toppings->title; ?></h1>
                                                    <p class="text-sm text-grey-600">Select one of the options</p>
                                            </div>
                                            <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                                                <p class="text-center text-white text-sm my-1">Required</p>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <?php
                                            $toption = DB::table("toptions")->where("topping_id", $toppings->id)->get();
                                            foreach ($toption as $toptions) {
                                                $status = 0;
                                                foreach ($ordertopping as $ordertoppings) {
                                                    if ($ordertoppings->choice_no == $toptions->id && $ordertoppings->top_or_add == "topping") {
                                                        $status = 1;
                                                    }
                                                }
                                                if ($status == 1) {
                                            ?>

                                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="topping<?php echo $foodno->id . $c ?>" value="<?php echo $toptions->id ?>" checked>
                                                    <label class="ml-2 text-lg align-middle" for="topping1"><?php echo $toptions->option; ?></label><br>
                                                <?php } else { ?>
                                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="radio" id="topping1" name="topping<?php echo $foodno->id . $c ?>" value="<?php echo $toptions->id ?>">
                                                    <label class="ml-2 text-lg align-middle" for="topping1"><?php echo $toptions->option; ?></label><br>

                                            <?php }
                                            } ?>
                                        </div>
                                    </div>

                                    <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                                <?php
                                    $c++;
                                } ?>
                                <input type=hidden name="tcounter[]" value="<?php echo $c - 1; ?>">
                                <?php
                                $ordertopping = DB::table("orders")->where("food_no", $foodno->id)->get();

                                $addon = DB::table("addons")->where("foodid", $menu->foodid)->get();
                                $c = 1;
                                foreach ($addon as $addon) { ?>
                                    <div class="w-full">
                                        <div class="flex flex-row justify-between">
                                            <h2 class="text-xl font-bold"><?php echo $addon->title; ?></h1>
                                                <div class="w-20 my-auto bg-grey-500 shadow-md max-w-md rounded-2xl">
                                                    <p class="text-center text-white text-sm my-1">Optional</p>
                                                </div>
                                        </div>

                                        <div class="flex flex-row justify-between">
                                            <div class="mt-3">
                                                <?php
                                                $aoptions = DB::table("aoptions")->where("addon_id", $addon->id)->get();
                                                foreach ($aoptions as $aoptions) {
                                                    $status = 0;
                                                    foreach ($ordertopping as $ordertoppings) {
                                                        if ($ordertoppings->choice_no == $aoptions->id && $ordertoppings->top_or_add == "addon") {
                                                            $status = 1;
                                                        }
                                                    }

                                                    if ($status == 1) {
                                                ?>
                                                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon<?php echo $foodno->id . $c . "[]" ?>" value="<?php echo $aoptions->id ?>" checked>
                                                        <label class="ml-2 text-lg align-middle" for="addon1"><?php echo $aoptions->option; ?></label><br>
                                                    <?php } else { ?>
                                                        <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" id="addon1" name="addon<?php echo $foodno->id . $c . "[]" ?>" value="<?php echo $aoptions->id ?>">
                                                        <label class="ml-2 text-lg align-middle" for="addon1"><?php echo $aoptions->option; ?></label><br>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                            <div class="mt-3 text-center align-middle">
                                                <?php
                                                $aoptions = DB::table("aoptions")->where("addon_id", $addon->id)->get();
                                                foreach ($aoptions as $aoptions) { ?>
                                                    <p class="text-grey-700 leading-7">+RM <?php echo $aoptions->price; ?></p>
                                                <?php } ?>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="w-full mx-auto my-3 h-1 bg-grey-200 border-0 rounded">

                                <?php
                                    $c++;
                                }
                                ?>
                                <input type=hidden name="acounter" value="<?php echo $c - 1; ?>">
                                <div class="w-full">
                                    <h2 class="text-xl font-bold">Special Request</h1>
                                        <p class="text-sm text-grey-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                                        <div class="mt-3">
                                            <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request[]" placeholder="e.g. No peanut"><?php echo $foodno->request; ?></textarea>
                                        </div>
                                </div>
                            </div>
                        <?php
                            $count++;
                        } ?>
                    </div>

                    <div class="flex flex-row justify-center items-center mt-6 gap-6 w-full">
                        <button type="submit" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-100 border-4 border-pigment-indigo-500 text-pigment-indigo-500 rounded-lg shadow-md w-40">Confirm</button>
                        <a href="#" onclick="location.reload();"><button type="button" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-200 border-4 border-pigment-indigo-700 text-pigment-indigo-700 rounded-lg shadow-md w-40">Reset</button></a>
                        <a href="/orderlist"><button type="button" class="inline-block py-2 text-center text-xl font-bold bg-pigment-indigo-500 border-4 border-pigment-indigo-800 text-white rounded-lg shadow-md w-40">Cancel</button></a>
                        <button type="button" class="inline-block py-2 text-center text-xl font-bold bg-red-600 border-4 border-pigment-indigo-900 text-red-900 rounded-lg shadow-md w-40" onclick="if(confirm('Are you sure want to delete')) submitForm('<?php echo $foodno->id; ?>', 'delete')">Delete</button>
                    </div>
                </div>
            </form>
        </main>
    </div>
    <script>
        function submitForm(id, action) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            document.getElementById('action').value = action;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>

</html>