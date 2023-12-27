<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo e(asset('css/cusmenu.css')); ?>">
    </head>

    <body>
        <div class="purplearea">
            <div class="firstrow">
                <div class="tableNo"> 
                    Table <?php echo session('table');?>
                </div>
                <div class="login"><a href=login>LOGIN</a></div>
            </div>
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
        <div class="whitearea">
        <?php
            $sql = DB::table('menus')
            ->where('categories', '=', 'food')
            ->where('status', '=', 'active')
            ->get();
            echo "<div id='food'>Food</div>"; //food subtitle
            foreach ($sql as $food){
                echo "<form action='tofood' method='get' enctype='multipart/form-data'><div class='box' onclick='submitForm(\"$food->foodid\")'>";
                    echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                    echo "<div class='nopicture'>";
                        echo "<div class='foodandpricebox'>";
                            echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                            echo "<div class='price'>". "RM " . number_format($food->price, 2)."</div>";
                        echo "</div>";
                        echo "<div class='description'>". $food->description ."</div>";
                    echo "</div>";
                echo "</div> <input type='hidden' id='hidden' name='id'>
                             <input type='submit' style='display: none;' id='submitButton'></form>";
            }
            echo "</br>";
            $sql = DB::table('menus') //get the beverage list
            ->where('categories', '=', 'beverages')
            ->where('status', '=', 'active')
            ->get();
            echo "<div id='beverage'>Beverages</div>"; //beverage subtitle
            foreach ($sql as $food){
                echo "<form action='tofood' method='get' enctype='multipart/form-data'><div class='box' onclick='submitForm(\"$food->foodid\")'>";
                    echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                    echo "<div class='nopicture'>";
                        echo "<div class='foodandpricebox'>";
                            echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                            echo "<div class='price'>". "RM " . number_format($food->price, 2)."</div>";
                        echo "</div>";
                        echo "<div class='description'>". $food->description ."</div>";
                    echo "</div>";
                echo "</div> <input type='hidden' id='hidden' name='id'>
                             <input type='hidden' id='hidden' name='table' value='session('table')'>
                             <input type='submit' style='display: none;' id='submitButton'></form>";
            }
            echo "</br>";

            $sql = DB::table('menus') //get the beverage list
            ->where('categories', '!=', 'food')
            ->where('categories', '!=', 'beverages')
            ->where('status', '=', 'active')
            ->get();
            echo "<div id='others'>Others</div>"; //Others subtitle
            foreach ($sql as $food){
                echo "<form action='tofood' method='get' enctype='multipart/form-data'><div class='box' onclick='submitForm(\"$food->foodid\")'>";
                    echo "<div class='picture'><img src='storage/image/$food->image_url'></div>";
                    echo "<div class='nopicture'>";
                        echo "<div class='foodandpricebox'>";
                            echo "<div class='food'>" . $food->foodid . '. ' . $food->foodname ."</div>";
                            echo "<div class='price'>RM " . number_format($food->price, 2) . "</div>";
                        echo "</div>";
                        echo "<div class='description'>". $food->description ."</div>";
                    echo "</div>";
                echo "</div> <input type='hidden' id='hidden' name='id'>
                             <input type='hidden' id='hidden' name='table' value='$tableNumber'>
                             <input type='submit' style='display: none;' id='submitButton'></form>";
            }
        ?>
        </div>
        <div class=bottombar>
            <div class="mode">
                <select name="mode">
                    <option value="dinein">Dine In</option>
                    <option value="takeaway">Take Away</option>
                </select>
            </div>
            <div class="add"><a href="addcart"><img src="<?php echo e(asset('image/cart.png')); ?>" width="40px" height="40px"></a></div>
        </div>
        <div class="emptyarea2"></div>
    </body> 
    <script>
        function submitForm(id) {
            // Set the value of the hidden input field
            document.getElementById('hidden').value = id;
            // Trigger the form submission
            document.getElementById('submitButton').click();
        }
    </script>
</html>


<?php /**PATH D:\ADProject\AD-Project\resources\views/cusmenu.blade.php ENDPATH**/ ?>