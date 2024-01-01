<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use Hash;
class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $username = $request->input("username");
        // Retrieve the user from the database
        $user = User::where("username", $username)->first();
        // Check if the user exists
        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Authentication successful
            session()->regenerate();
            Session::put('username', $username);
            Session::put('roles', $user->roles);
            if (session()->has('username')) {
                if($user->roles == "admin")
                    return redirect('dashboard');
                else if($user->roles == "staff")
                    return redirect('orderlist');
                else if($user->roles == "chef");
                    return redirect('dashboard');
            }
        } else {
            // Authentication failed
            return redirect()
            ->back()->withErrors(['error' => 'Invalid username or password. Please try again.']);
        }
    }
}
