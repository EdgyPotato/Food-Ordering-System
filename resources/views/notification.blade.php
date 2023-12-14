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

        <main class="flex flex-col w-full h-full">
            <div class="w-full px-6 py-[15px] shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
                <div class="flex justify-end">
                    <a class="flex justify-end" href="staffaddnotification">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 stroke-white stroke-[3px]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </a>
                </div>
            </div>
            <form id="form" action="details" method="get">
            <input type="hidden" id="hidden" name="id">
            <div class="grid grid-cols-2 justify-between items-start my-12 px-12 pt-[10px] gap-x-12 gap-y-8 w-full">
                <?php

                use Illuminate\Support\Carbon;

                $notifications = DB::table('notifications')->orderBy('updated_at', 'desc')->get();

                if (count($notifications) > 0) {
                    $currentDate = null;

                    foreach ($notifications as $notificationItem) {
                        $temp = Carbon::parse($notificationItem->updated_at);
                        $temp->setTime(12, 0, 0);
                        if ($currentDate) {
                            $currentDate = Carbon::parse($currentDate);
                            $currentDate->setTime(12, 0, 0);
                        }


                        // Check if the dates are different
                        if ($temp != $currentDate) {
                            // Close the previous date container if it exists
                            if (!is_null($currentDate)) {
                                echo '</ul></div></div>';
                            }

                            // Start a new date container
                            echo '<div class="area-date-container">';
                            echo '<label for="date" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">' . $temp->format('d M Y') . '</label>';
                            echo '<div class="flex flex-col container max-w-md mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg shadow">';
                            echo '<ul class="flex flex-col divide-y w-full">';
                        }

                        // Display individual notifications
                        echo '<li class="flex flex-row" onclick="submitForm(\'' . $notificationItem->id . '\')">';
                        echo '<div class="select-none cursor-pointer hover:bg-gray-50 flex flex-1 justify-between items-center p-4 w-full">';
                        echo '<div>';
                        echo '<div class="text-xl font-medium text-gray-900">' . $notificationItem->subject . '</div>';
                        echo '<div class="italic">Status: ' . $notificationItem->status . '</div>';
                        echo '<div class="mt-2 text-m font-medium italic">From: ' . $notificationItem->roles . '</div>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';

                        // Update the current date
                        $currentDate = $temp;
                    }

                    // Close the last date container
                    echo '</ul></div></div>';
                } else {
                    echo 'No notifications found.';
                }
                ?>
            </form>
        </main>
    </div>
    <script>
        function submitForm(id) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>

</html>