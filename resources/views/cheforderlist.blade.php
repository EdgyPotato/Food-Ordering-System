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
    <title>Chef Order List</title>
</head>

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-aqua-green-500 to-aqua-green-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="cheforderlist"><img src="{{ asset('image/order.png')}}" width="35px" height="35px">Order List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="notify"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px">Notify</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>
        <?php 
            $orderno = DB::table('order_nos')->where('status', 'preparing')->get();
        ?>

        <main class="grid grid-cols-2 justify-between items-start my-12 px-12 pt-[10px] gap-x-12 gap-y-12 w-full h-full">
            <?php foreach($orderno as $orderno){ 
                $order = DB::table('order_food_nos')
                ->where('order_no', '=', $orderno->id)
                ->get();
            ?>
                <div class="flex flex-col px-6 py-6 bg-aqua-green-500 shadow-md rounded-3xl">
                    <h1 class="text-3xl font-bold">Table <?php if(isset($order[0])) echo $order[0]->table_no; ?></h1>
                    <div class="flex flex-col justify-center items-start mt-6 bg-white rounded-xl w-full">
                        <div class="px-4 pt-4 w-full">
                            <?php 
                            foreach($order as $orders){ 
                                $toppingorder = DB::table('orders')
                                ->where('food_no', '=', $orders->id)
                                ->first();
                                if($toppingorder->top_or_add == "topping"){
                                    $var = DB::table('toptions')
                                    ->where('id', '=', $toppingorder->choice_no) 
                                    ->first();
                                    $var2 = DB::table('toppings')
                                    ->where('id', '=', $var->topping_id) 
                                    ->first();
                                    $var3 = DB::table('menus')
                                    ->where('foodid', '=', $var2->foodid) 
                                    ->first();
                                }else{
                                    $var = DB::table('aoptions')
                                    ->where('id', '=', $toppingorder->choice_no) 
                                    ->first();
                                    $var2 = DB::table('addons')
                                    ->where('id', '=', $var->addon_id) 
                                    ->first();
                                    $var3 = DB::table('menus')
                                    ->where('foodid', '=', $var2->foodid) 
                                    ->first();
                                }
                            ?>
                            <div class="mb-4">
                                <div class="flex justify-between items-center w-full">
                                    <h1 class="text-xl mx-2 font-bold"><?php echo $var3->foodid.'. '.$var3->foodname ?></h1>
                                    <input id="green-checkbox" type="checkbox" name="<?php echo 'checkbox'.$orderno->id.'[]' ?>" value="" class="green-checkbox w-6 h-6 text-green-600 bg-gray-100 border-gray-300 rounded focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                </div>
                            <?php
                                $toppingorder = DB::table('orders')
                                ->where('food_no', '=', $orders->id)
                                ->get();
                                foreach($toppingorder as $description){
                                    if($description->top_or_add == "topping"){
                                        $temp = DB::table('toptions')
                                        ->where('id', '=', $description->choice_no)
                                        ->first();
                                    }else{
                                        $temp = DB::table('aoptions')
                                        ->where('id', '=', $description->choice_no)
                                        ->first();
                                    } 
                                ?>
                                
                                <p class="mx-2 italic text-grey-700 overflow-hidden whitespace-nowrap text-ellipsis">+ <?php echo $temp->option ?></p>
                                <?php } ?>
                                <?php if ($orders->request): ?>
                                    <p class="mx-2 italic text-gray-700 text-left overflow-hidden whitespace-nowrap text-ellipsis">Note: <?php echo $orders->request ?></p>
                                <?php endif; ?>
                              
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="flex flex-row justify-center items-center mt-6">
                        <form id='form' method="get" action="completed">
                            <input type="hidden" name='id' id='hidden'>
                            <button id="button" type="button" class="inline-block py-2 text-center text-xl font-bold bg-grey-600 border-4 border-pigment-indigo-800 text-white rounded-lg shadow-md w-64" onclick="submitForm(<?php echo $orderno->id; ?>);">Complete</button>
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
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }

        var checkboxes = document.querySelectorAll('[name^="checkbox"]'); // Use the attribute selector to get all checkboxes
        var submitButton = document.getElementById('button'); // Get the submit button by its ID

        for (var i = 0; i < checkboxes.length; i++) {
            checkboxes[i].addEventListener('change', function () {
                var status = true;
                for (var j = 0; j < checkboxes.length; j++) {
                    if (!checkboxes[j].checked) {
                        status = false;
                        break; // No need to check further once one checkbox is unchecked
                    }
                }

                // Update the disabled state of the submit button based on the checkbox state
                submitButton.disabled = !status;

                // Update the button class based on the overall status
                if (!status) {
                    submitButton.classList.remove("bg-green-500");
                    submitButton.classList.add("bg-grey-600");
                } else {
                    submitButton.classList.remove("bg-grey-600");
                    submitButton.classList.add("bg-green-500");
                }
            });
        }
    </script>
</body>

</html>