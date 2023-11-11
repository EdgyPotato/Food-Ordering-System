<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/staffmenu.css')}}">

    <body>
        <div id="purpleside"></div>
        <div id="mySidenav" class="sidenav">
        <div id="purpleside"></div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="{{ asset('image/menubar.png')}}" width="35px" height="35px"></a>
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>
            <div>
                <a href=login1>Logout</a>
            </div>
            
        </div>

        <!-- Use any element to open the sidenav -->
        

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
        ... rgrggrggr
        </div>

        <script>
            /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
            function openNav() {
            document.getElementById("mySidenav").style.width = "23%";
            document.getElementById("main").style.marginLeft = "23%";
            }

            /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
            function closeNav() {
                document.body.style.backgroundColor = "#EFECF0";
                var status = 0;
                var width = document.getElementById("mySidenav").style.width;

                if (width === "7%") {
                    status = 1;
                } else {
                    status = 0;
                }

                if (status === 0) {
                    document.getElementById("mySidenav").style.width = "7%";
                    document.getElementById("main").style.marginLeft = "7%";
                    const element = document.getElementById("molekcafe");
                    element.style.visibility = "hidden";
                }

                if (status === 1) {
                    document.getElementById("mySidenav").style.width = "23%";
                    document.getElementById("main").style.marginLeft = "23%";
                    document.getElementById("molekcafe").style.visibility = "visible";
                }
            }
        </script>
    </body>

</html>