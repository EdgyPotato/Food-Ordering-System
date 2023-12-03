<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <script>
        //temporary js script as reference to future php script
        var count = 1;

        function add1() {
            count += 1;
            if (count > 10) {
                alert("Maximum quantity is 10.")
                count = 10;
            }
            document.getElementById("count").innerHTML = count;
            document.getElementById("quantity").value = count;
        }

        function minus1() {
            count -= 1;
            if (count < 1) {
                alert("Minimum quantity is 1.");
                count = 1;
            }
            document.getElementById("count").innerHTML = count;
        }
    </script>
    <title>Menu</title>
</head>

<body class="bg-gray-200 ">
    <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <div class="return">
            <a href="/?table=<?php echo session('table'); ?>"><img src="<?php echo e(asset('image/return.png')); ?>" width="30px" height="30px"></a>
        </div>
    </div>
    <form method='GET' action='topping'>
        <div class="flex flex-col items-center">
            <div class="w-11/12 mt-8 bg-white shadow-md max-w-md rounded-xl">
                <img class="rounded-xl w-full" src='storage/image/<?php echo $food->image_url ?>'>
            </div>

            <div class="flex flex-col w-11/12 px-5 py-5 -mt-8 mb-28 bg-white shadow-md max-w-md rounded-xl">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl font-bold"><?php echo $food->foodid . '. ' . $food->foodname ?></h1>
                    <h2 class="text-sm font-bold">RM<?php echo e(number_format($food->price, 2)); ?></h2>
                </div>

                <?php
                if ($topping) {
                    $count = 1;
                    foreach ($topping as $topping) {
                        $radioname = "radio" . $count;
                        echo '<hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">';
                        echo "<div class='w-full'>
                        <div class='flex flex-row justify-between'>
                            <div>
                                <h2 class='text-xl font-bold'>Add Topping</h1>
                                    <p class='text-sm text-gray-600'>Select one of the options</p>
                            </div>
                            <div class='w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl'>
                                <p class='text-center text-white text-sm my-1'>Required</p>
                            </div>
                        </div>
                        <div class='mt-3'>";
                        $choice = DB::table('toptions')
                            ->where('topping_id', '=', $topping->id)
                            ->get();
                        $counter = 1;
                        foreach ($choice as $choice) {
                            if($counter == "1"){
                                echo "<div class='flex items-center'>
                                    <input class='w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500' type='radio' id='$counter' name=$radioname value=$choice->id checked>
                                    <label class='ml-2 text-lg align-middle' for='topping1'>" . $choice->option . "</label>
                                </div>";
                                $counter++;
                            }else{
                                echo "<div class='flex items-center'>
                                    <input class='w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500' type='radio' id='$counter' name=$radioname value=$choice->id>
                                    <label class='ml-2 text-lg align-middle' for='topping1'>" . $choice->option . "</label>
                                </div>";
                            }
                        }
                        echo
                        "</div>";
                        $count++;
                    }
                }
                ?>

                <?php
                
                if ($addon) {
                    $countbox = 1;
                    foreach ($addon as $addonItem) {
                        $count = 1;
                        $checkbox = 'checkbox'.$countbox;
                        $checkboxname = $checkbox . '['.$count.']';
                        echo '<hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">';
                        echo '<div class="w-full">
                        <div class="flex flex-row justify-between">
                            <h2 class="text-xl font-bold">Add-On</h2>
                            <div class="w-20 my-auto bg-gray-500 shadow-md max-w-md rounded-2xl">
                                <p class="text-center text-white text-sm my-1">Optional</p>
                            </div>
                        </div>';
                    
                        $choices = DB::table('aoptions')
                            ->where('addon_id', '=', $addonItem->id)
                            ->get();
                        echo '<div class="mt-3">';
                        foreach ($choices as $choice) {
                            echo '<div class="flex flex-row justify-between">
                            <div class="flex items-center">
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" name= ' . $checkboxname . ' value= '. $choice->id .'>
                                <label class="ml-2 text-lg align-middle" for="addon1">' . $choice->option . '</label>
                            </div>
                            <div class="flex items-center">
                                <div class="text-center align-middle">
                                    <p class="text-gray-700 leading-7">+ RM ' . number_format($choice->price, 2) . '</p>
                                </div>
                            </div>
                            </div>';
                            $count++;
                            $checkboxname = $checkbox . '['.$count.']';
                        }
                        echo '</div>';
                        $countbox++;
                    }
                }
                ?>
                <hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">

                <div class="w-full">
                    <h2 class="text-xl font-bold">Special Request</h1>
                        <p class="text-sm text-gray-600">Please let us know if you are allergic to any anything or require us to avoid anything.</p>
                        <div class="mt-3">
                            <textarea class="w-full h-20 p-2 border-2 border-pigment-indigo-400 rounded-md focus:border-pigment-indigo-500" name="request" placeholder="e.g. No peanut"></textarea>
                        </div>
                </div>
            </div>
        </div>

        <div class="w-full px-8 py-3 fixed inset-x-0 bottom-0 shadow-inner bg-pigment-indigo-100">
            <div class="flex flex-row justify-between">
                <div class="flex flex-row justify-center items-center text-center">
                    <button type="button" class="text-5xl text-pigment-indigo-400" onclick="minus1()"><img id="minus" src="<?php echo e(asset('image/minus.png')); ?>" width="20px" height="20px"></button>
                    <p class="inline-block w-10 h-10 text-3xl font-bold mx-3 bg-pigment-indigo-100 border-2 border-pigment-indigo-500 rounded-lg shadow-md" id="count">1</p>
                    <input type="hidden" id="quantity" name="quantity" value=1>  
                    <button type="button" class="text-5xl text-pigment-indigo-400" onclick="add1()"><img id="add" src="<?php echo e(asset('image/add.png')); ?>" width="20px" height="20px"></button>
                </div>
                <input type="submit" value="Add to Cart" class="inline-block px-4 py-2 text-center text-xl font-bold bg-pigment-indigo-400 border-4 border-pigment-indigo-500 text-white rounded-lg shadow-md">
            </div>
        </div>
    </form>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/food.blade.php ENDPATH**/ ?>