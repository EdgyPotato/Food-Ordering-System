<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/menulist.css')); ?>">
    <!-- Load icon library -->
    <title>User Account</title>
</head>
<body>
    <div class="purplearea"></div>
    <div class="navbar" id="navbar">
        <div class="whitearea">
            <div class = "molekcafe" id="molekcafe">Molek</br>Cafe</div>
            <div class = "icon">
                <div id="i1"><a href="reservation_staff"><img src="<?php echo e(asset('image/reservation.png')); ?>" width="35px" height="35px"><u id = "icon">Reservation</u></a></div>
                <div id="i2"><a href="menulist"><img src="<?php echo e(asset('image/menu.png')); ?>" width="35px" height="35px"><u id = "icon">Menu List</u></a></div>
                <div id="i3"><a href="orderlist"><img src="<?php echo e(asset('image/order.png')); ?>" width="35px" height="35px"><u id= "icon">Order List</u></a></div>
                <div id="i4"><a href="notification"><img src="<?php echo e(asset('image/notification.png')); ?>" width="35px" height="35px"><u id = "icon">Notification</u></a></div>
            </div>
            <div class="logout">
                <a href= "logout"><img src="<?php echo e(asset('image/logout.png')); ?>" width="35px" height="35px">LOGOUT</a>
            </div>
        </div>
    </div>
    
    <div class="main" id="main">
        <div class="purple">
                <div class="searchbar">
                    <i><img src="<?php echo e(asset('image/search.png')); ?>" width="25px" height="25px"></i>
                    <input type="text">
                </div>
                <div class="categories">
                    <div id="c1"><a href="#food">Food</a></div>
                    <div id="c2"><a href="#beverage">Beverages</a></div>  
                    <div id="c3"><a href="#others">Others</a></div>              
                </div>
            </div>
            <div class="white">
            <form id='form' method="get" action="invisible">
                <input type="hidden" name='id' id='hidden'> 
                <input type="hidden" name='action' id='action'>
            <?php
                $sql = DB::table('menus')
                ->where('categories', '=', 'food')
                ->where('status', '!=', 'deleted')
                ->get();
                echo "<div class='foodbox'>";
                    echo "<div id='food'>Food</div>"; //food subtitle?>
                <?php
                echo "</div>";
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . number_format($food->price, 2)."</div>";
                            echo "</div>";
                            echo "<div class='secondrow'><div class='description'>". $food->description ."</div>";
                            if($food->status == "active")
                                echo '<label class="switch">
                                    <input type="checkbox" checked onclick="submitForm(\'' . $food->foodid . '\', \'invisible\')">
                                    <span class="slider round"></span>
                                </label>';
                            else{
                                echo '<label class="switch">
                                    <input type="checkbox" onclick="submitForm(\'' . $food->foodid . '\', \'active\')">
                                    <span class="slider round"></span>
                                </label>';   
                            }
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
                echo "</br>";

                $sql = DB::table('menus') //get the beverage list
                ->where('categories', '=', 'beverages')
                ->where('status', '!=', 'deleted')
                ->get();
                echo "<div id='beverage'>Beverages</div>"; //beverage subtitle
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . number_format($food->price, 2)."</div>";
                            echo "</div>";
                            echo "<div class='secondrow'><div class='description'>". $food->description ."</div>";
                            if($food->status == "active")
                                echo '<label class="switch">
                                    <input type="checkbox" checked onclick="submitForm(\'' . $food->foodid . '\', \'invisible\')">
                                    <span class="slider round"></span>
                                </label>';
                            else{
                                echo '<label class="switch">
                                    <input type="checkbox" onclick="submitForm(\'' . $food->foodid . '\', \'active\')">
                                    <span class="slider round"></span>
                                </label>';   
                            }
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
                echo "</br>";

                $sql = DB::table('menus') //get the beverage list
                ->where('categories', '!=', 'food')
                ->where('categories', '!=', 'beverages')
                ->where('status', '!=', 'deleted')
                ->get();
                echo "<div id='others'>Others</div>"; //Others subtitle
                foreach ($sql as $food){
                    echo "<div class='box'>";
                        echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                        echo "<div class='nopicture'>";
                            echo "<div class='foodandpricebox'>";
                                echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                                echo "<div class='price'>". "RM " . number_format($food->price, 2)."</div>";
                            echo "</div>";
                            echo "<div class='secondrow'><div class='description'>". $food->description ."</div>";
                            if($food->status == "active")
                                echo '<label class="switch">
                                    <input type="checkbox" checked onclick="submitForm(\'' . $food->foodid . '\', \'invisible\')">
                                    <span class="slider round"></span>
                                </label>';
                            else{
                                echo '<label class="switch">
                                    <input type="checkbox" onclick="submitForm(\'' . $food->foodid . '\', \'active\')">
                                    <span class="slider round"></span>
                                </label>';   
                            }
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                }
            ?>
            </form>
            </div>
    </div>

    <script>
        function submitForm(id, action) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            document.getElementById('action').value = action;
            // Allow the form submission to proceed
            document.getElementById('form').submit();
        }
    </script>
</body>
</html><?php /**PATH C:\AD Project\AD-Project\resources\views/menulist.blade.php ENDPATH**/ ?>