<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function addnotification(Request $request){
        $subject = $request->input('subject');
        $description = $request->input('description');
        $roles = $request->input('roles');
        $status = "In Progress";

        $notification = new Notification();
        $notification->subject = $subject;
        $notification->description = $description;
        $notification->roles = $roles;
        $notification->status = $status;
        $notification->save();


        if($roles == "Staff")
            return redirect('notification');
        else
            return redirect('notify');
    }

    public function subjectanddescription(Request $request){
        $id = $request->input("id");
        $notification = Notification::where('id', $id)->first();
        return view('notificationdetails', compact('notification'));
    }

    public function chefsubjectanddescription(Request $request){
        $id = $request->input("id");
        $notification = Notification::where('id', $id)->first();
        return view('notifydetails', compact('notification'));
    }

    public function solved(Request $request){
        $id = $request->input("id");
        $notification = Notification::where('id', $id)->first();
        $notification->status = "Solved";
        $notification->save();
        return redirect()->back();
    }

}
