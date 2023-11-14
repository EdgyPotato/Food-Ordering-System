<!DOCTYPE html>
<html>

<head>
    <style>
        /* Example of styling for the fixed top bar */
        #top-bar {
            position: fixed;
            top: 0;
            height: 50px;
            background-color: #f2f2f2;
            width: 100%;
        }

        /* Example of styling for the subtitle */
        #subtitle {
            padding-top: 40vh; /* Adjust this value to center the subtitle on the page */
        }
    </style>
</head>

<body>
    <?php $a = 0 ?>
    <button onclick=press()>
    <?php $a++; echo $a;?>
        <script>
        function press(){
            for(var i=0; i<5; i++){
                var num = 0;
                num++;

                alert(num);

                <?php $a = 3; echo $a;?>
            }
        }
        </script>
</body>

</html>
