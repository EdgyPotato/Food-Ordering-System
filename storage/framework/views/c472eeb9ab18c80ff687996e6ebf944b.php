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
            <main class="flex px-6 pt-16 pb-6 print:pt-0 print:pb-0" id="sales">
                <div class="flex flex-col px-6 py-6 bg-white shadow-md w-full rounded-xl print:shadow-none">
                    <h1 class="px-4 text-3xl font-bold">Sales</h1>
                    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                        <div class="w-full md:w-1/2">
                            <form class="flex items-center">
                                <label for="simple-search" class="sr-only">Search</label>
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2" placeholder="Search" required="">
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
                                    <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                        <li class="flex items-center">
                                            <input id="food" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="food" class="ml-2 text-sm font-medium text-gray-900">Food</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="beverage" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="beverage" class="ml-2 text-sm font-medium text-gray-900">Beverage</label>
                                        </li>
                                        <li class="flex items-center">
                                            <input id="other" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 focus:ring-2">
                                            <label for="other" class="ml-2 text-sm font-medium text-gray-900">Other</label>
                                        </li>
                                    </ul>
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
                                    <th scope="col" class="px-4 py-3">Value</th>
                                    <th scope="col" class="px-4 py-3 rounded-tr-xl">Date</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50">
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F01</th>
                                    <td class="px-4 py-3">Food 1</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">300</td>
                                    <td class="px-4 py-3">RM 890</td>
                                    <td class="px-4 py-3">01/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F02</th>
                                    <td class="px-4 py-3">Food 2</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">200</td>
                                    <td class="px-4 py-3">RM 1099</td>
                                    <td class="px-4 py-3">15/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F03</th>
                                    <td class="px-4 py-3">Food 3</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">123</td>
                                    <td class="px-4 py-3">RM 999</td>
                                    <td class="px-4 py-3">28/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F04</th>
                                    <td class="px-4 py-3">Food 4</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">457</td>
                                    <td class="px-4 py-3">RM 1109</td>
                                    <td class="px-4 py-3">07/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F05</th>
                                    <td class="px-4 py-3">Food 5</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">56</td>
                                    <td class="px-4 py-3">RM 299</td>
                                    <td class="px-4 py-3">21/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F06</th>
                                    <td class="px-4 py-3">Food 6</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">78</td>
                                    <td class="px-4 py-3">RM 799</td>
                                    <td class="px-4 py-3">03/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">F07</th>
                                    <td class="px-4 py-3">Food 7</td>
                                    <td class="px-4 py-3">Food</td>
                                    <td class="px-4 py-3">200</td>
                                    <td class="px-4 py-3">RM 699</td>
                                    <td class="px-4 py-3">14/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">B01</th>
                                    <td class="px-4 py-3">Beverage 1</td>
                                    <td class="px-4 py-3">Beverage</td>
                                    <td class="px-4 py-3">550</td>
                                    <td class="px-4 py-3">RM 399</td>
                                    <td class="px-4 py-3">25/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">B02</th>
                                    <td class="px-4 py-3">Beverages 2</td>
                                    <td class="px-4 py-3">Beverage</td>
                                    <td class="px-4 py-3">665</td>
                                    <td class="px-4 py-3">RM 699</td>
                                    <td class="px-4 py-3">09/05/2023</td>
                                </tr>
                                <tr class="border-b border-gray-300">
                                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap">O01</th>
                                    <td class="px-4 py-3">Others 1</td>
                                    <td class="px-4 py-3">Other</td>
                                    <td class="px-4 py-3">354</td>
                                    <td class="px-4 py-3">RM 499</td>
                                    <td class="px-4 py-3">18/05/2023</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                        <span class="text-sm font-normal text-gray-500">
                            Showing
                            <span class="font-semibold text-gray-900">1-10</span>
                            of
                            <span class="font-semibold text-gray-900">50</span>
                        </span>
                        <ul class="inline-flex items-stretch -space-x-px">
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    <span class="sr-only">Previous</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                    <span class="sr-only">Next</span>
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </main>
        </main>
</body>

</html>
<script>

</script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/sales.blade.php ENDPATH**/ ?>