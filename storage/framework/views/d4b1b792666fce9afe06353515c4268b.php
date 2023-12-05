<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/createuser.css')); ?>">
    <!-- Load icon library -->
    <title>MenuList</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="#"><img src="<?php echo e(asset('image/reservation.png')); ?>" width="35px" height="35px"><u id = "icon">Dashboard</u></a></div>
                <div id="i2"><a href="adminmenu"><img src="<?php echo e(asset('image/menu.png')); ?>" width="35px" height="35px"><u id = "icon">Menu</u></a></div>
                <div id="i3"><a href="account"><img src="<?php echo e(asset('image/account.png')); ?>" width="35px" height="35px"><u id= "icon">Account</u></a></div>
            </div>
            <div class="logout">
                <a href= "logout"><img src="<?php echo e(asset('image/logout.png')); ?>" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="purplebar"><a href= "account"><img src="<?php echo e(asset('image/return.png')); ?>" width="30px" height="30px"></a></div>
        <form method="post" action="register" onsubmit="return passwordValidation()">
        <?php echo csrf_field(); ?>
            <div class="createacc">Create Account</div>
            <div>
                <p2>Username</p2><br/>
                <div class="username">
                    <img src="<?php echo e(asset('image/username.png')); ?>" width="35px" height="35px">
                    <input id="username" type="text" name="username" required>
                </div>
            </div>
            <br />
            <div>
                <p2>Password</p2><br />
                <div class="password">
                    <img src="<?php echo e(asset('image/password.png')); ?>" width="35px" height="35px">
                    <input id="password" type="password" name="password" required>
                </div>
            </div>
            <br/>
            <div>
                <p2>Confirm Password</p2><br />
                <div class="password">
                    <img src="<?php echo e(asset('image/password.png')); ?>" width="35px" height="35px" style="visibility:hidden">
                    <input id="cpassword" type="password" name="cpassword" required>
                </div>
            </div>
            <br/>
            <div>
                <p2>Select roles:</p2><br />
                <div class="roles">
                    <img src="<?php echo e(asset('image/roles.png')); ?>" width="35px" height="35px" >
                    <select name="roles">
                        <option value="admin">Admin</option>
                        <option value="staff">Staff</option>
                        <option value="chef">Chef</option>
                    </select>
                </div>
            </div>
            <div class="submit">
            <input type="submit" value="Create">
            </div>
        </form>
    </div>

    <script>
        function passwordValidation(){
            var password = document.getElementById("password").value;
            var cpassword = document.getElementById("cpassword").value;
            if(password == cpassword){
                alert("Create Sucessful");
            }else{
                alert("Password Not Matched");
                return false;
            }
        }
        
    </script>
</body>
</html><?php /**PATH C:\AD Project\AD-Project\resources\views/createuser.blade.php ENDPATH**/ ?>