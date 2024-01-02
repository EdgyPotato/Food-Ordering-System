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
    }
}
