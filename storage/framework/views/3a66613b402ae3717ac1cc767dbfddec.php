<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
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
    <title>Food</title>
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('favicon/logo.ico')); ?>">
</head>

<body class="p-8 bg-gray-200 h-screen w-full justify-center items-center flex">
    <main class="flex justify-center items-center flex-col bg-white p-12 rounded-2xl w-full h-5/6 shadow-2xl border-8 border-pigment-indigo-400">
    <img class="w-48 h-48 fill-current rounded-full" src="<?php echo e(asset('image/logo.png')); ?>">
    <div class="text-2xl font-bold pb-4 text-center">Please Scan Again</div>
    <div class="text-2xl font-bold pb-4 text-center">QR Code</div>
    <div class="text-2xl font-bold text-center">Thank You!</div>
    </main>
</body>

</html>
 <?php /**PATH C:\AD Project\AD-Project\resources\views/scanqr.blade.php ENDPATH**/ ?>