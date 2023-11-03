<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/cusmenu.css') }}">
    </head>

    <body>
        <div class="purplearea">
            <div class="firstrow">
                <div class="tableNo"><b>TABLE 01</b></div>
                <div class="login"><a href=login1>LOGIN</a></div>
            </div>
            <div class="searchbar">
                <i><img src="{{ asset('image/search.png')}}" width="25px" height="25px"></i>
                <input type="text">
            </div>
            <div class="categories">
                <div id="c1">Food</a></div>
                <div id="c2">Beverages</div>  
                <div id="c3">Others</div>              
            </div>
        </div>
        <div class="emptyarea"></div>
        <div class="whitearea">
        <?php
            for ($i = 0; $i < 10; $i++) {
                echo "<div id='categories'>Food</div>";
                echo "<div class='box'>";
                    echo "<div>picture</div>";
                    echo "<div>food name</div>";
                    echo "<div>description</div>";
                    echo "<div>price</div>";
                echo "</div>";
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
            <div class="add"><a href="viewcart"><img src="{{ asset('image/cart.png')}}" width="40px" height="40px"></a></div>
        </div>
        <div class="emptyarea2"></div>
    </body>
    
</html>


