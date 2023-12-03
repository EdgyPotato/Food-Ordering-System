<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/account.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load icon library -->
    <title>MenuList</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="dashboard"><img src="{{ asset('image/reservation.png')}}" width="35px" height="35px"><u id = "icon">Dashboard</u></a></div>
                <div id="i2"><a href="adminmenu"><img src="{{ asset('image/menu.png')}}" width="35px" height="35px"><u id = "icon">Menu</u></a></div>
                <div id="i3"><a href="account"><img src="{{ asset('image/account.png')}}" width="35px" height="35px"><u id= "icon">Account</u></a></div>
            </div>
            <div class="logout">
                <a href= "logout"><img src="{{ asset('image/logout.png')}}" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
    <div class="toprow">
            <div class="createacc"><a href="createuser">Create Account</a></div>
            <div class="search">
                <!-- The form -->
                <form id="example" action="account" method="get">
                    <input id="searchbar" type="text" placeholder="Search by name.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID </th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Roles</th>
                    <th></th>
                </tr>
                <?php
                    $search = '';

                    if(request()->has('search')) {
                        $search = request('search');
                    }

                    $sql = DB::table('users')
                        ->where('username', 'LIKE', '%' . $search . '%')
                        ->get();
                
                    foreach ($sql as $user){
                        echo"<tr>";
                            echo"<td width = '5%'>".$user->id."</td>";                            
                            echo"<td width = '20%' style='text-align:left;'>".$user->username."</td>";
                            echo"<td width = '57%' style='text-align:left;'>" . $user->password . "</td>";
                            echo"<td width = '10%'>".$user->roles."</td>";
                            echo"<td width = '8%'>
                                    <form method='POST' action='delete' onsubmit='return confirmation()'>";?>
                                    @csrf
                                    <?php
                                        echo "<input type='text' name='id' value='$user->id' hidden>
                                              <input type='submit' name='submit' value='Delete'>
                                    </form>
                                 </td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>
    </div>

    <script>
        function confirmation(){
            return confirm("Are you sure want to delete?");
        }
    </script>
</body>
</html>