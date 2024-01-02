<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
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
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="dashboard">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 font-medium">Dashboard</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="adminmenu">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/menu.png')}}" width="24px" height="24px">
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
            use App\Models\Expense;
            use App\Models\Menu;
            use App\Models\Payment;
            use App\Models\PaymentFoodNo;
            use App\Models\PaymentFoodTopping;
            use Carbon\Carbon;

            $currentMonth = Carbon::now()->format('Y-m');

            if (isset($_GET['date'])) {
                $currentMonth = $_GET['date'];
            }
            list($year, $month) = explode('-', $currentMonth);
            $sales = 0;
            $payment = Payment::whereYear('created_at', $year)
                ->whereMonth('created_at', $month)
                ->get();
            foreach ($payment as $payments) {
                $paymentfoodno = PaymentFoodNo::where('payment_id', $payments->id)->get();
                foreach ($paymentfoodno as $paymentfoodnos) {
                    $price = 0;
                    $menu = Menu::where('foodid', $paymentfoodnos->foodid)->first();
                    $price += $menu->price;
                    $paymentaddon = PaymentFoodTopping::where('top_or_add', "addon")->where('food_no', $paymentfoodnos->id)->get();
                    foreach ($paymentaddon as $paymentaddons) {
                        $aoption = Aoptions::where('id', $paymentaddons->choice_no)->first();
                        $price += $aoption->price;
                    }
                    $price *= $paymentfoodnos->quantity;
                    $sales += $price;
                }
            }

            $expense = Expense::whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->get();
            $totalexpense = 0;
            foreach ($expense as $expenses) {
                $totalexpense += $expenses->expense;
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
                                <h1 class="text-2xl font-bold">Expense</h1>
                                <button type="button" id="saleButton" data-dropdown-toggle="dropdownExpense">
                                    <svg class="w-8 h-8 fill-grey-400" viewBox="0 0 32 32">
                                        <circle cx="16" cy="16" r="2"></circle>
                                        <circle cx="10" cy="16" r="2"></circle>
                                        <circle cx="22" cy="16" r="2"></circle>
                                    </svg>
                                </button>
                                <div id="dropdownExpense" class="z-10 hidden bg-grey-100 rounded-lg shadow">
                                    <a href="expense" class="block px-4 py-2 hover:bg-grey-200 hover:rounded-lg ">View More</a>
                                </div>
                            </div>
                            <p class="text-base text-grey-600">Total expense of this month</p>
                            <h1 class="text-3xl mt-2 font-bold"><?php echo "RM " . number_format($totalexpense, 2) ?></h1>
                        </div>

                        <div class="flex flex-col px-6 py-6 bg-white shadow-md w-1/2 rounded-xl">
                            <div class="w-full flex justify-between items-center">
                                <h1 class="text-2xl font-bold">Profit</h1>
                                </button>
                            </div>
                            <p class="text-base text-grey-600">Total profit of this month</p>
                            <h1 class="text-3xl mt-2 font-bold"><?php echo "RM " . number_format($sales - $totalexpense, 2) ?></h1>
                        </div>
                    </div>
                </div>

                <?php
                $dailySales = [];
                for ($day = 1; $day <= Carbon::now()->day; $day++) {
                    $sales = 0;

                    $payment = Payment::whereDay('created_at', $day)->get();
                    foreach ($payment as $payments) {

                        $paymentfoodno = PaymentFoodNo::where('payment_id', $payments->id)->get();
                        foreach ($paymentfoodno as $paymentfoodnos) {
                            $price = 0;
                            $menu = Menu::where('foodid', $paymentfoodnos->foodid)->first();
                            $price += $menu->price;
                            $paymentaddon = PaymentFoodTopping::where('top_or_add', "addon")->where('food_no', $paymentfoodnos->id)->get();
                            foreach ($paymentaddon as $paymentaddons) {
                                $aoption = Aoptions::where('id', $paymentaddons->choice_no)->first();
                                $price += $aoption->price;
                            }
                            $price *= $paymentfoodnos->quantity;
                            $sales += $price;
                        }
                    }
                    $dailySales[] = $sales;
                }

                ?>

                <div class="flex px-6 mt-12" id="chart">
                    <div class="flex flex-col px-6 pt-3 py-6 bg-white shadow-md w-full rounded-xl">
                        <div class="flex">
                            <div class="w-full flex justify-start items-center">
                                <h1 class="text-2xl font-bold">Sales By Days</h1>
                            </div>
                            <form id="form" action="dashboard" method="get">
                                <div class="relative max-w-sm">
                                    <input type="month" id="month" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" value="<?php echo date($currentMonth); ?>" onchange="submitForm()">
                                </div>
                            </form>
                        </div>
                        <hr class="w-full h-1 mx-auto my-4 bg-gray-200 border-0 rounded dark:bg-gray-700">
                        <div class="flex-grow">
                            <div class="flex justify-between">
                                <div>
                                    <h5 class="leading-none text-xl font-bold text-gray-600 dark:text-white pb-2">Today Sales: <?php echo "RM " . number_format($sales, 2) ?></h5>
                                </div>
                            </div>
                            <div id="area-chart" style="height: 400px;"></div>
                            
                            <script>
                                // ApexCharts options and config
                                window.addEventListener("load", function() {
                                    // Get the current date
                                    let currentDate = new Date();

                                    // Get the total number of days in the current month
                                    let lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

                                    // Generate an array of days from 1 to the last day of the month
                                    let daysArray = Array.from({
                                        length: lastDayOfMonth
                                    }, (_, i) => i + 1);

                                    // Generate an array of corresponding data (replace this with your actual data)
                                    var dataArray = <?php echo json_encode($dailySales); ?>;
                                    dataArray = dataArray.map(value => parseFloat(value).toFixed(2));

                                    let options = {
                                        chart: {
                                            height: "100%",
                                            maxWidth: "100%",
                                            type: "area",
                                            fontFamily: "Inter, sans-serif",
                                            dropShadow: {
                                                enabled: false,
                                            },
                                            toolbar: {
                                                show: false,
                                            },
                                        },
                                        tooltip: {
                                            enabled: true,
                                            x: {
                                                show: false,
                                            },
                                        },
                                        fill: {
                                            type: "gradient",
                                            gradient: {
                                                opacityFrom: 0.55,
                                                opacityTo: 0,
                                                shade: "#1C64F2",
                                                gradientToColors: ["#1C64F2"],
                                            },
                                        },
                                        dataLabels: {
                                            enabled: false,
                                        },
                                        stroke: {
                                            width: 6,
                                        },
                                        grid: {
                                            show: false,
                                            strokeDashArray: 4,
                                            padding: {
                                                left: 2,
                                                right: 2,
                                                top: 0,
                                            },
                                        },
                                        series: [{
                                            name: "Sales",
                                            data: dataArray,
                                            color: "#1A56DB",
                                        }],
                                        xaxis: {
                                            categories: daysArray.map(day => day + ' ' + currentDate.toLocaleString('default', {
                                                month: 'short'
                                            })),
                                            labels: {
                                                show: false,
                                            },
                                            axisBorder: {
                                                show: false,
                                            },
                                            axisTicks: {
                                                show: false,
                                            },
                                        },
                                        yaxis: {
                                            show: false,
                                        },
                                    };

                                    if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
                                        const chart = new ApexCharts(document.getElementById("area-chart"), options);
                                        chart.render();
                                    }
                                });
                            </script>


                        </div>
                    </div>
                </div>
            </main>
        </main>
        <script>
            function submitForm() {
                // Set the value of the hidden input field
                // Trigger the form submission
                document.getElementById('form').submit();
            }
        </script>
</body>

</html>