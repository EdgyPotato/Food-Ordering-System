<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <style>
        @media screen and (max-width: 720px) {}
    </style>

    <title>Menu</title>
</head>

<body class="bg-gray-200 flex flex-col items-center justify-center h-full">
    <div class="fixed z-20 flex flex-col items-center w-full top-0 pt-4 bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400 rounded-b-3xl shadow-xl">
        <div class="flex justify-between items-center w-full px-6">
            <div class="flex items-center justify-center ">
                <img class="w-8 h-8 fill-current rounded-full" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
                <span class="ml-2 text-xl font-bold text-white">Molek Cafe</span>
            </div>
            <a href="login" class="text-white text-lg font-semibold hover:text-grey-200">Login</a>
        </div>
        <form class="max-w-md w-11/12 pt-6 " action="/">
            <div id="search-bar" class="flex w-full">
                <input type="search" name="search" id="search-dropdown" class="p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-l-lg border-s-gray-50 border-s-2 border border-white focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search by food id or name">
                <button type="submit" class="p-2.5 text-sm font-medium text-white bg-aqua-green-500 rounded-e-lg border border-aqua-green-500 hover:bg-aqua-green-500 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <input type="hidden" name="table" value="<?php echo session('table'); ?>">
            </div>
        </form>
        <div class="flex justify-between items-center w-full pt-6 pb-6 text-white font-bold text-center max-w-md">
            <div class="w-1/3 hover:text-aqua-green-500"><a href="#food">Food</a></div>
            <div class="w-1/3 hover:text-aqua-green-500"><a href="#beverage">Beverages</a></div>
            <div class="w-1/3 hover:text-aqua-green-500"><a href="#other">Others</a></div>
        </div>
    </div>



    <?php

    use App\Models\Menu;

    $search = '';

    if (request()->has('search')) {
        $search = request('search');
    }

    $menufood = Menu::where('status', 'active')
        ->where('categories', 'food')
        ->where(function ($query) use ($search) {
            $query->where('foodid', 'like', '%' . $search . '%')
                ->orWhere('foodname', 'like', '%' . $search . '%');
        })
        ->get();

    $menubeverage = Menu::where('status', 'active')
        ->where('categories', 'beverages')
        ->where(function ($query) use ($search) {
            $query->where('foodid', 'like', '%' . $search . '%')
                ->orWhere('foodname', 'like', '%' . $search . '%');
        })
        ->get();

    $menuother = Menu::where('status', 'active')
        ->where('categories', 'other')
        ->where(function ($query) use ($search) {
            $query->where('foodid', 'like', '%' . $search . '%')
                ->orWhere('foodname', 'like', '%' . $search . '%');
        })
        ->get();
    ?>

    <form id="form" action='tofood' method='get' enctype='multipart/form-data' class="w-full h-full flex justify-center">
        <input type="hidden" id="hidden" name="id">
        <div class="w-full flex justify-center max-w-md">
            <div class="flex flex-col items-center justify-start w-11/12 bg-grey-100 shadow-md rounded-xl pb-16">
                <?php if (count($menufood)) : ?>
                    <span class="w-full text-lg font-bold pl-4 pt-48 pb-1 " id="food">Food</span>
                <?php endif; ?>
                <?php foreach ($menufood as $menus) { ?>
                    <div class="relative z-1 h-28 w-11/12 border-2 mb-2 p-1 pr-2 border-pigment-indigo-200 hover:bg-grey-200 rounded-xl bg-white" onclick='submitForm("<?php echo $menus->foodid ?>")'>
                        <div class="grid grid-cols-5 grid-rows-2 h-full">
                            <div class="row-span-2 col-span-2 p-1 flex justify-start items-center"><img class="w-24 h-24 rounded-lg" src="data:image/jpeg;base64,{{ $menus->image_url }}"></div>
                            <div class="font-bold text-sm col-span-2 -ml-4 mt-1 pr-3"><?php echo $menus->foodid . '. ' . $menus->foodname ?></div>
                            <div class="font-bold -ml-3 text-sm mt-1 text-right"><?php echo 'RM ' . number_format($menus->price, 2) ?></div>
                            <div class="col-span-3 text-gray-500 text-sm -ml-4 -mt-2"><?php echo  Illuminate\Support\Str::limit($menus->description, $limit = 58, $end = '...') ?></div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (count($menubeverage)) : ?>
                    <span class="w-full text-lg font-bold pl-4 pb-1 pt-48 -mt-48" id="beverage">Beverages</span>
                <?php endif; ?>
                <?php foreach ($menubeverage as $menus) { ?>
                    <div class="relative z-1 h-28 w-11/12 border-2 mb-2 p-1 pr-2 border-pigment-indigo-200 hover:bg-grey-200 rounded-xl bg-white" onclick='submitForm("<?php echo $menus->foodid ?>")'>
                        <div class="grid grid-cols-5 grid-rows-2 h-full">
                            <div class="row-span-2 col-span-2 p-1 flex justify-start items-center"><img class="w-24 h-24 rounded-lg" src="data:image/jpeg;base64,{{ $menus->image_url }}"></div>
                            <div class="font-bold col-span-2 text-sm -ml-4 mt-1 pr-3"><?php echo $menus->foodid . '. ' . $menus->foodname ?></div>
                            <div class="font-bold -ml-3 mt-1 text-sm text-right"><?php echo 'RM ' . number_format($menus->price, 2) ?></div>
                            <div class="col-span-3 text-gray-500 text-sm -ml-4 -mt-2"><?php echo  Illuminate\Support\Str::limit($menus->description, $limit = 58, $end = '...') ?></div>
                        </div>
                    </div>
                <?php } ?>
                <?php if (count($menuother)) : ?>
                    <span class="w-full text-lg font-bold pl-4 pt-48 -mt-48 pb-1" id="other">Other</span>
                <?php endif; ?>
                <?php foreach ($menuother as $menus) { ?>
                    <div class="h-28 w-11/12 border-2 mb-2 p-1 pr-2 border-pigment-indigo-200 hover:bg-grey-200 rounded-xl bg-white" onclick='submitForm("<?php echo $menus->foodid ?>")'>
                        <div class="grid grid-cols-5 grid-rows-2 h-full">
                            <div class="row-span-2 col-span-2 p-1 flex justify-start items-center"><img class="w-24 h-24 rounded-lg" src="data:image/jpeg;base64,{{ $menus->image_url }}"></div>
                            <div class="font-bold col-span-2 text-sm -ml-4 mt-1 pr-3"><?php echo $menus->foodid . '. ' . $menus->foodname ?></div>
                            <div class="font-bold -ml-3 mt-1 text-sm text-right"><?php echo 'RM ' . number_format($menus->price, 2) ?></div>
                            <div class="col-span-3 text-gray-500 text-sm -ml-4 -mt-2"><?php echo  Illuminate\Support\Str::limit($menus->description, $limit = 58, $end = '...') ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </form>

    <div class="fixed flex justify-between items-center bottom-0 w-full p-2 bg-pigment-indigo-200 rounded-t-2xl">
        <div class="px-2 pt-1 text-xl font-bold">Table <?php echo session('table') ?></div>
        <div class="px-2"><a href="addcart"><img src="{{ asset('image/cart.png')}}" width="40px" height="40px"></a></div>
    </div>
    <script>
        function submitForm(id) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Trigger the form submission
            document.getElementById('form').submit();
        }
    </script>
</body>

</html>