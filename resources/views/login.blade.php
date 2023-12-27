<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <style>
    @media screen and (max-width: 720px) {}
  </style>
  <script>
    //temporary js script as reference to future php script
    var count = 1;

    function add1() {
      count += 1;
      if (count > 10) {
        alert("Maximum quantity is 10.")
        count = 10;
      }
      document.getElementById("count").innerHTML = count;
      document.getElementById("quantity").value = count;
    }

    function minus1() {
      count -= 1;
      if (count < 1) {
        alert("Minimum quantity is 1.");
        count = 1;
      }
      document.getElementById("count").innerHTML = count;
    }
  </script>
  <title>Menu</title>
</head>

<body class="bg-gray-200 flex flex-col items-center justify-center h-full">
  <div class="w-full px-6 py-4 h-[62px] shadow-md bg-gradient-to-r from-pigment-indigo-500 to-pigment-indigo-400">
    <a class="flex" href="#">
      <img class="w-8 h-8 fill-current rounded-full" src="{{ asset('image/logo.png')}}" width="32px" height="32px">
      <span class="ml-2 text-xl font-bold text-white">Molek Cafe</span>
    </a>
  </div>

  <div class="flex flex-col items-center justify-center w-11/12 py-5 mt-8 bg-white shadow-md max-w-md rounded-xl">
    <div class="px-8 py-6 mt-4 text-left bg-white">
      <h3 class="text-2xl font-bold text-center">Login to your account</h3>
      <form method="post" action="auth">
      @csrf
        <div class="mt-8">
          <div>
            <label class="block font-semibold" for="email">Username<label>
                <input type="text" placeholder="Username" name="username" required class="w-full px-4 py-2 mt-2 font-normal border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="mt-4">
            <label class="block font-semibold">Password<label>
                <input type="password" placeholder="Password" name="password" required class="w-full px-4 py-2 mt-2 font-normal border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
          </div>
          <div class="flex items-baseline justify-center">
            <button class="px-6 py-2 mt-8 w-full text-white bg-pigment-indigo-400 hover:bg-pigment-indigo-500 rounded-lg">Login</button>
          </div>
        </div>
      </form>
    </div>
    <div class="font-bold mt-12">Reminder: Customer no need to sign in</div>
    <div class="font-medium text-blue-600 dark:text-blue-500 hover:underline"><a href="/?table=<?php echo session('table'); ?>">Press here back to menu</a></div>
  </div>
</body>

</html>