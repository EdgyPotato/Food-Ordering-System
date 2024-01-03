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
    <title>Reservation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/logo.ico')}}">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="orderlist">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/order.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="menulist">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/menu.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Menu</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 bg-gray-300 rounded" href="reservation_staff">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/reservation.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Reservation</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="notification">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/notification.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Notification</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 hover:bg-gray-300 rounded" href="payment">
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

<body class="bg-gray-200 h-full w-full overflow-x-hidden">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <main class="flex flex-col w-full h-full">
            <nav class="flex pt-4 pl-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="reservation_staff" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Reservation
                        </a>
                    </li>
                </ol>
            </nav>
            <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 px-12 py-4 dark:bg-gray-900">
                <div>
                    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button">
                        <span class="sr-only">Action button</span>
                        Action
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownAction" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                            <li>
                                <a href="reservationhistory" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php
                $reservationsmall = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 1)->where('people', '<=', 4)->get();
                $reservationbig = DB::table('reservations')->where('status', 'waiting')->where('people', '>=', 5)->where('people', '<=', 8)->get();
                ?>

                <div class="flex flex-col items-center justify-center w-11/12 h-[41.78px] bg-white shadow-md max-w-md rounded-xl">
                    <div class="flex justify-around w-full p-2.5">
                        <div class="flex items-center">
                            <label class="mr-2 font-semibold">Small (2-4): </label>
                            <p class="text-xl font-extrabold text-pigment-indigo-400 dark:text-white"><?php echo count($reservationsmall) ?></p>
                        </div>
                        <div class="flex items-center">
                            <label  class="mr-2 font-semibold">Large (5-8): </label>
                            <p class="text-xl font-extrabold text-pigment-indigo-400 dark:text-white"><?php echo count($reservationbig) ?></p>
                        </div>
                    </div>
                </div>
                <form action="reservation_staff" method="get" class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name...">
                    </div>
                    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            <?php
            $name = "";
            if (isset($_GET['search']))
                $name = $_GET['search'];

            $reservation = DB::table('reservations')->where('status', '!=', 'solved')->where('name', 'LIKE', '%' . $name . '%')->get();
            ?>
            <div class="relative overflow-x-auto px-12">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-pigment-indigo-200 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-4 rounded-tl-xl">
                                RID
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Phone No
                            </th>
                            <th scope="col" class="px-6 py-4 text-center">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-4">
                                QTY People
                            </th>
                            <th scope="col" class="px-6 py-4">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-4 rounded-tr-xl text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($reservation as $reservations) { ?>
                            <tr class="bg-pigment-indigo-100 border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?php echo "R10" . $reservations->id ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $reservations->name ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $reservations->phone ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $reservations->email ?>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <?php echo $reservations->people ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo ucfirst($reservations->status) ?>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <form id="form" action="solvereservation" method="get">
                                        <input type="hidden" id="hidden" name="id">
                                        <button type="button" class="px-4 py-1 text-sm font-medium rounded-2xl shadow-xl border-2 border-black text-gray-900 bg-aqua-green-500  hover:bg-aqua-green-600 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700  dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white" onclick="submitForm('<?php echo $reservations->id ?>')">
                                            Solved
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </main>
        <script>
            function submitForm(id) {
                if (confirm("Conform to solve?")) {
                    // Set the value of the hidden input field
                    document.getElementById('hidden').value = id;
                    // Allow the form submission to proceed
                    document.getElementById('form').submit();
                }
            }
        </script>
</body>

</html>