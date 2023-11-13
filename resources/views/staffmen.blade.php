<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/staffmenu.css')}}">

    <body>
        <div id="mySidenav" class="sidenav">
            <div id="purpleside"></div>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img src="{{ asset('image/menubar.png')}}" width="35px" height="35px"></a>
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class="whitearea">
                <div class = "icon">
                    <a href="#"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Reservation</u></a>
                    <a href="#"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu List</u></a>
                    <a href="#"><img src="{{ asset('image/order.png')}}" width="35px" height="35px"><u id= "icon">Order List</u></a>
                    <a href="#"><img src="{{ asset('image/notification.png')}}" width="35px" height="35px"><u id = "icon">Notification</u></a>
                </div>
                <div>
                    <a class="logout" href= "login1"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px"></a>
                </div>
            </div>
        </div>

        <!-- Use any element to open the sidenav -->
        

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main" style="margin-left: 23%">
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

                if (width === "5.5%") {
                    status = 1;
                } else {
                    status = 0;
                }

                if (status === 0) {
                    document.getElementById("mySidenav").style.width = "5.5%";
                    document.getElementById("main").style.marginLeft = "5.5%";
                    const element = document.getElementById("molekcafe");
                    element.style.visibility = "hidden";
                    document.querySelectorAll("#icon").forEach(icon => {
                        icon.style.visibility = "hidden";
                    });
                }

                if (status === 1) {
                    document.getElementById("mySidenav").style.width = "23%";
                    document.getElementById("main").style.marginLeft = "23%";
                    document.getElementById("molekcafe").style.visibility = "visible";
                    document.querySelectorAll("#icon").forEach(icon => {
                        icon.style.visibility = "visible";
                    });
                }
            }
        </script>
    </body>

</html>