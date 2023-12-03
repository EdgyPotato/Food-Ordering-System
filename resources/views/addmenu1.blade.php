<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/addmenu.css')}}">
    <!-- Load icon library -->
    <title>User Account</title>
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
        <form action="menu" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="purplebar"><a href= "adminmenu"><img src="{{ asset('image/return.png')}}" width="30px" height="30px"></a></div>
            <div class="image_upload">
                <input type="file" name="my_image">
    
            </div>
            <div class="text_input">
                <div class="main_point">
                    <div class="firstrow">
                        <div class="id">ID<br><input type="text" name="id" placeholder="Fxx" required></div>
                        <div class="foodname">Food name<br><input type="text" name="foodname" placeholder="Chicken" required></div>
                        
                    </div>
                    <br>
                    <div class="secondrow">
                        <div class="price">Price<br><input type="number" name="foodprice" placeholder="xx.xx" required></div>
                        <div class="categories">Categories<br>
                            <select name="categories">
                                <option value="food">Food</option>
                                <option value="beverages">Beverage</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div></br>
                    <label>Description</label>
                    <textarea class="description" name="description" rows="12" cols="60" required placeholder="Write the food description..."></textarea>
                </div>
                <div class="add_point">
                    <div id="addcontent">
                        <!--<div id = "addtopping"></div>
                        <div id="choice"></div> -->
                    </div> 
                    <div class="addtopping" onclick="return topping()">Add Topping</div> 
                    
                    <div id="addon">
                        <!--<div id = "addtopping"></div>
                        <div id="choice"></div> -->
                    </div> 
                    <div class="addon" onclick="return addon()">Add-On</div> 
                </div>

                    
                
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Upload">
            </div>
        </form>
    </div>

    <script>
        var count = 1;
        var count2 = 1
        function topping() {
        if (count > 5) {
            alert("Maximum Toppings is 5");
            return false;
        }

        var text = "topping" + count;
        var choice = "choice" + count;
        var main = document.getElementById("addcontent");
        var topNode = document.createElement("div");
        var choiceNode = document.createElement("div");
        topNode.id = text;
        choiceNode.id = choice;
        main.appendChild(topNode);
        main.appendChild(choiceNode);

        var imgSrc = "{{ asset('image/plus.png') }}";
        var para = document.getElementById(text);
        var para2 = document.getElementById(choice);
        var imgSrc2 = "{{ asset('image/dustbin.png') }}";

        // Add "Add Topping" text paragraph
        var textNode = document.createElement("p");
        textNode.textContent = "Topping " + count;
        textNode.style.margin = "2px";
        para.appendChild(textNode);
        var hiddenNode = document.createElement("input");
        hiddenNode.type = "hidden";
        hiddenNode.name = "topping" + count;
        hiddenNode.value = "topping";
        para.appendChild(hiddenNode);
        //var imgNode2 = document.createElement("img");
        //imgNode2.src = imgSrc2;
        //imgNode2.style.width = "20px";
        //imgNode2.style.height = "20px";
        //imgNode2.id = "dustbin" + count;
        //imgNode2.onclick = function() {
        //    count = deleteTopping(para, choiceNode, count);
        //};
        //para.appendChild(imgNode2);
        


        // Add input element
        addOption(choiceNode, 1);

        // Add image element
        var imgNode = document.createElement("img");
        imgNode.src = imgSrc;
        imgNode.style.width = "20px";
        imgNode.style.height = "20px";
        imgNode.id = "image" + count;
        imgNode.onclick = function () {
            if (this.parentNode.childElementCount < 11) {
                addOption(this.parentNode, this.parentNode.childElementCount);
            } else {
                alert("Maximum Options is 10 for each topping");
            }
        };
        para2.appendChild(imgNode);

        count++;
    }

    function addOption(nodes, count) {
        var inputNode = document.createElement("input");
        inputNode.type = "text";
        inputNode.name = nodes.id+"["+count+"]";
        inputNode.style.marginBottom = "5px";
        nodes.appendChild(inputNode);
    }

    function addon() {
        if (count2 > 5) {
            alert("Maximum Add-On is 5");
            return false;
        }

        var text = "addon" + count2;
        var choice = "onchoice" + count2;
        var main = document.getElementById("addon");
        var topNode = document.createElement("div");
        var choiceNode = document.createElement("div");
        topNode.id = text;
        choiceNode.id = choice;
        main.appendChild(topNode);
        main.appendChild(choiceNode);

        var imgSrc = "{{ asset('image/plus.png') }}";
        var para = document.getElementById(text);
        var para2 = document.getElementById(choice);

        // Add "Add On" text paragraph
        var textNode = document.createElement("p");
        textNode.textContent = "Add-On " + count2;
        textNode.style.margin = "2px";
        para.appendChild(textNode);
        var hiddenNode = document.createElement("input");
        hiddenNode.type = "hidden";
        hiddenNode.name = "addon" + count2;
        hiddenNode.value = "addon";
        para.appendChild(hiddenNode);

        // Add input element
        addOptionWithPrice(choiceNode, 1);

        // Add image element
        var imgNode = document.createElement("img");
        imgNode.src = imgSrc;
        imgNode.style.width = "20px";
        imgNode.style.height = "20px";
        imgNode.id = "image" + count2;
        let a = 1;
        imgNode.onclick = function () {
            if (this.parentNode.childElementCount-a< 11) {
                addOptionWithPrice(this.parentNode, this.parentNode.childElementCount-a);
                a++;
            } else {
                alert("Maximum Options is 10 for each add-on");
            }
        };
        para2.appendChild(imgNode);

        count2++;
    }

    function addOptionWithPrice(nodes, count) {
        var inputNode = document.createElement("input");
        inputNode.type = "text";
        inputNode.name = nodes.id+"["+count+"]";
        var priceNode = document.createElement("input");
        priceNode.type = "text";
        priceNode.name = nodes.id+"price"+"["+count+"]";
        priceNode.style.width = "30px";
        priceNode.style.marginBottom = "5px";
        nodes.appendChild(inputNode);
        nodes.appendChild(priceNode);
    }

    function deleteTopping(node, choice, count){
        node.remove();
        choice.remove();
        count--
        return count;
    }
    </script>
</body>
</html>