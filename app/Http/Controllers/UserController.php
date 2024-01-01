<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class UserController extends Controller
{
    function register(Request $request)
    {
        $username = $request->input("username");
        $password = $request->input("password");
        $roles = $request->input("roles");

        $validation = User::where("username", $username)->get();
        if (count($validation) > 0) {
            return redirect()->back()->withErrors(['error' => 'Invalid username or password. Please try again.']);
        } else {
            $user = new User();
            $user->username = $username;
            $user->password = $password;
            $user->roles = $roles;
            $user->save();
            return redirect("account");
        }
    }

    function delete(Request $request)
    {
        $id = $request->input("id");
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect()->back();
    }
}
