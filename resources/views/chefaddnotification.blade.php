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

<body class="bg-grey-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-aqua-green-500 to-aqua-green-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="cheforderlist"><img src="{{ asset('image/order.png')}}" width="35px" height="35px">Order List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="notify"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px">Notify</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <main class="flex flex-col w-full h-full">
            <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-aqua-green-500 to-aqua-green-400">
                <div class="flex justify-start">
                    <a class="flex justify-end" href="notify"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </div>

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