<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width,
    initial-scale=1.0"> @vite('resources/css/app.css') <style> @media screen and (max-width: 720px){} </style>
<title>Menu </title> </head>

    <body class="bg-gray-200">
        <div class="flex flex-col items-center">
            <div
                class="w-full px-6 py-4 shadow-md max-w-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
                <div class="return">
                    <a href=cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </div>

            <div class="w-80 mt-8 bg-white shadow-md max-w-md rounded-xl">
                <img class="rounded-xl" src="{{ asset('image/food.jpg')}}">
            </div>

            <div class="flex flex-col w-80 px-5 py-5 -mt-8 bg-white shadow-md max-w-md rounded-xl">
                <div class="w-full flex justify-between items-center">
                    <h1 class="text-2xl font-bold">F01. Fish & Chips</h1>
                    <h2 class="text-sm font-bold">RM 13.00</h2>
                </div>
                <hr class="w-full mx-auto my-5 h-1 bg-gray-200 border-0 rounded">
                <div class="w-full">
                    <div class="flex flex-row justify-between">
                        <div>
                            <h2 class="text-xl font-bold">Add Topping</h1>
                                <p class="text-xs text-gray-600">Select one of the options</p>
                        </div>
                        <div class="w-20 my-auto bg-pigment-indigo-500 shadow-md max-w-md rounded-2xl">
                            <p class="text-center text-white text-sm my-1">Required</p>
                        </div>
                    </div>
                    <form class="mt-3" action="/topping.php">
                        <input
                            class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                            type="checkbox" id="topping1" name="topping1" value="topping1">
                        <label class="ml-2 text-lg align-middle" for="topping1">No Sauce</label><br>
                        <input
                            class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                            type="checkbox" id="topping2" name="topping2" value="topping2">
                        <label class="ml-2 text-lg align-middle" for="topping2">BBQ Sauce</label><br>
                        <input
                            class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                            type="checkbox" id="topping3" name="topping3" value="topping3">
                        <label class="ml-2 text-lg align-middle" for="topping3">Korean Spicy Sauce</label><br>
                        <input
                            class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                            type="checkbox" id="topping4" name="topping4" value="topping4">
                        <label class="ml-2 text-lg align-middle" for="topping4">Salted Egg Sauce</label><br>
                    </form>
                </div>
                <hr class="w-full mx-auto my-5 h-1 bg-gray-200 border-0 rounded">
                <div class="w-full">
                    <div class="flex flex-row justify-between">
                        <div>
                            <h2 class="text-xl font-bold">Add-On</h1>
                        </div>
                        <div class="w-20 my-auto bg-gray-500 shadow-md max-w-md rounded-2xl">
                            <p class="text-center text-white text-sm my-1">Optional</p>
                        </div>
                    </div>
                    <div class="flex flex-row justify-between">
                        <form class="mt-3" action="/addon.php">
                            <input
                                class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                                type="checkbox" id="addon1" name="addon1" value="addon1">
                            <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label><br>
                            <input
                                class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                                type="checkbox" id="addon2" name="addon2" value="addon2">
                            <label class="ml-2 text-lg align-middle" for="addon2">Add Meat</label><br>
                            <input
                                class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                                type="checkbox" id="addon3" name="addon3" value="addon3">
                            <label class="ml-2 text-lg align-middle" for="addon3">Add Egg</label><br>
                            <input
                                class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded"
                                type="checkbox" id="addon4" name="addon4" value="addon4">
                            <label class="ml-2 text-lg align-middle" for="addon4">Add French Fries</label><br>
                        </form>
                        <div class="my-3 text-center align-middle">
                            <p class="h-auto">+ RM 2.00</p>
                            <p class="h-auto">+ RM 3.00</p>
                            <p class="h-auto">+ RM 1.00</p>
                            <p class="h-auto">+ RM 2.00</p>
                        </div>
                        

                    </div>
                    <div class="flex flex-row justify-between">
                        <form class="mt-3" action="/addon.php">
                            <div class="flex flex-row justify-between items-center mb-2">
                                <div>
                                    <input class="w-5 h-5 bg-pigment-indigo-100 text-pigment-indigo-500 border-pigment-indigo-500 border-2 rounded" type="checkbox" id="addon1" name="addon1" value="addon1">
                                    <label class="ml-2 text-lg align-middle" for="addon1">Add Spaghetti</label>
                                    <label class="mx-auto text-lg align-middle items">+ RM 2.00</label>
                                
                                </div>
                            </div>
                            <!-- Repeat the above div for each item -->
                        </form>
                    </div>

                </div>
            </div>
    </body>

    </html>