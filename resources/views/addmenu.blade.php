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
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/logo.ico')}}">
</head>

<!-- Component Start -->
<div class="fixed flex flex-col items-center w-[262px] h-full overflow-hidden text-gray-700 bg-white rounded-r-3xl">
    <a class="flex items-center w-full px-3 mt-3" href="#">
        <img class="w-8 h-8 fill-current" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
        <span class="ml-2 text-xl font-bold">Molek Cafe</span>
    </a>
    <div class="w-full px-2">
        <div class="flex flex-col items-center w-full mt-3 border-t border-gray-300">
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded hover:bg-gray-300" href="dashboard">
                <svg class="w-6 h-6 stroke-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="ml-2 font-medium">Dashboard</span>
            </a>
            <a class="flex items-center w-full h-12 px-3 mt-2 rounded bg-gray-300" href="adminmenu">
                <img class="w-6 h-6 stroke-current" src="{{ asset('image/menu.png')}}" width="24px" height="24px">
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
                        <a href="adminmenu" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Menu
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="addmenu" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Add Menu</a>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="m-12 mt-4 p-6 border-solid rounded-2xl shadow-lg bg-white min-w-screen transition-all">
                <form action="menu" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Food ID</label>
                            <input type="text" id="id" name="id" value="{{ old('id') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="F01" required>
                            @if($errors->any())
                            <div class="flex items-center pl-2 pt-1 text-sm" role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Info</span>
                                <div>
                                    <span class="font-medium text-red-800">Food Id repeat! Change a new Food Id.</span>
                                </div>
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="food_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Food Name</label>
                            <input type="text" id="food_name" name="foodname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pizza" required>
                        </div>
                        <div>
                            <label for="foodprice" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price (RM)</label>
                            <input type="number" step="any" id="foodprice" name="foodprice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12.90" required>
                        </div>
                        <div>
                            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categories</label>
                            <select id="categories" name="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="food">Food</option>
                                <option value="beverages">Beverage</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea id="description" name="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 resize-none" placeholder="Write your food details here..." required></textarea>
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Food Image
                                <div class="text-gray-600 dark:text-gray-400">Supported image format: .png, .jpg, .jpeg & .webp (Max size: 16MB)</div>
                            </label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" id="food_image" type="file" name="my_image" accept=".jpg, .jpeg, .png, .webp" required>
                        </div>
                        <div id="toppingarea">
                            <div class="flex justify-between items-center">
                                <label for="id" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white bg">Topping (Required)</label>
                                <img src="{{ asset('image/plus.png') }}" class="h-4 w-4" onclick="addTopping()">
                            </div>
                            <div id="countTopping"></div>
                        </div>
                        <div id="addonarea">
                            <div class="flex justify-between items-center">
                                <label for="id" class="flex mb-2 text-sm font-medium text-gray-900 dark:text-white bg">Add-on (Optional)</label>
                                <img src="{{ asset('image/plus.png') }}" class="h-4 w-4" onclick="addAddon()">
                            </div>
                            <div id="countAddon"></div>
                        </div>
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
        </main>
    </div>
    <script>
        var count = 1;
        var count2 = 1;

        function addTopping() {
            //Create a topping container to count the quantity of topping
            var countTopping = document.getElementById("countTopping");

            // Create a new container for the topping
            var toppingContainer = document.createElement('div');
            toppingContainer.id = "topping" + count;
            countTopping.appendChild(toppingContainer);

            //image node
            // var imgSrc = "{{ asset('image/dustbin.png') }}";
            // var imgNode = document.createElement("img");
            // imgNode.src = imgSrc;
            // imgNode.style.width = "16px";
            // imgNode.style.height = "16px";
            // imgNode.style.marginLeft = "8px";
            // imgNode.id = "image" + count;
            // imgNode.onclick = function() {
            //     deleteTopping(this.parentNode.parentNode);
            // };

            // Create a new input element for the topping
            var toppingNode = document.createElement('input');
            toppingNode.type = 'text';
            toppingNode.name = 'topping[]'; // Use an array for multiple choices
            toppingNode.placeholder = 'Enter Topping Title';
            toppingNode.classList.add('bg-gray-50');
            toppingNode.classList.add('border', 'border-gray-300');
            toppingNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            toppingNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            toppingNode.classList.add('block', 'w-11/12', 'p-2.5');
            toppingNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            toppingNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            toppingNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            //create containerTopping to store toppingNode and imgNode
            var containerTopping = document.createElement('div');
            containerTopping.classList.add('flex', 'items-center', 'mt-4');
            toppingContainer.appendChild(containerTopping);
            // Append the topping input to the container
            containerTopping.appendChild(toppingNode); //topping title append in div
            // containerTopping.appendChild(imgNode);

            //create the choice container
            var optionContainer = document.createElement("div");
            optionContainer.id = "optionContainer";
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
            imgNode.style.marginRight = "60px";
            imgNode.id = "image" + count;
            imgNode.onclick = function() {
                addOption(optionContainer, optionContainer.childElementCount + 1, toppingContainer.id);
            };

            //append element into firstrow
            addOption(firstrowOption, 1, toppingContainer.id);
            firstrowOption.appendChild(imgNode);
            count++;
        }

        function addOption(container, optioncount, toppingCount) {
            // Create a new input element for the option
            var optionNode = document.createElement('input');
            optionNode.type = 'text';
            optionNode.name = 'choice' + toppingCount + '[]'; // Unique name for each topping
            optionNode.placeholder = 'Choice ' + optioncount;
            optionNode.classList.add('bg-gray-50');
            optionNode.classList.add('border', 'border-gray-300');
            optionNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            optionNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            optionNode.classList.add('block', 'w-6/12', 'p-2.5');
            optionNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            optionNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            optionNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            // Append the option input to the choices container
            container.appendChild(optionNode);
        }

        function addAddon() {
            //Create a topping container to count the quantity of topping
            var countAddon = document.getElementById("countAddon");

            // Create a new container for the topping
            var toppingContainer = document.createElement('div');
            toppingContainer.id = "addon" + count2;
            countAddon.appendChild(toppingContainer);

            //image node
            // var imgSrc = "{{ asset('image/dustbin.png') }}";
            // var imgNode = document.createElement("img");
            // imgNode.src = imgSrc;
            // imgNode.style.width = "16px";
            // imgNode.style.height = "16px";
            // imgNode.style.marginLeft = "8px";
            // imgNode.id = "image" + count2;
            // imgNode.onclick = function() {
            //     deleteTopping(this.parentNode.parentNode);
            // };

            // Create a new input element for the topping
            var toppingNode = document.createElement('input');
            toppingNode.type = 'text';
            toppingNode.name = 'addon[]'; // Use an array for multiple choices
            toppingNode.placeholder = 'Enter Addon Title';
            toppingNode.classList.add('bg-gray-50');
            toppingNode.classList.add('border', 'border-gray-300');
            toppingNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            toppingNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            toppingNode.classList.add('block', 'w-11/12', 'p-2.5');
            toppingNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            toppingNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            toppingNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            //create containerTopping to store toppingNode and imgNode
            var containerTopping = document.createElement('div');
            containerTopping.classList.add('flex', 'items-center', 'mt-4');
            toppingContainer.appendChild(containerTopping);
            // Append the topping input to the container
            containerTopping.appendChild(toppingNode); //topping title append in div
            //containerTopping.appendChild(imgNode);

            //create the choice container
            var optionContainer = document.createElement("div");
            optionContainer.id = "optionContainer";
            toppingContainer.appendChild(optionContainer);

            //create first row of option
            var firstrowOption = document.createElement("div");
            firstrowOption.classList.add('flex', 'items-center');
            optionContainer.appendChild(firstrowOption);

            //image node
            var imgSrc = "{{ asset('image/plus.png') }}";
            var imgNode = document.createElement("img");
            imgNode.src = imgSrc;
            imgNode.style.width = "16px";
            imgNode.style.height = "16px";
            imgNode.style.marginLeft = "40px";
            imgNode.id = "image" + count2;
            imgNode.onclick = function() {
                addAOption(optionContainer, (optionContainer.childElementCount + 1), toppingContainer.id);
            };

            //append element into firstrow
            addAOption(firstrowOption, 1, toppingContainer.id);
            firstrowOption.appendChild(imgNode);
            count2++;
        }

        function addAOption(container, optioncount, toppingCount) {
            // Create a new input element for the option
            var optionNode = document.createElement('input');
            optionNode.type = 'text';
            optionNode.name = 'choice' + toppingCount + '[]'; // Unique name for each topping
            optionNode.placeholder = 'Choice ' + optioncount;
            optionNode.classList.add('bg-gray-50');
            optionNode.classList.add('border', 'border-gray-300');
            optionNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            optionNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            optionNode.classList.add('block', 'w-6/12', 'p-2.5');
            optionNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            optionNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            optionNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            var priceNode = document.createElement('input');
            priceNode.type = 'number';
            priceNode.step = 'any';
            priceNode.name = 'price' + toppingCount + '[]'; // Unique name for each topping
            priceNode.placeholder = 'Price ' + optioncount;
            priceNode.classList.add('bg-gray-50');
            priceNode.classList.add('border', 'border-gray-300');
            priceNode.classList.add('text-gray-900', 'text-sm', 'rounded-lg');
            priceNode.classList.add('focus:ring-blue-500', 'focus:border-blue-500');
            priceNode.classList.add('block', 'w-1/4', 'p-2.5');
            priceNode.classList.add('dark:bg-gray-700', 'dark:border-gray-600');
            priceNode.classList.add('dark:placeholder-gray-400', 'dark:text-white');
            priceNode.classList.add('dark:focus:ring-blue-500', 'dark:focus:border-blue-500');

            // Append the option input to the choices container
            if (optioncount == 1) {
                container.appendChild(optionNode);
                container.appendChild(priceNode);
            } else {
                var tempNode = document.createElement('div');
                tempNode.classList.add('flex', 'items-center');
                container.appendChild(tempNode);
                tempNode.appendChild(optionNode);
                tempNode.appendChild(priceNode);
            }

        }

        // function deleteTopping(deleteNode) {
        //     deleteNode.remove();
        //     updateTopping();
        //     count--;
        // }

        // function updateTopping() {
        //     // Get the parent container
        //     var countTopping = document.getElementById("countTopping");

        //     // Get all remaining toppings
        //     var toppings = countTopping.getElementsByClassName("topping");

        //     // Update the choice names for remaining toppings
        //     for (var i = 0; i < toppings.length; i++) {
        //         var optionContainer = toppings[i].querySelector("#optionContainer");
        //         updateChoiceNames(optionContainer, i + 1);
        //     }
        // }

        // function updateChoiceNames(container, toppingIndex) {
        //     // Get all option elements in the container
        //     var options = container.querySelectorAll("input[type='text']");

        //     // Update the name attribute for each option
        //     for (var j = 0; j < options.length; j++) {
        //         options[j].name = "choice" + toppingIndex + "[]";
        //         options[j].placeholder = "Choice " + (j + 1);
        //     }
        // }

        // function updateTopping(){
        //     var countNode = document.getElementById("countTopping");

        //     var inputNodes = countNode.getElementsByTagName("input");

        //     var counter = 1
        //     // Iterate through input nodes
        //     for (var i = 0; i < inputNodes.length; i++) {

        //         if(i%2 == 1)
        //         {
        //             inputNodes[i].name = "choicetopping" + count + "[]";
        //             alert(inputNodes[i].name);
        //             counter++;
        //         }
        //     }
        // }
    </script>
</body>

</html>