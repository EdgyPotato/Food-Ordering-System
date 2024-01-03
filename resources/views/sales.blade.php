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
    <title>Sales</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/logo.ico')}}">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl print:hidden">
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
            <nav class="flex pt-4 pl-4 print:hidden" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="sales" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Sales</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <?php

            use App\Models\Aoptions;
            use App\Models\Menu;
            use App\Models\PaymentFoodNo;
            use App\Models\PaymentFoodTopping;
            use Carbon\Carbon;

            $currentMonth = Carbon::now()->month;
            $search = '';

            if (request()->has('search')) {
                $search = request('search');
            }

            $filter = '';
            if (request()->has('filter')) {
                $filter = request('filter');
            }
            ?>
            <main class="flex px-6 pt-16 pb-6 print:pt-0 print:pb-0" id="sales">
                <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl print:shadow-none">
                    <h1 class="px-4 text-3xl font-bold">Sales</h1>
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center" action="sales">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search by food id">
                                </div>
                            </form>
                        </div>
                        <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                            <div class="flex items-center space-x-3 w-full md:w-auto">
                                <button id="generatePDF" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button" onclick="print();">
                                    Generate PDF
                                </button>
                                <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                    </svg>
                                    Filter
                                    <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                    </svg>
                                </button>
                                <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow">
                                    <h6 class="mb-3 text-sm font-medium text-gray-900">Choose category</h6>
                                    <form action="sales" onchange="getFilter()" id="filterform">
                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                            <li class="flex items-center">
                                                <input id="food" type="radio" value="food" name="filter" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2" <?php if ($filter == "food") { ?> checked <?php } ?>>
                                                <label for="food" class="ml-2 text-sm font-medium text-gray-900">Food</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="beverage" type="radio" value="beverage" name="filter" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2" <?php if ($filter == "beverage") { ?> checked <?php } ?>>
                                                <label for="beverage" class="ml-2 text-sm font-medium text-gray-900">Beverage</label>
                                            </li>
                                            <li class="flex items-center">
                                                <input id="other" type="radio" value="other" name="filter" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2" <?php if ($filter == "other") { ?> checked <?php } ?>>
                                                <label for="other" class="ml-2 text-sm font-medium text-gray-900">Other</label>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto px-4">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase rounded-t-xl bg-gray-300">
                                <tr>
                                    <th scope="col" class="px-4 py-3 rounded-tl-xl">Product ID</th>
                                    <th scope="col" class="px-4 py-3">Product Name</th>
                                    <th scope="col" class="px-4 py-3">Category</th>
                                    <th scope="col" class="px-4 py-3">Quantity</th>
                                    <th scope="col" class="px-4 py-3 rounded-tr-xl">Price</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <?php
                                $menu = Menu::where('foodid', 'LIKE', '%' . $search . '%')->where('categories', 'LIKE', '%' . $filter . '%')->whereMonth('created_at', $currentMonth)->get();
                                foreach ($menu as $menus) {
                                    $quantity = 0;
                                    $totalprice = 0;
                                    $paymentfoodno = PaymentFoodNo::where("foodid", $menus->foodid)->whereMonth('created_at', $currentMonth)->get();
                                    foreach ($paymentfoodno as $paymentfoodnos) {
                                        $price = 0;
                                        $price = $menus->price;
                                        $quantity += $paymentfoodnos->quantity;
                                        $paymentaddon = PaymentFoodTopping::where('top_or_add', 'addon')->where('food_no', $paymentfoodnos->id)->get();
                                        foreach ($paymentaddon as $paymentaddons) {
                                            $aoption = Aoptions::where('id', $paymentaddons->choice_no)->first();
                                            $price += $aoption->price;
                                        }
                                        $price *= $paymentfoodnos->quantity;
                                        $totalprice += $price;
                                    }


                                ?>
                                    <tr class="border-b border-gray-300">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap"><?php echo $menus->foodid ?></th>
                                        <td class="px-4 py-3"><?php echo $menus->foodname ?></td>
                                        <td class="px-4 py-3"><?php echo ucwords($menus->categories) ?></td>
                                        <td class="px-4 py-3"><?php echo $quantity ?></td>
                                        <td class="px-4 py-3"><?php echo number_format($totalprice, 2) ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </main>
</body>

</html>
<script>
    function getFilter() {
        document.getElementById('filterform').submit();

    }
</script>
</body>

</html>