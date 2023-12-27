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
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="dashboard">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 font-medium">Dashboard</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="adminmenu">
                <img class="w-6 h-6 stroke-current" src="<?php echo e(asset('image/menu.png')); ?>" width="24px" height="24px">
                <span class="ml-2 font-medium">Menu</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="account">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span class="ml-2 font-medium">Account</span>
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

<body class="bg-gray-200 h-full w-full overflow-x-hidden">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <main class="flex flex-col w-full h-full">
            <nav class="flex pt-4 pl-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                </ol>
            </nav>

            <?php

            use App\Models\Aoptions;
            use App\Models\Menu;
            use App\Models\Payment;
            use App\Models\PaymentFoodNo;
            use App\Models\PaymentFoodTopping;
            use Carbon\Carbon;

            $sales = 0;

            $currentMonth = Carbon::now()->month;
            $payment = Payment::whereMonth('created_at', $currentMonth)->get();
            foreach ($payment as $payments) {
                $price = 0;
                $paymentfoodno = PaymentFoodNo::where('payment_id', $payments->id)->get();
                foreach ($paymentfoodno as $paymentfoodnos) {
                    $menu = Menu::where('foodid', $paymentfoodnos->foodid)->first();
                    $price += $menu->price;
                    $paymentaddon = PaymentFoodTopping::where('top_or_add', "addon")->where('food_no', $paymentfoodnos->id)->get();
                    foreach ($paymentaddon as $paymentaddons) {
                        $aoption = Aoptions::where('id', $paymentaddons->choice_no)->first();
                        $price += $aoption->price;
                    }

                    $price *= $paymentfoodnos->quantity;
                }
                $sales += $price;
            }

            ?>
            <main class="flex flex-col w-full h-full">
                <div class="flex" id="top-3">
                    <div class="flex flex-row justify-start items-center mt-8 px-6 gap-6 w-full h-full">
                        <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/2 rounded-xl">
                            <div class="w-full flex justify-between items-center">
                                <h1 class="text-2xl font-bold">Sales</h1>
                                <button type="button" id="saleButton" data-dropdown-toggle="dropdownSale">
                                    <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                                <div id="dropdownSale" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                    <a href="sales" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                                </div>
                            </div>
                            <p class="text-base text-grey-600">Total sales of this month</p>
                            <h1 class="text-3xl mt-2 font-bold"><?php echo "RM " . number_format($sales, 2) ?></h1>
                        </div>

                        <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/2 rounded-xl">
                            <div class="w-full flex justify-between items-center">
                                <h1 class="text-2xl font-bold">Profit</h1>
                                <button type="button" id="profitButton" data-dropdown-toggle="dropdownProfit">
                                    <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                                <div id="dropdownProfit" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                    <a href="/dashboard/profit" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                                </div>
                            </div>
                            <p class="text-base text-grey-600">Total profit of this month</p>
                            <h1 class="text-3xl mt-2 font-bold">$6000.00</h1>
                        </div>
                    </div>
                </div>

                <div class="flex px-6 mt-12" id="chart">
                    <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl">
                        <div class="w-full flex justify-between items-center">
                            <h1 class="text-2xl font-bold">Profit of Months</h1>
                            <button type="button" id="profitMonthButton" data-dropdown-toggle="dropdownProfitMonth">
                                <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 50 50">
                                    <circle cx="20" cy="20" r="5"></circle>
                                    <circle cx="5" cy="20" r="5"></circle>
                                    <circle cx="35" cy="20" r="5"></circle>
                                </svg>
                            </button>
                            <div id="dropdownProfitMonth" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                <a href="#" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                            </div>
                        </div>
                        <p class="mb-2 text-base text-grey-600">Total profit of the months</p>
                        <div class="flex-grow">
                            <canvas id="dashboard-card-01" width="848" height="400"></canvas>
                        </div>
                    </div>
                </div>
            </main>
        </main>
</body>

</html>
<script>

</script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/dashboard.blade.php ENDPATH**/ ?>