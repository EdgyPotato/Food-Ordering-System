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

<body class="bg-gray-200 h-screen w-screen">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="dashboard"><img class="mr-[10px]" src="<?php echo e(asset('image/reservation.png')); ?>" width="35px" height="35px">Dashboard</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-gray-200" href="adminmenu"><img class="mr-[10px]" src="<?php echo e(asset('image/menu.png')); ?>" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="account"><img class="mr-[10px]" src="<?php echo e(asset('image/account.png')); ?>" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="<?php echo e(asset('image/logout.png')); ?>" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <main class="flex flex-col w-screen h-screen p-12">
            <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 dark:bg-gray-900">
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
                                <a href="addmenu" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add Menu</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <form id="example" action="adminmenu" method="get" class="flex items-center">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search branch name...">
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
            $search = '';

            if (request()->has('search')) {
                $search = request('search');
            }
            $sql = DB::table('menus')
                ->orderByRaw("
                    CASE 
                        WHEN categories = 'food' THEN 1
                        WHEN categories = 'beverages' THEN 2
                        ELSE 3
                    END
                ")
                ->where('foodid', 'LIKE', '%' . $search . '%')
                ->where('status', '!=', 'deleted')
                ->get();
            ?>
            <form id='form' method="get" action="deletemenu">
                <input type="hidden" name='id' id='hidden'>
                <input type="hidden" name='action' id='action'>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Food Id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Food Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Categories
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($sql as $food) { ?>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4">
                                        <img src="storage/image/<?php echo $food->image_url; ?>" class="w-20 h-20 rounded-md shadow-lg" alt="Apple Watch">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <?php echo $food->foodid; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php echo $food->foodname; ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <?php echo ucwords($food->categories); ?>
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                        <?php echo "RM " . number_format($food->price, 2); ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                                <img class="w-4 h-4 me-1" src="<?php echo e(asset('image/preview.png')); ?>">
                                                Preview
                                            </button>
                                            <button type="button" class="inline-flex items-center px-4 py-2 text-sm font-medium text-red-600 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white capitalize" onclick='submitForm("<?php echo $food->foodid; ?>", "delete")'>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-4 h-4 me-1">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </main>
</body>

</html>
</div>
<script>
    function submitForm(id, action) {
        // Set the value of the hidden input field
        document.getElementById('hidden').value = id;
        document.getElementById('action').value = action;
        // Allow the form submission to proceed
        if (confirm("Do you sure want to delete " + id + " food"))
            document.getElementById('form').submit();
    }

    function detectEnterKey(event) {
        if (event.key === "Enter") {
            // Enter key was pressed
            event.preventDefault(); // Prevents the default action (e.g., form submission)

            // Your code to handle Enter key press goes here
            console.log("Enter key pressed!");

            // For example, you might want to call a function:
            // handleEnterKeyPress();
        }
    }
</script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/adminmenu.blade.php ENDPATH**/ ?>