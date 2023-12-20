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
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="dashboard">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 font-medium">Dashboard</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="adminmenu">
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
                        <a href="adminmenu" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Menu
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Preview</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex flex-col items-center">
                <div class="w-11/12 mt-8 bg-white shadow-md max-w-md rounded-xl">
                    <img class="rounded-xl w-full" src='storage/image/<?php echo $food->image_url ?>'>
                </div>

                <div class="flex flex-col w-11/12 px-5 py-5 -mt-8 bg-white shadow-md max-w-md rounded-xl">
                    <div class="w-full flex justify-between items-center">
                        <h1 class="text-2xl font-bold"><?php echo $food->foodid . '. ' . $food->foodname ?></h1>
                        <h2 class="text-sm font-bold">RM{{ number_format($food->price, 2) }}</h2>
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
                                <h2 class='text-xl font-bold'>" . $topping->title . "</h1>
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
                                if ($counter == "1") {
                                    echo "<div class='flex items-center'>
                                    <input class='w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500' type='radio' id='$counter' name=$radioname value=$choice->id checked>
                                    <label class='ml-2 text-lg align-middle' for='topping1'>" . $choice->option . "</label>
                                </div>";
                                    $counter++;
                                } else {
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
                            $checkbox = 'checkbox' . $countbox;
                            $checkboxname = $checkbox . '[' . $count . ']';
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
                                <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-400 border-pigment-indigo-400 border-2 rounded focus:outline focus:ring focus:ring-pigment-indigo-500" type="checkbox" name= ' . $checkboxname . ' value= ' . $choice->id . '>
                                <label class="ml-2 text-lg align-middle" for="addon1">' . $choice->option . '</label>
                            </div>
                            <div class="flex items-center">
                                <div class="text-center align-middle">
                                    <p class="text-gray-700 leading-7">+ RM ' . number_format($choice->price, 2) . '</p>
                                </div>
                            </div>
                            </div>';
                                $count++;
                                $checkboxname = $checkbox . '[' . $count . ']';
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
        </main>
        <script>

        </script>
</body>

</html>