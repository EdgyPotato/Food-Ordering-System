<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function savereservation(Request $request){
        $name = $request->input("name");
        $email = $request->input("email");
        $phone = $request->input("phonenumber");
        $person = $request->input("person");

        $reservation = new Reservation();
        $reservation->name = $name;
        $reservation->email = $email;
        $reservation->phone = $phone;
        $reservation->people = $person;
        $reservation->status = "waiting";
        $reservation->save();

        $id = Reservation::max('id');
        return redirect('reservedcompleted/?reservationid='.$id);
    }

    public function cancel(Request $request){
        $id = $request->input('id');
        $update = Reservation::where('id', $id)->update(['status' => 'cancelled']);
        return redirect('reserve');
    }

    public function solve(Request $request){
        $id = $request->input('id');
        $update = Reservation::where('id', $id)->update(['status' => 'solved']);
        return redirect()->back();
    }
}
