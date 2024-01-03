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
    <title>Reservation</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon/logo.ico')); ?>">
</head>

<body class="bg-gray-200 flex flex-col items-center justify-center">
    <div class="w-full px-6 py-4 h-[62px] shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <a class="flex" href="#">
            <img class="w-8 h-8 fill-current rounded-full" src="<?php echo e(asset('image/logo.png')); ?>" width="32px" height="32px">
            <span class="ml-2 text-xl font-bold text-white">Molek Cafe</span>
        </a>
    </div>

    <?php
    $reservation = DB::table('reservations')->where('id', $_GET['reservationid'])->first();
    $reservationsmall = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 1)->where('people', '<=', 4)->where('created_at', '<', $reservation->created_at)->get();
    $reservationbig = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 5)->where('people', '<=', 8)->where('created_at', '<', $reservation->created_at)->get();

    if ($reservation->people >= 1 && $reservation->people <= 4)
        $reservationno = count($reservationsmall);
    else
        $reservationno = count($reservationbig);
    ?>

    <div class="flex flex-col items-center w-11/12 px-5 py-5 mt-8 bg-white max-w-md rounded-xl rounded-b-3xl shadow-xl">
        <div class="flex justify-center items-center">
            <h1 class="text-xl text-gray-900 font-bold p-4">Booking Successful</h1>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="green" class="w-10 h-10">
                <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
            </svg>
        </div>
        <hr class="w-full h-1 mx-auto my-2 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <h1 class="text-2xl text-gray-900 font-bold p-2">You are now in queue</h1>
        <h1 class="text-4xl text-pigment-indigo-400 font-extrabold text-center"><?php if (!$reservationno) echo "It's your turn now!";
                                                                                else echo $reservationno; ?></h1><?php
        $reservation = DB::table('reservations')->where('id', $_GET['reservationid'])->first();
        ?>

        <div class="flex justify-between w-full px-2 py-6 text-lg">
            <div class="relative overflow-x-auto w-full">
                <table class="w-full text-sm text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="text-lg font-bold text-gray-500 pb-4 pr-4">
                                Time
                            </td>
                            <td class="text-lg font-semibold text-gray-900 pb-4">
                                <?php echo $reservation->created_at ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="text-lg font-bold text-gray-500 pb-4 pr-4">
                                Booked By
                            </td>
                            <td class="text-lg font-semibold text-gray-900 pb-4 ">
                                <?php echo $reservation->name ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="text-lg font-bold text-gray-500 pb-4 pr-4">
                                No. People
                            </td>
                            <td class="text-lg font-semibold text-gray-900 pb-4">
                                <?php echo $reservation->people ?>
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="text-lg font-bold text-gray-500 pb-4 pr-4">
                                Reference No.
                            </td>
                            <td class="text-lg font-semibold text-gray-900 pb-4">
                                R10<?php echo $reservation->id ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <?php if ($reservationno) { ?>
            <p class="font-bold text-sm px-4 text-center pb-8">*Please be patient, we will call you if the table is available.</p>
            <form class="w-full" action="cancelreservation" method="get">
                <input type="hidden" name="id" value="<?php echo $_GET['reservationid'] ?>">
                <div class="flex w-full">
                    <a href="" class="text-white bg-pigment-indigo-400 hover:bg-pigment-indigo-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-l-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Refresh</a>
                    <input type="submit" value="Cancel" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-r-lg text-sm w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="return confirm('Are you sure want to cancel?');">
                </div>
            </form>
        <?php } else {}?>
    </div>

</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/reservedcompleted.blade.php ENDPATH**/ ?>