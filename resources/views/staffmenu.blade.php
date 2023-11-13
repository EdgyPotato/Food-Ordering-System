<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/staffmenu.css')}}">
    <title>Your Page Title</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="buttonarea" id="buttonarea">
            <a class="navbutton" href="javascript:void(0)" onclick="toggleNavbar()">
                <img src="{{ asset('image/menubar.png')}}" width="35px" height="35px">
            </a>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="toprow">
            <div class="createacc"><a href="createuser">Create Account</a></div>
            <div class="search">Search Bar</div>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID </th>
                    <th>Username</th>
                    <th>Password <input type="checkbox" onclick="togglePassword()"></th>
                    <th>Roles</th>
                    <th></th>
                </tr>
                <?php
                    $sql = DB::table('user')->get();
                    foreach ($sql as $user){
                        echo"<tr>";
                            echo"<td>".$user->id."</td>";                            
                            echo"<td style='text-align:left; padding-left: 10px;'>".$user->username."</td>";
                            echo "<td style='text-align:left; padding-left: 10px;'><input id='password' type='password' value='" . $user->password . "' readonly onclick='togglePassword()'></td>";
                            echo"<td>".$user->Roles."</td>";
                            echo"<td><img src='image/dustbin.png' width='20px' height='20px'></td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>

    <script>
        function toggleNavbar() {
            document.body.style.backgroundColor = "#EFECF0";
            var status = 0;
            var width = document.getElementById("navbar").style.width;
            
            if (width === "7%") {
                status = 1;
            } else {
                status = 0;
            }

            if (status === 0) {
                document.getElementById("navbar").style.width = "7%";
                document.getElementById("main").style.marginLeft = "8%";
                document.getElementById("main").style.width = "92%";
                document.querySelectorAll(".buttonarea a").forEach(function(element) {
                    element.style.right = "30%";
                });
                const element = document.getElementById("molekcafe");
                element.style.visibility = "hidden";
                document.querySelectorAll("#icon").forEach(icon => {
                    icon.style.visibility = "hidden";
                });
            }

            if (status === 1) {
                document.getElementById("navbar").style.width = "20%";
                document.getElementById("main").style.marginLeft = "21%";
                document.getElementById("main").style.width = "79%";
                document.querySelectorAll(".buttonarea a").forEach(function(element) {
                    element.style.right = "4%";
                });
                document.getElementById("molekcafe").style.visibility = "visible";
                document.querySelectorAll("#icon").forEach(icon => {
                    icon.style.visibility = "visible";
                });
            }
        }

        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>