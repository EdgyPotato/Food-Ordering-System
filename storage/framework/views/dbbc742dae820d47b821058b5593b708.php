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
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="adminmenu"><img class="mr-[10px]" src="<?php echo e(asset('image/menu.png')); ?>" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-gray-200" href="account"><img class="mr-[10px]" src="<?php echo e(asset('image/account.png')); ?>" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="<?php echo e(asset('image/logout.png')); ?>" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <main class="flex flex-col w-screen h-screen p-8">
            <div class="flex justify-between items-center px-5">
                <div class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><a href="createuser">Create Account</a></div>
                <div class="search">
                    <form id="example" action="account" method="get" class="flex items-center">
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
            </div>
            
            <div class="relative overflow-x-auto p-4 pt-8">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                USERNAME
                            </th>
                            <th scope="col" class="px-6 py-3">
                                PASSWORD
                            </th>
                            <th scope="col" class="px-6 py-3">
                                ROLES
                            </th>
                            <th scope="col" class="px-6 py-3">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $search = '';

                            if (request()->has('search')) {
                                $search = request('search');
                            }
        
                            $sql = DB::table('users')
                                ->where('username', 'LIKE', '%' . $search . '%')
                                ->get();
                            foreach ($sql as $user) {
                        ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <?php echo $user->id ?>
                            </th>
                            <td class="px-6 py-4">
                                <?php echo $user->username ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $user->password ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php echo $user->roles ?>
                            </td>
                            <td class="px-6 py-4">
                                <form method='POST' action='delete' onsubmit='return confirmation()'>
                                <?php echo csrf_field(); ?>
                                    <input type='text' name='id' value='<?php echo $user->id ?>' hidden>
                                    <input type='submit' name='submit' value='Delete' class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>

</html>
</div>

<script>
    function confirmation() {
        return confirm("Are you sure want to delete?");
    }
</script>
</body>

</html><?php /**PATH C:\AD Project\AD-Project\resources\views/account.blade.php ENDPATH**/ ?>