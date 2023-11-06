<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @media screen and (max-width: 720px) {}
    </style>
    <script>
        //temporary js script as reference to future php script
        var count = 1;

        function add() {
            count += 1;
            if (count > 99) {
                count = 99;
            }
            document.getElementById("count").innerHTML = count;
        }

        function minus() {
            count -= 1;
            if (count < 1) {
                count = 1;
            }
            document.getElementById("count").innerHTML = count;
        }
    </script>
    <title>Menu</title>
</head>

<body class="bg-gray-200">
    <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
        <div class="return">
            <a href=cusmenu><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
        </div>
    </div>
    <div class="flex flex-col justify-between items-center">
        <div class="flex flex-col w-11/12 px-5 py-5 mt-5 bg-white shadow-md max-w-md rounded-xl">
            <div class="flex flex-row items-start justify-between">
                <div class="flex flex-row items-start align-middle text-center">
                    <div class="flex align-middle text-center">
                        <button class="text-pigment-indigo-400" onclick="minus()"><img id="minus" src="{{asset('image/minus.png')}}" width="12px" height="12px"></button>
                        <p class="inline-block w-7 h-7 mx-2 text-xl leading-6 font-bold bg-pigment-indigo-100 border-2 border-pigment-indigo-500 rounded-lg shadow-md" id="count">1</p>
                        <button class="text-pigment-indigo-400" onclick="add()"><img id="add" src="{{asset('image/add.png')}}" width="12px" height="12px"></button>
                    </div>
                    <div class="flex flex-col items-start">
                        <h1 class="text-xl mx-2 font-bold">F01. Fish & Chips</h1>
                        <p class="mx-2 italic text-gray-700">+ No sauce</p>
                    </div>

                </div>
                <h2 class="text-base font-semibold leading-7">RM 13.00</h2>
            </div>
            <div class="ml-20 flex flex-row justify-between">
                <a href="/food"><button class="-mx-1 text-lg font-semibold text-aqua-green-600">Edit</button></a>
                <button class="font-semibold text-red-600"><img id="add" src="{{asset('image/remove.png')}}" width="30px" height="30px"></button>
            </div>
            <div class="mt-2">
                <a href="/cusmenu"><button class="text-lg italic font-semibold text-pigment-indigo-500 hover:underline">Add More Items</button></a>
            </div>
        </div>

        <div class="fixed inset-x-0 bottom-0">
            <div class="w-full py-3 shadow-inner rounded-t-3xl bg-pigment-indigo-200">
                <div class="flex flex-row justify-center items-center">
                    <h1 class="text-xl font-bold mx-2">Quantity:</h1>
                    <p class="text-2xl font-bold text-pigment-indigo-400" id="quantity">1</p>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <h1 class="text-xl font-bold mx-2">Nett total:</h1>
                    <p class="text-2xl font-bold text-pigment-indigo-400">RM 13.00</h2>
                </div>
            </div>
            <form method="POST">
                <button class="w-full py-4 text-center text-xl font-bold bg-pigment-indigo-400 active:bg-pigment-indigo-500 text-white shadow-inner" name="checkout">Checkout</button>
            </form>
        </div>
</body>

</html>