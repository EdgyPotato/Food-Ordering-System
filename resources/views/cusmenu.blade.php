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
                <div id="c1"><a href="#food">Food</a></div>
                <div id="c2"><a href="#beverage">Beverages</a></div>  
                <div id="c3">Others</div>              
            </div>
        </div>
        <div class="whitearea">
        <?php
            $sql = DB::table('menu')
            ->where('categories', '=', 'food')
            ->get();
            echo "<div id='food'>Food</div>"; //food subtitle
            foreach ($sql as $food){
                echo "<div class='box'>";
                    echo "<div class='picture'>picture</div>";
                    echo "<div class='nopicture'>";
                        echo "<div class='foodandpricebox'>";
                            echo "<div class='food'>" . $food->id . '. ' . $food->foodname ."</div>";
                            echo "<div class='price'>". "RM " . $food->price."</div>";
                        echo "</div>";
                        echo "<div class='description'>". $food->description ."</div>";
                    echo "</div>";
                echo "</div>";
            }
            echo "</br>";
            $sql = DB::table('menu') //get the beverage list
            ->where('categories', '=', 'beverages')
            ->get();
            echo "<div id='beverage'>Beverages</div>"; //beverage subtitle
            foreach ($sql as $food){
                echo "<div class='box'>";
                    echo "<div class='picture'>picture</div>";
                    echo "<div class='nopicture'>";
                        echo "<div class='foodandpricebox'>";
                            echo "<div class='food'>" . $food->id . '. ' . $food->foodname ."</div>";
                            echo "<div class='price'>". "RM " . $food->price."</div>";
                        echo "</div>";
                        echo "<div class='description'>". $food->description ."</div>";
                    echo "</div>";
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

        <script>
        function scrollToSubtitle() {
            const yOffset = -50; // Adjust this value based on the height of your fixed top bar
            const element = document.getElementById('food');
            const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

            window.scrollTo({ top: y, behavior: 'smooth' });
        }
        </script>
    </body>
    
</html>


