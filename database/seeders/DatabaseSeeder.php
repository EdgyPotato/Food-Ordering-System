<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Addon;
use App\Models\Aoptions;
use App\Models\Menu;
use App\Models\PaymentFoodNo;
use App\Models\Topping;
use App\Models\Toptions;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'username' => 'hengyu1234',
            'password' => '$2y$12$8HJP1Ajxgo.dgAGxd4C/keesuYZBmGRyG.ezO/ErGXGrlvJAkmsW2',
            'roles' => 'admin',
            'created_at' => '2023-12-31 22:04:41',
            'updated_at' => '2023-12-31 22:04:41'
        ]);



        User::create([
            'id' => 2,
            'username' => 'ganhui1234',
            'password' => '$2y$12$29wMaqNs3egzo18dyF7aMOuOFUPkdcBlXuX0YKfW2BARD82qY6BKq',
            'roles' => 'admin',
            'created_at' => '2024-01-01 06:15:10',
            'updated_at' => '2024-01-01 06:15:10'
        ]);



        User::create([
            'id' => 3,
            'username' => 'tanyuan1234',
            'password' => '$2y$12$F.50Zg34DcNLNlQ1ZzPSi.BriqrF.ORtMcENWztC.9BXcVOkNS7Ie',
            'roles' => 'admin',
            'created_at' => '2024-01-01 06:15:28',
            'updated_at' => '2024-01-01 06:15:28'
        ]);



        User::create([
            'id' => 4,
            'username' => 'admin1234',
            'password' => '$2y$12$Ob81LS70AzevWyuuHoplU.tBwE0QTfsDurJxON3GC9ZgUrY8AbHa2',
            'roles' => 'admin',
            'created_at' => '2024-01-01 06:16:17',
            'updated_at' => '2024-01-01 06:16:17'
        ]);



        User::create([
            'id' => 5,
            'username' => 'Admin1111',
            'password' => '$2y$12$pyXlb8l3EcYw0IEuQ0LGOeD/TQXKlGZX1l0N.DneWMXBRhyo6lKjq',
            'roles' => 'admin',
            'created_at' => '2024-01-01 06:18:06',
            'updated_at' => '2024-01-01 06:18:06'
        ]);



        User::create([
            'id' => 6,
            'username' => 'Admin2222',
            'password' => '$2y$12$U7xil2NeigHQ9s9qurS.1etBNFjXunf65LioQOJopr/uVwuFgKkRW',
            'roles' => 'admin',
            'created_at' => '2024-01-01 06:18:15',
            'updated_at' => '2024-01-01 06:18:15'
        ]);



        User::create([
            'id' => 8,
            'username' => 'Staff1111',
            'password' => '$2y$12$r5DtyaeUSngJpXIjp4vNQ.4dzay864yeSCXL4sXyiAMLaACFnkKZC',
            'roles' => 'staff',
            'created_at' => '2024-01-01 06:18:43',
            'updated_at' => '2024-01-01 06:18:43'
        ]);



        User::create([
            'id' => 9,
            'username' => 'Staff2222',
            'password' => '$2y$12$CbFtXOrDwGhJRiyr16diyOAnLjIPp5xooFochwH.ZrpSA9yDa.dTu',
            'roles' => 'staff',
            'created_at' => '2024-01-01 06:18:54',
            'updated_at' => '2024-01-01 06:18:54'
        ]);



        User::create([
            'id' => 10,
            'username' => 'Staff3333',
            'password' => '$2y$12$s4nOQjp6ppJUAkEIxhpMXeg0Tw5hZrNJfTTrmdbD/HLg1hmP1r9cO',
            'roles' => 'staff',
            'created_at' => '2024-01-01 06:19:13',
            'updated_at' => '2024-01-01 06:19:13'
        ]);



        User::create([
            'id' => 11,
            'username' => 'Staff4444',
            'password' => '$2y$12$KL.nrC6p7oCxlE7hjQdjCOAJzg/GjK6douILoo9TNUd.HmVmttxWy',
            'roles' => 'staff',
            'created_at' => '2024-01-01 06:19:24',
            'updated_at' => '2024-01-01 06:19:24'
        ]);



        User::create([
            'id' => 12,
            'username' => 'Staff5555',
            'password' => '$2y$12$zvIdjAcJr9ydsCchUN/fa.LUtORP.c9ND/U4bA5sgUIh04ntiRTvO',
            'roles' => 'staff',
            'created_at' => '2024-01-01 06:19:34',
            'updated_at' => '2024-01-01 06:19:34'
        ]);



        User::create([
            'id' => 13,
            'username' => 'Chef1111',
            'password' => '$2y$12$RB6IlwWMVHWXdTjrqIp.j.oM3omL4YsGKDXQW8xZey9Q9YhwY2FQ2',
            'roles' => 'chef',
            'created_at' => '2024-01-01 06:19:47',
            'updated_at' => '2024-01-01 06:19:47'
        ]);



        User::create([
            'id' => 14,
            'username' => 'Chef2222',
            'password' => '$2y$12$ORERlx3Kk8KbsMzbBDeM4.FxiVvGR2Mcdgc8Il5NmSeQfHZzoYs5C',
            'roles' => 'chef',
            'created_at' => '2024-01-01 06:19:57',
            'updated_at' => '2024-01-01 06:19:57'
        ]);



        User::create([
            'id' => 15,
            'username' => 'Chef3333',
            'password' => '$2y$12$zyPPzbksLWOQcVgs0Xg2.ulV6uqhW6H0u/2lv2/ZAiK2Y3Xkjoz62',
            'roles' => 'chef',
            'created_at' => '2024-01-01 06:20:07',
            'updated_at' => '2024-01-01 06:20:07'
        ]);



        User::create([
            'id' => 16,
            'username' => 'Chef4444',
            'password' => '$2y$12$L8m9dlM812GKu0bjiTW/d.v3q2Z992hOZRdgVOSPxQQPABuJw0OLy',
            'roles' => 'chef',
            'created_at' => '2024-01-01 06:20:15',
            'updated_at' => '2024-01-01 06:20:15'
        ]);



        User::create([
            'id' => 17,
            'username' => 'Chef5555',
            'password' => '$2y$12$whjC.zy5gxZn/8nPJeTSc.d7SZo3bN2BOIeBBPwaN.epOrtCsaEgW',
            'roles' => 'chef',
            'created_at' => '2024-01-01 06:20:24',
            'updated_at' => '2024-01-01 06:20:24'
        ]);

        Addon::create([
            'id' => 1,
            'title' => 'Addon',
            'foodid' => 'F01',
            'created_at' => '2024-01-01 06:40:59',
            'updated_at' => '2024-01-01 06:40:59'
        ]);



        Addon::create([
            'id' => 2,
            'title' => 'Variation',
            'foodid' => 'F02',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Addon::create([
            'id' => 3,
            'title' => 'Addon',
            'foodid' => 'F03',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Addon::create([
            'id' => 4,
            'title' => 'Set',
            'foodid' => 'F04',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Addon::create([
            'id' => 5,
            'title' => 'Addon',
            'foodid' => 'F04',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Addon::create([
            'id' => 6,
            'title' => 'Size',
            'foodid' => 'F05',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Addon::create([
            'id' => 7,
            'title' => 'Addon',
            'foodid' => 'O01',
            'created_at' => '2024-01-01 07:48:56',
            'updated_at' => '2024-01-01 07:48:56'
        ]);

        Aoptions::create([
            'id' => 1,
            'option' => 'Extra Bacon',
            'price' => 6.00,
            'addon_id' => '1',
            'created_at' => '2024-01-01 06:40:59',
            'updated_at' => '2024-01-01 06:40:59'
        ]);



        Aoptions::create([
            'id' => 2,
            'option' => 'Extra Cheese',
            'price' => 3.00,
            'addon_id' => '1',
            'created_at' => '2024-01-01 06:40:59',
            'updated_at' => '2024-01-01 06:40:59'
        ]);



        Aoptions::create([
            'id' => 3,
            'option' => 'Extra Egg',
            'price' => 2.00,
            'addon_id' => '1',
            'created_at' => '2024-01-01 06:40:59',
            'updated_at' => '2024-01-01 06:40:59'
        ]);



        Aoptions::create([
            'id' => 4,
            'option' => 'Large',
            'price' => 10.00,
            'addon_id' => '2',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Aoptions::create([
            'id' => 5,
            'option' => 'Super Large',
            'price' => 15.00,
            'addon_id' => '2',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Aoptions::create([
            'id' => 6,
            'option' => 'Fried Egg',
            'price' => 2.00,
            'addon_id' => '3',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Aoptions::create([
            'id' => 7,
            'option' => 'Extra Prawn',
            'price' => 4.00,
            'addon_id' => '3',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Aoptions::create([
            'id' => 8,
            'option' => 'Extra rice',
            'price' => 2.00,
            'addon_id' => '3',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Aoptions::create([
            'id' => 9,
            'option' => 'Set A (+ Fried Chicken)',
            'price' => 5.00,
            'addon_id' => '4',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 10,
            'option' => 'Set B (+ Hotdog)',
            'price' => 3.00,
            'addon_id' => '4',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 11,
            'option' => 'Set C (+ Fried Fish Fillet)',
            'price' => 3.00,
            'addon_id' => '4',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 12,
            'option' => 'Fried Egg',
            'price' => 2.00,
            'addon_id' => '5',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 13,
            'option' => 'Hotdog',
            'price' => 3.00,
            'addon_id' => '5',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 14,
            'option' => 'Fried Fish Ball',
            'price' => 2.00,
            'addon_id' => '5',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Aoptions::create([
            'id' => 15,
            'option' => 'Big',
            'price' => 2.00,
            'addon_id' => '6',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Aoptions::create([
            'id' => 16,
            'option' => 'Extra Big',
            'price' => 4.00,
            'addon_id' => '6',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Aoptions::create([
            'id' => 17,
            'option' => 'Extra 1 Toast',
            'price' => 1.50,
            'addon_id' => '7',
            'created_at' => '2024-01-01 07:48:56',
            'updated_at' => '2024-01-01 07:48:56'
        ]);

        Menu::create([
            'foodid' => 'F01',
            'foodname' => 'Burger',
            'description' => 'Savor mouthwatering burgers crafted with seasoned perfection, fresh ingredients, and irresistible toppings. Elevate your taste experience today!',
            'price' => 10.90,
            'categories' => 'food',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:52:24',
            'updated_at' => '2024-01-02 13:52:24'
        ]);

        Menu::create([
            'foodid' => 'F02',
            'foodname' => 'Pizza',
            'description' => 'Elevate your taste with our delectable pizzas—thin, crispy crusts adorned with premium toppings. A symphony of flavors in every bite awaits you!',
            'price' => 21.90,
            'categories' => 'food',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:53:21',
            'updated_at' => '2024-01-02 13:53:21'
        ]);

        Menu::create([
            'foodid' => 'F03',
            'foodname' => 'Seafood Fried Rice',
            'description' => 'Savor the ocean\\\'s finest in our Seafood Fried Rice — a delectable blend of fresh seafood, aromatic jasmine rice, and crisp vegetables. Dive into flavor with every bite!',
            'price' => 9.90,
            'categories' => 'food',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:53:45',
            'updated_at' => '2024-01-02 13:53:45'
        ]);

        Menu::create([
            'foodid' => 'F04',
            'foodname' => 'Nasi Lemak',
            'description' => 'Experience Malaysia\\\'s culinary gem with our Nasi Lemak – fragrant coconut rice, crispy anchovies, and the perfect sambal kick. It\\\'s a symphony of flavors in every bite!',
            'price' => 5.90,
            'categories' => 'food',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:54:20',
            'updated_at' => '2024-01-02 13:54:20'
        ]);



        Menu::create([
            'foodid' => 'F05',
            'foodname' => 'Laksa',
            'description' => 'Delight in our Laksa – a flavorful blend of creamy coconut broth, rice noodles, and succulent prawns. A taste of Malaysian comfort in every spoonful!',
            'price' => 10.90,
            'categories' => 'food',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:54:42',
            'updated_at' => '2024-01-02 13:54:42'
        ]);



        Menu::create([
            'foodid' => 'B01',
            'foodname' => 'Teh Tarik',
            'description' => 'Strong black tea meets sweet condensed milk, expertly pulled to create a frothy, comforting delight. Sip and savor the essence of Malaysian tradition in every cup.',
            'price' => 2.80,
            'categories' => 'beverages',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:55:11',
            'updated_at' => '2024-01-02 13:55:11'
        ]);



        Menu::create([
            'foodid' => 'B02',
            'foodname' => 'Coffee',
            'description' => 'Embark on a sensory journey with our carefully curated coffee. From the bold intensity of espresso to the velvety allure of lattes, each cup is a crafted masterpiece.',
            'price' => 2.80,
            'categories' => 'beverages',
            'image_url' => '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFhUYGRgYGBgaGhocGBoaGBwYGhoaGhgeGhweIS4lHB4rHxgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHzQrISw0NDQ0NTQ0MTQ0NDQ9NDY0NDQ0NDY0NDQ0NDQ0NDE0NDQ0NDE0NTU0NDQ0NDQ0NDY0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQIDBAYHAQj/xAA/EAACAQIEAwUFBgQFBAMAAAABAgADEQQSITEFQVEGImFxgRMykaHwB0JSscHRI2Jy4RQzgpLxQ5OywlNUov/EABkBAQADAQEAAAAAAAAAAAAAAAABAgMEBf/EACkRAAICAgEEAQMEAwAAAAAAAAABAhEDITEEEkFRcSJhgTKx4fETQlL/2gAMAwEAAhEDEQA/AOSP9ekpMqZybXOgvbTqdZQZo2VR4Z7EGULCDF4gCIiQBH19fOIAkgQBAH14RIAiIXeAIiIAiIEkCIBledbba+Ow8h+94BQYJnpP1tPIAERAEgAiehDa/IfXrPCIgCIiAIiJIE8M9MSWyBEAxKkiIgj6+ckAREKbG/SAek+AHlf46mej0leGw71HCIrO7GyoqlmJ8AJ0LgP2XO1nxdT2Y/8AjQhqn+ptVX0zekA5y2njr6eknOG9kMdX1p4Z8pt3nApr5guRceV52zg/ZzC4a3sKCKw++RnqePfa5HkLCS5BMmiDj+F+yrFN/mVqKDoC7t8lA+ckqf2Tr9/GMf6aIHzLmdPyxligc2P2UUf/ALVT/tp+8xq32TnXJjPRqNviQ/6TqWWMsUDiuN+zHHJcoaNQcgrlWPo4A+c1niPA8Th/86hUQfiKkp/uF1Pxn0cUlJWTSFnzJvt5bfWspneOM9isHiAe57Jyb56Xcud7svuN5kX8ZzftB9n+Jw4L0/49Mc1BzqP5k39Vv6SGgaeJUigncDzlIMqyj8XLmDv0Fr/HSQiSkG2sT0jWw11nhEgCVoPD4mwvKJWh0/sOYsTeSgUj00+c8npPSeQwe5onkSAeGemIkgREuYalndUuBmIFzoNfGQCgc5cpkroD7wtbw0Pl0PpFRcpIyjRjY77fIjxtzltBcjzluAVsg8dLX+V9eWt5sXZXsfWxzZlulAGzVWHTdUW/eb5DmRtJPsH2LbFj21fMuGzXAGjVitwQp3CA6FvMDW5HY6NJUVURVVFAVVUWVVGwAGwiiCO4DwHD4NMlBLEgB3OtR/626fyiwHSSqpKlWXFWSCgJKwkuqkrCSAWQk9yy+EnuSAWMk8KTIyTwpAMUpKGSZRSUskkGIyS2VmUyS2ySLBpfarsPQxd3S1Kt+NR3XP8AOo3/AKhr57TkHGOFVsNUNOshVhtzVl/ErfeX6Np9HMsi+PcEo4ukaVVbjdWGjo3JlPI+Gx5w0D52IiS3aPgNXBVTSqC4Nyjj3XXqOhHNeXkQTEiQSAJeohL97w09defSWZ6GNrcr3+vhCYPSPrQymLxDAiIkA9dCNxPJ6wnklgT29jpynk9J/SAeMxO823sD2VONqF6lxh6ZHtCLgux1FNT4jUkbA9SJr3COGviayUKY7ztYX2A3Zj4KoJPlPoThPDqeHopQpDuILAndjuzt/MxuflykoGXTQABVUKqgKqqLKqgWAAGwAl9FlKCXkWSQVKsuqsIs8xOISkhd2sB8/KQ2C8qSPx/GsPQ99xfoDczR+03bom6UzlXw3M0dqlbENpmN/P8AOck+oXEd/c3jhf8AsdKx/wBodNdES/iTITEfaRVuMqjXwkLgex9V/esOt9TJzDdhxfvOfQSndmlxf7GnbjjyWl+0atzVT6f2kjhftHH36fwMst2KTkx6DnIjifZOohJSzKuS9+eY2IHylXPLHbLKGOXBv/De1uGrWAfKTybSTiVFYXBnDcRwx0azAqdr228fGSfBu0NfD/ezL+Fun5jf5y8OrXEkUl0//J15llDLIzgnaBMQumjDdD7w8R1EmCLzsjJSVrg5pRadMxWWWXEy3WWXWWIIPtBwWni6LUqg0OqsPeRxsy+P5jScF4xwyphqrUagsyHfkyn3WXwI/blPpB1PK0037Q+zf+Jo50X+NSBKdXTdl8TzHiPGQ1YOKGJ4JUbeN5Uk8iIMARESQBECGgCImXw7AtXq06Ke9UdUBtsWIBJ8ALnyhA6f9lPBPZ0mxbjv1bpT8KSnvH/Uwt5J4zoKCY9CgtNUpoLKiqiDoqgAfITKQSxBeQTIQS0gmQgG52Gp8pAKMViUpIXfYbDqZybtZ2meq5UHS+g5CSvbvtASSinQaDwmu9m+Dms+ZhpecGXI8ku2PH7nXjgoq3yUcE7PvXbM4spM6LwvgqUwLKJfwmDRFVmUKEvYtYZdCpN+VwfnJqlTE2xYlHnkznNvjgxqVEWuB+n/ABKqVMMp1a1yNRl2Jva1vj4T3FV0GVLElyVGmltmJNtLAnzlp6RXuly5Y3AzFNDYHY26AafrLyyO9b9kRjrZVnUZsouBY6DqL+Q2Bv4zFrUAqF1y2LZtFB06iwOY8vWXTlWplJBR0I943uDbr0sLy/SC3yrly2bbYAWGmn1eZNuXPx8F6UTVeMUne4anpqQ2l8tzplB6AfGalxHBNcZN21BuMug/KdGZke6ENZXKktbVwosTcab3FjykJxXhpZVZApZRl90gaXzW2BGxtaedkg1K07O2DVU1RrHDlakVbOcw53Fx535HpOj9n+LCqltmHvDr4iaFiMMyXzKrWAPV2F9T02B0mXwDGFTmXZWsrErc32DWGguLestgzyxyvx5IzYFOP3Ok1NtPSWmE8w1YMoI2b5HmJW09lNNWjy2q0zGcSy0vuDMcywOIfaHwT/DYosotTrXdOga/fX4kHyYdJqs7d9oXC/b4NiB36P8AETr3ffHqub1AnEZVgEQT9coiQBERAAgxLlG2pYXC62va5vYC/IfoDALRM3n7KMCHxTViNKNMkH+eoci//nP8JpxxbciFHRVCj5C58zczN4Vx/E4csaNQrmtmGVCGy3tmBGtrn4wnQPoJZk0xOU8F+05gQuJpAj8dPQjxKE6+h9J0ng/FaOJQPRdXXnbcHoynVT4GWsgl0Ewe0OOFKiepF/TlM6lrNL+0DGfcB0/QaTLPLtg2jTFHukkaFVDV61upnTuB8OCIO7sNhaaX2PwOZ85GbXlbTxM6hhUsBObpoeTfM/BcZAFNwCOht+spNRswsulgBfTVtSd9bAbWvLzPpfQrY3+Wo5WteYhFKrkqEEm/cIzWuoJG2nM72nRN71yYxXvgs8VrsjILPlsblRmsxNluOf8AcymnjA5F0Y7gm7ZARtlNrE+Om8qpliwLDVsyg5rWCnRbX1PvajymHj6gcGi10YHMpynLpmOlrCwsRckA7zmk5JuSf4Z0xSaSr8mTSrA5yrIUS+QklbNs2Y/e1J89J7h1YEp9wDfQnXW58DmI8kMjqlR6VqYUO73yspA1FspysSF3G3X4+18NVAKABkUK4F+/nYMGGm/eBO4895l3teHa5L9i96ZkYyqqZeZYqX0YFt9db21AsPDxmRicq2IYEMGKp3QW7uwv0teR1Ksc1NbHLrYs9mFtdVGx1BsbmxPLWUcUd1OYqGVWDZhZs1iQRbNYWVTuOV5Xv03Xr8FuzaV/yYGNwSjKoY3ZbZQPc5jS17np4HlNfXH+zYkqQFFiGBW9xfQctDrJ7F8UzMzLYKCyHNlJVbLcAc77G4J2tNWxqK7kK5tpvc5jc3O2guT05zkpdzrg64xlWzf+zeP9pmTXa4vsCLgaga6WN/CTpN/rnOddn8WyVbq10z6anVdAQL9N/SdBxLZW056ien0WTui4vwed1ePtkpLyG5yy8F5QzzuOMt1QD3SNwfhzE+eOM4L2FerR/A7KP6b3X5ET6Fczjf2m4XJjS4H+ZTVv9Quh+SrIfANRiICnf9vykARFvCIAlabN6H52/wDYSiV0WsfO4+O3wNj6QwjN/wABdAdb/K1v3mG6FTJXh2Ivob+V+mwlWPwehNtd5zLI4yqRu4JxtERnB33mRwzidbDOKlF2RxzB0I6MNmHgZiPAM6EYnduwnblMYRScBMQFJyi+RwouWQ8upU6+chu2b5qlunWah9lpA4lS8UrAefsnP5Azde0VK9f4fXjOfqn9K+TfAvqfwSHZwrRoqSO8zBQotmJPIXtfTX0m4ovO5FgdNLa2Nz5W+ZkFgcHdEyqhKsrd4bdSvRrXtJmjVRHyXIZySMxJDGwLZb8h0lsekk+NCe3a52XcKh1JJIsAPdykAXLC3Uk/CRNBVXM+QhFcBCrAKE97Na9gAS2tryVrU3YBSFyn3tSDoRYAAdPGR1PD1CrItQlke5zjU5hexK6DfkLDpeVyJ2lXsmDVN36MGtXqK1aowIYIEQashY2y2vcZjm3t5zPw2HqAqXyuMpuWPeBY3IIHdsBcX9JjUndPfyNlZiAjse/qCGuOQN78rHczPpU7AOtRyGBOUWZTcm5Fhqbt62mMFb8m03S1RB4j+GMyqzViwC90MQAzWBYC17Bhfw8J7UxzVEdTYLZMtQE2Z7m4IFiLnMPh1lWKS2IW1QO5Vso7tlYILOiHTdDpcc+sNiqblUdVSpZiUbRb7XZdmOoI332Ewa53XivZsvDq/PwYFSu65maj7VAwJZmUlbBdCwNrWIOlzpruRKGxQrLdmIbUrZiqd1rd0DnZtr9ZSUdARXamAWKZArBCuhDBhZb/AHrC+g5G8sHDINChdBYlhYAmxzZW00sDsBvMJWtG8EnstYgq9HVAqDOEuVzaEksDpcCwtcdfOQ3sspCkA5DYBTe6bgrzFvPcSVrYpmzIoeyIVsNEABAD+FgTfe9xMUJktlUlkLX0CEr90DnY6m2+8q5F6M/hqrmF1ykC5vZc34TYG1720M3nH2CI9rE2vbmbTVeAksyqVYWsQWtrbx56mbN2hS1BT0K2AGxvy+uU6+gT7mzi6xqkjFFWwHPxlQqSFo4q3vH9tP8An5TIWrznqp2ec1RIO85l9rFPvYd+oqL8ChH5mdBFWaJ9qjXSh/W//iP2lnwQc4iIlAIiIAiIgF+nU1DddD59fX95saYlmAzWuFHIW08t9pqyPY/n5SUwOJsCDYi1x1P7ETnzQtWjbFLwW8fgrag33vMFUPSTLuNL7dZU+EXQ62PTrv8AGI5Go0yZQtmV2ErCnxDDMRb+Jk/7itTHzadG7V4ZzUIRsjECzWvb0nNcHSKsrL76kMv9Sm4+YE6/xzLUWlXUd11VvIMAdfiZTI3KHwXxrtkjKwFF1RMhBuyGobXvoASNRl0A2v5SUd1YhShJBuMy6AqAwN/UC4536SP4VXAQA33y6AnlcXttJdmItYE6gctAeZv08JtBJw0/RnNtS2ixihUamBlAdiA1jcLrcm+hO3zl1Da9iCcwBJWxOnXS58dpVSqgjQlu8R5G+vwlmuiBg5BJU2GXMbXv91fPpJaraZCfhotJXC9zMpcEZwSbd/vNrbU2ueXoNqEOV8maygZgoQqgTcWI0uCN5Zx/D1Z76rchiwIFjZl/3HPbW409Jk4ynTGjt3ijKMxuMoF2JG19tTMX3butP2a/Tqr2YuNb2WQKEsEYlyo7g0sVCjS7EHppIithaVRlxGYuCSj3ZtRewcbXF2TQC2ukmKWCqAopqFxY57hSjLtbrzHhYS3w6jTV6q0VBXTMt9nJIZQDooso0mMouT2qXpm0ZKK09+0QXGMVSZSGUOFORadtFYBu8Rk0JGwvbQ+IkpwxioSgUUEKrA6WtcqdG+8dDoNL69DRScoCz0lpoTemuQEhgbC4BuxIJP6zOw9EsoKOwZXNyVXMyZielyN7GZwT7r8+vsXnL6a8eyIr4Z0RglNHaq5YMtiijci5Hg3TfrIn/CMpOua5udRbNY5hzsL/AJzZ8cpfK1mGV+6zEqQDq3dA1uNNbjaQD0e8+4DNot7rYbkAbX5ic3UJRejbFJtbJDglMjL8La7nlJvtOctNF8R8h/xMbgGDU5Qb3zB/C4PL1lHanEXqBfwj8/8Aid3QQai5ezj6udySNWdirCw689NwTpMulW0tflMHGPMZK5G5+vWeglRyN2TYq9DeaT9ple4w6+NQ/AIP/abPTxAPOaL2/wARmrov4ad/VmP6ASz4KmrRESgEREAREQBNi7H8Op4l6mHfus6Z6bj3lqIdgOYKs1x/L5Ga7M3guPOHr06w+44J8V2ceqlhAJPiHDK+FfLWS6X0cXKN015HwNjJBcQipnsrNyAYEKeV15Hy/tOnYiijpyZWFxzBBFx6Wmp8R7HI/ujKOg0Hw2mU8Fu0aRy0tnvYXhn+Jqmo1iiG7Ag876D4Toj4ZGR6Si2XYeHIj4TmmF7MYmmLU8TVQdEqOg9cpF5sWA4hiqQHtiajJcq50Z0+8jnYn8LdRY73BY2lsnvT4JjhdTI2U+R8xNgNRQASQLkAX6naQVXJXRMRRbMjgNccx49OhG+kqo49FX2TMFOXun8IOik22F/LaZRm8TcZceDVx/yK1+SeJsNPPzlijh0HfCZWJLHmQzCx25yxhmKlFzhkK2G5LMBe4a55DaXXqKpykkMxuNhmsR03GwM27k9tGPa1pFdZUqKRZWAOoIuAy2PeHUECUVjcDMiuhU5idTa3d7trNe5+jLyWtoBvstraaa/XKVuAdCLjmN/lJce5EKVFLAkDKbXXQEbHe9vlaYqYXLtUa+csSSLm97L/AE66DwmSq3IPIX0tYg7fC15U6LuQDbbTaHFPbJUmtGPi2SwZ+8Awy2/Ffu6DczHq4sLVs1PTL3agsRbS4J3GvLwlqtxFg7DJZANGvqWBsdOnjIfGY0sfCcOfqYx/S9369HViwt/q4+S/xvG+0ARWAuegJJAuLdCDrfwmLgcOXYLr5/rKKVIuQN9Zs/BuGgasvkb3+XLwnHCMs87Z0ylHFGkSGFpLRplr6KNz4TTsefaOWVrs2tj+hmT2546ygUKQuRrU1sQOQHifPbzkP2SxOepdh3l1sd/h0ntwiopRR5cpdzcmRmPR0Yh1KnoR9XEji9p1vE0EqLldFZTyI/LofKajxbsapu1B8p/A+q+jbj1vNKKGsYepNB49ivaYio/LNlHkgCj/AMb+s3Liy1MKrtUUqwWybFSx0WxGh1N5zwQwexESoEREARAiAIAiIB1j7OuMe1w/sWPfoWXzpn3D6ar6DrNvWcK7P8WbC10rLcgXDL+JD7w89AR4gTtuFxKuqurBlYBlI2IO0vF6IZmKJ49MHS0pRpdUyQaocU3C62axbBVn7439jUb7w/kbmP10M9xbhiVUFWmA6uuXMrWsjakg7EbGZGLwqVEZHUMrAhgdiDvNBw3FMRwet7E3qYZyTTBNja+qg8nF9tm02vpjmxKcaf8ARpiyODtG28L7gCtlamAclgWIVhyY8ra+p6yco4oBF7wdwAt8utzYXKjbleYPD8ThccuehUCm4LroGBtazqRcaaXmJiuG1aTu+uVR3RYZTpyIFx7vOedJZMPi17O1OGbzTNho1lOotcMbm1tbkf7tPPyvL1OsL3zE5rkDlpa9tNP7zS8HiHp5gbqTdgGYn3tdRymRXruyBCSouCcl9fAa7X52kLraXBL6TfJtr4gAAk6Hn57SN4hxGwIU6yBrV6hbV2I3so0sBsRz1/OV0KbkCyknnpz+MzydbKS7Yl4dKo7ZaOJZ+RtyvcGXaGFLGw1LHUWOm3ymdhOEux1HPTw+tZseA4WlIZmsPE8h+kxxdPPLLa0aZM0Ma+5jcJ4UFAJGuv7fCU9o+OphkyJY1GGg/COp/aYnG+1aIClDvNzf7o8upmiYmsWJZiSTqSdzPaxYo440jzMmSU3bLVaoWJZiSSbknckzHFRlYMpIYbEGxHrPXa8pM1MzYuH9sXSy1Vzj8S6N6jY/KSGJ7T0XXuOL9DofgdZo7CYnE6y06ZdgCdkB5udvhv6SUyKJXtPxK+HqZjcMpUA9W0X5m/pOaTIxGNqOoV3JA5ePU9ZjyG7AiIkAREQBPeX1tPBKy997n5WHhJASncbgW66aSiXDUFrAed7E/G20twwJufYLtH7Fhh6htTY9xjsrnkf5WPwPnNMiE6B9Bq0rQm976Wtbx6znXYvtd7uHxDa6BHJ36Kx69Dz2336Cjy/JBmAyK45wmniqLU3Gh91raq4vZh5fMXHOZ6NK3cAXMhhHEnevhK5Ui1anoea1E3BtzBWx689CJ1Xsv2v9tTGRgxHvU3JLLr+LcrvYm8i+3PZz/EU/aIP41MXXqy7lPPmPHznLcDjXpOKiNlddxtfXUW/MTKqZe7PoZsfhmsalIqRzC5h00y6/ES6GwTf9VR/U1j8DNE7PcfTFKNcrj3kv8x1H14yVqUlO1pV4ccnbSLrJJLTZs/scGN6yf710/XnKn4zgaf8A1FP9Pe/KaNUw9v7zDdN4WCEdpIPLKXLZuuL7aIBajTJ8W0HwGp+U1niXG61b330/CNF+HP1kSQZbdjNCheerLDNKSZTmkkHt54ZTeUu4ALMQABck7ASQHZVBZjZVFyTyAmlcW4ia75tlGiL0HU+J5/2l/jPFjWOVbimDp1Y9T+g+hFyGyBERIAiIgCIiAIiIAiIgCIiAJuHZjto1G1OuS1PQBt3UeP4l+fnNPiSnQO+YLGJUUOjhlOxBuJlK5v4Tg/C+L1sO2ak5W+6nVW81/XedB4J2+o1LLXHsn/Fuh9fu+vxlk0yDem1nLftD7Pezf/E0xZHP8QD7rnZvJjv4+c6Th8SrgMrBgdiCCIxmHWorIwzKylWB2IO8NWgjiIxpulRFyOml10VreHXe/W86D2Y7TJiFyPYONx18fr+00Dj3CXwldqZuQO8jfiXkfMbHxEwadRgwZTZhsRvM0qL3Z296YI0mDWpeEgeyvagVAKdQ2caef19dTtVRQRLrZUh61OYdRZK1kmFVSTQsjWWUy5i6yILuwUeJtNcx/aMbUlv/ADsNPRf3kNUCYxeLSmuZ2sOQ+8fADnNT4pxV6xt7qA6L+rdTMKtWZ2zMxYnmfrQSiQ2BERIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAZWC4hVom9KoyH+U6HzXY/CbLgPtBxKaOiVB6o3xFx8pqESbaBt/aHtNh8ZSytTZKi6o3dZb/eUkG9mt00IB5TUlFjKZ6uukh7JRka3DA2YagjQ/8zd+C9sVFE+2DFlsO6L3GwNul7DwuOomhBrHWXFq5WDL6g6g30II5gjSVjaLOmbhi+3CG+Skx/qIA+V5B4vtPiH2KoP5Rc/EyJxFMAgj3WF18r2IPiCCPS/OWpfuZQqq1Gc5mYsepJJ+cpiJAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERALyANpz+tuvlLNrRL6VVPvgnxH6jS/oRIJ5KqfepsPwkOPUhGHzQ/wCmY0zqtWmqMqEsz2BJUqFUEN11JIHwmDCDEREkgREQBERAEREAREQBERAEREAREQBERAEREAREQBBiIB4J6YiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgH//2Q==',
            'status' => 'active',
            'created_at' => '2024-01-02 13:55:50',
            'updated_at' => '2024-01-02 13:55:50'
        ]);

        Menu::create([
            'foodid' => 'B03',
            'foodname' => 'Milo',
            'description' => 'A velvety blend of chocolate and malt, stirred into warm milk to create a comforting and nostalgic beverage. Sip on the familiar taste that transcends generations, offering a perfect harmony of sweetness and cocoa goodness.',
            'price' => 3.20,
            'categories' => 'beverages',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:56:23',
            'updated_at' => '2024-01-02 13:56:23'
        ]);



        Menu::create([
            'foodid' => 'O01',
            'foodname' => 'Toast',
            'description' => 'Savor the simplicity of our Butter Kaya Toast. Crispy toast, a lush smear of butter, and a dollop of sweet kaya jam. A bite-sized journey into the heart of Malaysian breakfast tradition.',
            'price' => 3.90,
            'categories' => 'other',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:57:41',
            'updated_at' => '2024-01-02 13:57:41'
        ]);



        Menu::create([
            'foodid' => 'O02',
            'foodname' => 'Egg Tart',
            'description' => 'A delicate dance of flaky crust and smooth custard, our Egg Tart is a bite-sized symphony of sweetness. Indulge in this timeless treat at our cafe.',
            'price' => 4.90,
            'categories' => 'other',
            'image_url' => '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',
            'status' => 'active',
            'created_at' => '2024-01-02 13:58:10',
            'updated_at' => '2024-01-02 13:58:10'
        ]);


        Topping::create([
            'id' => 1,
            'title' => 'Flavour',
            'foodid' => 'F02',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Topping::create([
            'id' => 2,
            'title' => 'Spicy Level',
            'foodid' => 'F03',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Topping::create([
            'id' => 3,
            'title' => 'Sambal',
            'foodid' => 'F04',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Topping::create([
            'id' => 4,
            'title' => 'Spicy Level',
            'foodid' => 'F05',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Topping::create([
            'id' => 5,
            'title' => 'Ice Level',
            'foodid' => 'B01',
            'created_at' => '2024-01-01 07:37:05',
            'updated_at' => '2024-01-01 07:37:05'
        ]);



        Topping::create([
            'id' => 6,
            'title' => 'Sugar Level',
            'foodid' => 'B02',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Topping::create([
            'id' => 7,
            'title' => 'Ice Level',
            'foodid' => 'B02',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Topping::create([
            'id' => 8,
            'title' => 'Ice Level',
            'foodid' => 'B03',
            'created_at' => '2024-01-01 07:46:02',
            'updated_at' => '2024-01-01 07:46:02'
        ]);



        Topping::create([
            'id' => 9,
            'title' => 'Sugar Level',
            'foodid' => 'B03',
            'created_at' => '2024-01-01 07:46:02',
            'updated_at' => '2024-01-01 07:46:02'
        ]);

        Toptions::create([
            'id' => 1,
            'option' => 'Tropical Chicken',
            'topping_id' => '1',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Toptions::create([
            'id' => 2,
            'option' => 'Super Cheese',
            'topping_id' => '1',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Toptions::create([
            'id' => 3,
            'option' => 'Chicken Feast Pepperoni',
            'topping_id' => '1',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Toptions::create([
            'id' => 4,
            'option' => 'Seafood Delight',
            'topping_id' => '1',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Toptions::create([
            'id' => 5,
            'option' => 'Hawaiian Chicken',
            'topping_id' => '1',
            'created_at' => '2024-01-01 06:46:57',
            'updated_at' => '2024-01-01 06:46:57'
        ]);



        Toptions::create([
            'id' => 6,
            'option' => 'No Spicy',
            'topping_id' => '2',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Toptions::create([
            'id' => 7,
            'option' => 'Some Spicy',
            'topping_id' => '2',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Toptions::create([
            'id' => 8,
            'option' => 'More Spicy',
            'topping_id' => '2',
            'created_at' => '2024-01-01 06:56:41',
            'updated_at' => '2024-01-01 06:56:41'
        ]);



        Toptions::create([
            'id' => 9,
            'option' => 'Less Sambal',
            'topping_id' => '3',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Toptions::create([
            'id' => 10,
            'option' => 'More Sambal',
            'topping_id' => '3',
            'created_at' => '2024-01-01 07:26:37',
            'updated_at' => '2024-01-01 07:26:37'
        ]);



        Toptions::create([
            'id' => 11,
            'option' => 'No Spicy',
            'topping_id' => '4',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Toptions::create([
            'id' => 12,
            'option' => 'Medium',
            'topping_id' => '4',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Toptions::create([
            'id' => 13,
            'option' => 'Very Spicy',
            'topping_id' => '4',
            'created_at' => '2024-01-01 07:31:47',
            'updated_at' => '2024-01-01 07:31:47'
        ]);



        Toptions::create([
            'id' => 14,
            'option' => 'Normal',
            'topping_id' => '5',
            'created_at' => '2024-01-01 07:37:05',
            'updated_at' => '2024-01-01 07:37:05'
        ]);



        Toptions::create([
            'id' => 15,
            'option' => 'Less Ice',
            'topping_id' => '5',
            'created_at' => '2024-01-01 07:37:05',
            'updated_at' => '2024-01-01 07:37:05'
        ]);



        Toptions::create([
            'id' => 16,
            'option' => 'More Ice',
            'topping_id' => '5',
            'created_at' => '2024-01-01 07:37:05',
            'updated_at' => '2024-01-01 07:37:05'
        ]);



        Toptions::create([
            'id' => 17,
            'option' => 'Hot',
            'topping_id' => '5',
            'created_at' => '2024-01-01 07:37:05',
            'updated_at' => '2024-01-01 07:37:05'
        ]);



        Toptions::create([
            'id' => 18,
            'option' => 'Normal',
            'topping_id' => '6',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 19,
            'option' => 'Less Sugar (50%)',
            'topping_id' => '6',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 20,
            'option' => 'More Sugar (120%)',
            'topping_id' => '6',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 21,
            'option' => 'Normal',
            'topping_id' => '7',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 22,
            'option' => 'Less Ice',
            'topping_id' => '7',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 23,
            'option' => 'More Ice',
            'topping_id' => '7',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 24,
            'option' => 'Hot',
            'topping_id' => '7',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 25,
            'option' => 'Normal',
            'topping_id' => '8',
            'created_at' => '2024-01-01 07:46:02',
            'updated_at' => '2024-01-01 07:46:02'
        ]);

        Toptions::create([
            'id' => 26,
            'option' => 'Less Ice',
            'topping_id' => '8',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 27,
            'option' => 'More Ice',
            'topping_id' => '8',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 28,
            'option' => 'Hot',
            'topping_id' => '8',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);

        Toptions::create([
            'id' => 29,
            'option' => 'Normal',
            'topping_id' => '9',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 30,
            'option' => 'Less Sugar (50%)',
            'topping_id' => '9',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);



        Toptions::create([
            'id' => 31,
            'option' => 'More Sugar (120%)',
            'topping_id' => '9',
            'created_at' => '2024-01-01 07:40:51',
            'updated_at' => '2024-01-01 07:40:51'
        ]);
    }
}
