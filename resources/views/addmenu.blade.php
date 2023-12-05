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

<body class="bg-gray-200 h-screen w-screen">
    <div class="flex flex-row">
        <div class="flex flex-row justify-start w-[25%]">
            <div class="w-[2%] h-full fixed bg-gradient-to-b from-pigment-indigo-500 to-pigment-indigo-400" id="purplearea"></div>
            <div class="flex flex-col w-[18%] ml-[2%] h-full fixed bg-white">
                <div class="flex justify-center items-center font-script text-[40px] text-pigment-indigo-500 text-center h-1/4" id="molekcafe">Molek</br>Cafe</div>
                <div class="flex flex-col text-black h-3/4">
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="#"><img class="mr-[10px]" src="{{ asset('image/reservation.png')}}" width="35px" height="35px">Dashboard</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl bg-gray-200" href="adminmenu"><img class="mr-[10px]" src="{{ asset('image/menu.png')}}" width="35px" height="35px">Menu</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] items-center font-bold text-xl" href="account"><img class="mr-[10px]" src="{{ asset('image/account.png')}}" width="35px" height="35px">Account</a>
                    <a class="flex flex-row w-full h-1/4 px-[15%] justify-center items-center font-bold text-[25px]" href="logout"><img class="mr-[10px]" src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
                </div>
            </div>
        </div>

        <main class="flex flex-col w-screen h-screen">
            <div class="w-full px-6 py-4 shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
                <div class="return">
                    <a href="adminmenu"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a>
                </div>
            </div>
            <div class="m-12 p-6 border-solid rounded-2xl shadow-lg bg-white min-w-screen transition-all">
                <form action="menu" method="POST" enctype="multipart/form-data">
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Food ID</label>
                            <input type="text" id="id" name="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="F01" required>
                        </div>
                        <div>
                            <label for="food_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Food Name</label>
                            <input type="text" id="food_name" name="foodname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pizza" required>
                        </div>
                        <div>
                            <label for="foodprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price (RM)</label>
                            <input type="number" id="foodprice" name="foodprice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12.90" required>
                        </div>
                        <div>
                            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                            <select id="categories" name="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option class="w-10" value="food">Food</option>
                                <option value="beverages">Beverage</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Write your food details here..."></textarea>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Food Image</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="food_image" type="file" name="my_image">
                        </div>
                        <div id="toppingarea">
                            <div class="flex justify-between items-center">
                                <label for="id" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white bg">Topping (Required)</label>
                                <img src="{{ asset('image/plus.png') }}" class="h-4 w-4" onclick="addTopping()">
                            </div>
                            <!--<input type="text" id="topping1" name="topping1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Topping Title" required required style="display: none;">
                            <input type="text" id="option1[1]" name="option" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-8/12 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Options" required required style="display: none;">-->
                        </div>
                        <div id="addonarea">
                            <div class="flex justify-between items-center">
                                <label for="id" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white bg">Add-on (Optional)</label>
                                <img src="{{ asset('image/plus.png') }}" class="h-4 w-4" onclick="addTopping()">
                            </div>
                            
                        </div>
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </main>
    </div>
    <script>
        var count = 1;

        function addTopping2() {
            // Create a new container for the topping
            var toppingContainer = document.createElement('div');
            
            //Create a topping container to count the quantity of topping
            var countTopping = document.createElement('div');

            // Create a new input element for the topping
            var toppingNode = document.createElement('input');
            toppingNode.type = 'text';
            toppingNode.name = 'topping[]'; // Use an array for multiple choices
            toppingNode.placeholder = 'Enter Topping Title';
            toppingNode.classList.add('bg-gray-50');
            toppingNode.classList.add('mt-4');
            toppingNode.classList.add('border', 'border-gray-300');
            toppingNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            toppingNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            toppingNode.classList.add('block', 'w-full', 'p-2.5');
            toppingNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            toppingNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            toppingNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            // Append the topping input to the container
            toppingContainer.appendChild(toppingNode);

            // Create a container for choices and the "plus" icon
            var choicesContainer = document.createElement('div');
            var firstrowNode = document.createElement('div');
            choicesContainer.classList.add('choices-container');

            // Create a "plus" image for adding options
            var imgSrc = "{{ asset('image/plus.png') }}";
            var imgNode = document.createElement("img");
            imgNode.src = imgSrc;
            imgNode.style.width = "16px";
            imgNode.style.height = "16px";
            imgNode.style.marginRight = "40px";
            imgNode.id = "image" + count;
            imgNode.onclick = function() {
                tOptionsCount = addOption();
            };

            firstrowNode.classList.add('flex','items-center', 'justify-between');
            choicesContainer.appendChild(firstrowNode);

            tOptionsCount = addOption(firstrowNode, tOptionsCount)
            // Append the "plus" image to the choices container
            firstrowNode.appendChild(imgNode);

            // Append the choices container to the topping container
            toppingContainer.appendChild(choicesContainer);

            // Get the container where you want to append the new topping
            var toppingArea = document.getElementById('toppingarea');

            // Append the topping container to the topping area
            toppingArea.appendChild(toppingContainer);
            count++;
        }


        function addOption2(container, tOptionsCount, count) {
            // Create a new input element for the option
            var optionNode = document.createElement('input');
            optionNode.type = 'text';
            optionNode.name = 'option'+count+'[]';
            optionNode.placeholder = 'Choice ' + tOptionsCount;
            optionNode.classList.add('bg-gray-50');
            optionNode.classList.add('border', 'border-gray-300');
            optionNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            optionNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            optionNode.classList.add('block', 'w-8/12', 'p-2.5');
            optionNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            optionNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            optionNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500'); 

            // Append the option input to the choices container
            container.appendChild(optionNode);

            // Increment the option count
            tOptionsCount++;
            return tOptionsCount;
        }



        function addTopping() {
            var toppingarea = document.getElementById("toppingarea");
            // Create a new container for the topping
            var toppingContainer = document.createElement('div');
            toppingarea.appendChild(toppingContainer);

            // Create a new input element for the topping
            var toppingNode = document.createElement('input');
            toppingNode.type = 'text';
            toppingNode.name = 'topping[]'; // Use an array for multiple choices
            toppingNode.placeholder = 'Enter Topping Title';
            toppingNode.classList.add('bg-gray-50');
            toppingNode.classList.add('mt-4');
            toppingNode.classList.add('border', 'border-gray-300');
            toppingNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            toppingNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            toppingNode.classList.add('block', 'w-full', 'p-2.5');
            toppingNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');                                              
            toppingNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');                     
            toppingNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            // Append the topping input to the container
            toppingContainer.appendChild(toppingNode); //topping title append in div
            
            //create the choice container
            var optionContainer = document.createElement("div");
            toppingContainer.appendChild(optionContainer);

            //create first row of option
            var firstrowOption = document.createElement("div");
            firstrowOption.classList.add('flex', 'justify-between', 'items-center');
            optionContainer.appendChild(firstrowOption);

            //image node
            var imgSrc = "{{ asset('image/plus.png') }}";
            var imgNode = document.createElement("img");
            imgNode.src = imgSrc;
            imgNode.style.width = "16px";
            imgNode.style.height = "16px";
            imgNode.style.marginRight = "40px";
            imgNode.id = "image" + count;

            imgNode.onclick = function() {
                addOption(optionContainer, optionContainer.childElementCount+1);
            };

            //append element into firstrow
            addOption(firstrowOption, 1);
            firstrowOption.appendChild(imgNode);
        }

        function addOption(container, optioncount) {
            // Create a new input element for the option
            var optionNode = document.createElement('input');
            optionNode.type = 'text';
            optionNode.name = 'choice'+'[]';
            optionNode.placeholder = 'Choice '+ optioncount;
            optionNode.classList.add('bg-gray-50');
            optionNode.classList.add('border', 'border-gray-300');
            optionNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            optionNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            optionNode.classList.add('block', 'w-8/12', 'p-2.5');
            optionNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            optionNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            optionNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500'); 

            // Append the option input to the choices container
            container.appendChild(optionNode);
        }
    </script>
</body>

</html>