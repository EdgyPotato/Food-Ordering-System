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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <title>Chef Order List</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon/logo.ico')); ?>">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="<?php echo e(asset('image/logo.png')); ?>" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300 " href="cheforderlist">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/order.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="notify">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/notification.png')); ?>" width="24px" height="24px">
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
        $orderno = DB::table('order_nos')->where('status', 'preparing')->get();
        ?>

        <main class="grid grid-cols-2 justify-between items-start my-12 px-12 pt-[10px] gap-x-12 gap-y-12 w-full h-full">
            <?php foreach ($orderno as $orderno) {
                $order = DB::table('order_food_nos')
                    ->where('order_no', '=', $orderno->id)
                    ->get();
            ?>
                <div class="flex flex-col px-6 py-6 bg-aqua-green-500 shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold">Table <?php if (isset($order[0])) echo $order[0]->table_no; ?></h1>
                    <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                        <div class="px-4 pt-4 w-full">
                            <?php
                            foreach ($order as $orders) {
                                $menu = DB::table('menus')
                                    ->where('foodid', '=', $orders->foodid)
                                    ->first();
                            ?>
                                <div class="mb-4">
                                    <div class="flex justify-between items-center w-full">
                                        <h1 class="text-xl mx-2 font-bold"><?php echo $menu->foodid . '. ' . $menu->foodname ?></h1>
                                        <input id="green-checkbox" type="checkbox" name="<?php echo 'checkbox' . $orderno->id . '[]' ?>" value="" class="green-checkbox w-6 h-6 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    </div>
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
                                        }
                                    ?>

                                        <p class="mx-2 italic text-grey-700 overflow-hidden whitespace-nowrap text-ellipsis">+ <?php echo $temp->option ?></p>
                                    <?php } ?>
                                    <?php if ($orders->request) : ?>
                                        <p class="mx-2 italic text-gray-700 text-left overflow-hidden whitespace-nowrap text-ellipsis">Note: <?php echo $orders->request ?></p>
                                    <?php endif; ?>

                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mt-6">
                        <form id='form' method="get" action="completed">
                            <input type="hidden" name='id' id='hidden'>
                            <button id="button" type="button" class="inline-block py-2 text-center text-xl font-bold bg-aqua-green-700 hover:bg-aqua-green-800 text-white rounded-lg shadow-lg w-64" onclick="return submitForm(<?php echo $orderno->id; ?>);">Complete</button>
                            <input id="submitButton" type="submit" style="display: none;">
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </main>
    </div>
    <script>
        function submitForm(id) {
            if(!confirm("Are you sure want to complete?")){
                return false; 
            }
            
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/cheforderlist.blade.php ENDPATH**/ ?>