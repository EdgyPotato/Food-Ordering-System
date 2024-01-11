<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReservationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

if (!function_exists('test')) {
    function test($path)
    {
        if (Session::has("username")) {
            if (session('roles') == "admin") {
                $adminpath = array('dashboard', 'account', 'createuser', 'adminmenu', 'addmenu', 'preview', 'sales', 'expense', 'profit', 'addexpense');
                foreach ($adminpath as $adminpath) {
                    if ($adminpath == $path) {
                        return view($path);
                    }
                }
                return redirect('dashboard');
            } else if (session('roles') == "staff") {
                $staffpath = array('reservation_staff', 'editorder', 'notification', 'staffaddnotification', 'menulist', 'payment', 'completepayment', 'invoice', 'reservationhistory', 'invoicehistory', 'invoicedetails');
                foreach ($staffpath as $staffpath) {
                    if ($staffpath == $path) {
                        return view($path);
                    }
                }
                return redirect('orderlist');
            } else if (session('roles') == "chef") {
                $chefpath = array('cheforderlist', 'notify', 'chefaddnotification');
                foreach ($chefpath as $chefpath) {
                    if ($chefpath == $path) {
                        return view($path);
                    }    
                }
                return redirect('cheforderlist',);
            }
        } else {
            return redirect('login');
        }
    }
}

Route::get('login', function () {
    if (Session::has('username')) {
        if (session("roles") == "admin")
            return redirect('dashboard');
        else if (session("roles") == "staff")
            return redirect('orderlist');
        else if (session("roles") == "chef");
        return redirect('dashboard');
    }
    return view('login');
});

Route::get('/logout', function () {
    Session::flush();
    return redirect('login');
});

//Customer (Not Need User Level) need table session
Route::get('/', function () {
    $table = request()->get('table');

    if ($table) {
        // Perform any necessary validation or processing on $table

        Session::put('table', $table);
        return view('cusmenu');
    } else {
        // Redirect to login if 'table' parameter is not present
        return redirect('scanqr');
    }
});


Route::get('food', function () {
    return view('food');
});

Route::get('foodedit', function () {
    return view('foodedit');
});

Route::get('cart', function () {
    return view('cart');
});

Route::get('carthistory', function () {
    return view('carthistory');
});

Route::get('reserve', function () {
    return view('reserve');
});

Route::get('reservedcompleted', function () {
    return view('reservedcompleted');
});

Route::get('scanqr', function () {
    return view('scanqr');
});

//Admin
Route::get('dashboard', function () {
    return test("dashboard");
});

Route::get('sales', function () {
    return test("sales");
});

Route::get("account", function () {
    return test("account");
});

Route::get('createuser', function () {
    return view("createuser");
});

Route::get('adminmenu', function () {
    return test("adminmenu");
});

Route::get('addmenu', function () {
    return test("addmenu");
});

Route::get('preview', function () {
    return test("preview");
});

Route::get('expense', function () {
    return test("expense");
});

Route::get('profit', function () {
    return test("profit");
});

Route::get('addexpense', function () {
    return test("addexpense");
});

// Staff
Route::get('reservation_staff', function () {
    return test("reservation_staff");
});

Route::get('editorder', function () {
    return test("editorder");
});

Route::get('notification', function () {
    return test("notification");
});

Route::get('staffaddnotification', function () {
    return test("staffaddnotification");
});

Route::get('payment', function () {
    return test("payment");
});

Route::get('completepayment', function () {
    return test("completepayment");
});

Route::get('menulist', function () {
    return test("menulist");
});

Route::get('invoice', function () {
    return test("invoice");
});

Route::get('invoicehistory', function () {
    return test("invoicehistory");
});

Route::get('invoicedetails', function () {
    return test("invoicedetails");
});

Route::get('reservationhistory', function () {
    return test("reservationhistory");
});



//chef
Route::get('cheforderlist', function () {
    return test("cheforderlist");
});

Route::get('chefaddnotification', function () {
    return test("chefaddnotification");
});

Route::get('notify', function () {
    return test("notify");
});


//testing
Route::get('testing', function () {
    return view("testingcss");
});

Route::get('test', function () {
    return view('test');
});

Route::get('/test-database', function () {
    try {
        DB::connection()->getPdo();
        print_r("Connected successfully to: " . DB::connection()->getDatabaseName());
    } catch (\Exception $e) {
        die("Could not connect to the database.  Please check your configuration. Error:" . $e);
    }
});

Route::post('auth', [LoginController::class, 'authenticate']);
Route::post('register', [UserController::class, 'register']);
Route::post('delete', [UserController::class, 'delete']);
Route::post('menu', [MenuController::class, 'save']);
Route::get('tofood', [MenuController::class, 'index']);
Route::get('topping', [MenuController::class, 'getTempOrder']);
Route::get('addcart', [MenuController::class, 'cart']);
Route::get('addminus', [MenuController::class, 'addminus']);
Route::get('cusedit', [MenuController::class, 'cusedit']);
Route::get('deletemenu', [MenuController::class, 'deletemenu']);
Route::get('invisible', [MenuController::class, 'invisible']);
Route::get('orderlist', [OrderController::class, 'view']);
Route::get('preparing', [OrderController::class, 'preparing']);
Route::get('complete', [OrderController::class, 'complete']);
Route::get('history', [OrderController::class, 'viewhistory']);
Route::get('approve', [OrderController::class, 'approve']);
Route::get('completed', [OrderController::class, 'completed']);
Route::get('staffedit', [OrderController::class, 'edit']);
Route::get('addnotification', [NotificationController::class, 'addnotification']);
Route::get('addnotificationchef', [NotificationController::class, 'addnotificationchef']);
Route::get('details', [NotificationController::class, 'subjectanddescription']);
Route::get('notifydetails', [NotificationController::class, 'chefsubjectanddescription']);
Route::get('solved', [NotificationController::class, 'solved']);
Route::get('tocompletepayment', [PaymentController::class, 'viewpayment']);
Route::get('deletepayment', [PaymentController::class, 'deletepayment']);
Route::get('reserved', [ReservationController::class, 'savereservation']);
Route::get('cancelreservation', [ReservationController::class, 'cancel']);
Route::get('solvereservation', [ReservationController::class, 'solve']);
Route::get('addexpenses', [ExpenseController::class, 'addexpense']);
Route::get('expensedetails', [ExpenseController::class, 'details']);
Route::get('deleteexpense', [ExpenseController::class, 'delete']);
Route::get('/send-mail', [PaymentController::class, 'sendEmail']);
