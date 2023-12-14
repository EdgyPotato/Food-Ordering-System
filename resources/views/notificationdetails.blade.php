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

<body class="bg-gray-200">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="reservation_staff"><img class="mr-1" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Reservation</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="menulist"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="orderlist"><img src="{{ asset('image/order.png')}}" width="35px" height="35px">Order List</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-grey-200" href="notification"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px">Notification</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>
        <?php 
        use Illuminate\Support\Carbon;

        $notificationDate = Carbon::parse($notification->updated_at)->format('d M Y H:i A');
        ?>
        <main class="flex flex-col w-full h-full">
            <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
                <div class="flex justify-start">
                    <a class="flex justify-end" href="notification"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </div>
            
            <div class="m-16 mb-0 p-8 border-solid rounded-2xl shadow-lg bg-white min-w-screen min-h-full transition-all">
                <div class="flex justify-between px-2">
                    <h2 class="text-2xl font-medium text-gray-900" id="slide-over-title"><?php echo $notification->subject; ?></h2>
                    <h2 class="text-xl italic font-normal text-gray-900" id="slide-over-title"><?php echo 'From: ' . $notification->roles; ?></h2>
                </div>
                <hr class="w-full mx-auto my-3 h-1 bg-gray-200 border-0 rounded">
                <div class="flex items-center justify-between px-2">
                    <h2 class="text-lg font-light text-gray-900" id="slide-over-title"><?php echo $notificationDate; ?></h2>
                    <h2 class="text-lg italic font-medium text-gray-900" id="slide-over-title"><?php echo 'Status: ' . $notification->status; ?></h2>
                </div>
                <label for="id" class="block mt-8 mb-3 text-2xl font-medium text-gray-900 dark:text-white">Description:</label>
                <div class="block w-full h-64 py-2 px-3 bg-pigment-indigo-100 opacity-80 border-solid border-2 border-black rounded-md"><?php echo $notification->description; ?></div>
                <?php if($notification->roles == "Chef" && $notification->status == "In Progress"){?>
                <form action="solved" class="flex justify-center">
                    <input type="hidden" name="id" value="<?php echo $notification->id ?>"> 
                    <input type="submit" name="submit" value="Solve" class="inline-block py-3 mt-3 text-center text-xl font-bold bg-pigment-indigo-500 text-white rounded-lg shadow-md w-36">
                </form>
                <?php } ?>
            </div> 
        </main>
    </div>
    <script>

    </script>
</body>

</html>