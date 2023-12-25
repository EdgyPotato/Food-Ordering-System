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

<body class="bg-gray-200 flex flex-col items-center justify-center">
    <div class="w-full px-6 py-4 h-[62px] shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <a class="flex" href="#">
            <img class="w-8 h-8 fill-current rounded-full" src="<?php echo e(asset('image/logo.png')); ?>" width="32px" height="32px">
            <span class="ml-2 text-xl font-bold text-white">Molek Cafe</span>
        </a>
    </div>
    <div class="w-full px-6 pt-6 h-[50px] text-center">
        <h1 class="text-3xl font-bold">RESERVATION</h1>
    </div>

    <?php
    $reservationsmall = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 1)->where('people', '<=', 4)->get();
    $reservationbig = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 5)->where('people', '<=', 8)->get();
    ?>

    <div class="flex flex-col items-center justify-center w-11/12 px-5 py-5 mt-8 h-40 bg-white shadow-md max-w-md rounded-xl">
        <h2 class="text-xl font-bold">Currently In Line</h2>
        <div class="flex justify-around w-full mt-4">
            <div class="flex flex-col items-center">
                <label>Small (2-4)</label>
                <p class="text-xl font-extrabold text-gray-900 dark:text-white pt-2"><?php echo count($reservationsmall) ?></p>
            </div>
            <div class="flex flex-col items-center">
                <label>Large (5-8)</label>
                <p class="text-xl font-extrabold text-gray-900 dark:text-white pt-2"><?php echo count($reservationbig) ?></p>
            </div>
        </div>
    </div>
    <div class="flex flex-col items-center w-11/12 px-5 py-5 mt-12 bg-white shadow-md max-w-md rounded-xl">
        <form class="w-full p-2" action="reserved">
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="name" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alice" required>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@email.com" required>
            </div>
            <div class="mb-5">
                <label for="phonenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone Number</label>
                <input type="tel" id="phonenumber" name="phonenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="0123456789" pattern="01\d\d{7,8}" required>
            </div>
            <div class="mb-5">
                <label for="person" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Number of People</label>
                <select id="person" name="person" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <?php
                    for ($i = 1; $i <= 8; $i++) {
                    ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                    ?>
                </select>
            </div>

            <button type="submit" class="text-white bg-pigment-indigo-400 hover:bg-pigment-indigo-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reserve</button>
        </form>
    </div>



</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/reserve.blade.php ENDPATH**/ ?>