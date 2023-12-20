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
        <div class="flex flex-col items-center w-full mt-3 border-t hover:bg-gray-300 border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded " href="cheforderlist">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/order.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Order</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 bg-gray-300 rounded" href="notify">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/notification.png')}}" width="24px" height="24px">
                <span class="ml-2 font-medium">Notification</span>
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

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[328px]">

        </div>

        <main class="flex flex-col w-full h-full">
        <nav class="flex pt-4 pl-4" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="notify" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Notification
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="chefaddnotification" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Add Notification</a>
                        </div>
                    </li>
                </ol>
            </nav>

            <div class="m-16 mb-0 p-4 border-solid rounded-2xl shadow-lg bg-white min-w-screen transition-all">
                <form class="w-full p-8" action="addnotification" method="get">
                    <label for="website-admin" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Subject</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 text-m text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                            <img src="{{ asset('image/subject.png')}}" width="25px" height="25px">
                        </span>
                        <input type="text" name="subject" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-m p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your subject here" required>
                    </div>
                    <div class="mt-8 mb-6">
                        <label for="message" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea rows="16" name="description" class="block p-2.5 w-full text-m text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Leave a description..." required></textarea>
                    </div>
                    <input type="hidden" name="roles" value="Chef">
                    <div class="flex justify-center">
                    <input type="submit" name="submit" class="inline-block py-3 text-center text-xl font-bold bg-pigment-indigo-500 text-white rounded-lg shadow-md w-36">
                    </div>
                </form>   
            </div> 
        </main>
    </div>
    <script>

    </script>
</body>

</html>