<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function create()
    {
        return view('Public-pages/register');
    }
    function store(Request $request)
    {
        $valid = validator::make($request->all(), [
            'name' => "required",
            'email' => "required",
            'password' => "required",
            'role' => "required",
        ]);
        if ($valid) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->role = $request->role;
            $user->save();

            //Store user info for profile view in session->put();
            session()->put('userId', $user->id);
            session()->put('name', $request->name);
            session()->put('email', $request->email);
            session()->put('password', $request->password);
            session()->put('role', $request->role);

            switch ($request->role) {
                case "Admin":
                    // return view('Admin-pages/dashboard');
                    return redirect()->route('admin-dashboard');
                    break;
                case "Guest":
                    // return view('Guest-pages/dashboard');
                    return redirect()->route('guest-dashboard');
                    break;
                case "Manager":
                    // return view('Manager-pages/dashboard');
                    return redirect()->route('manager-dashboard');
                    break;
                default:
                    // return view('Public-pages/register');
                    return redirect()->route('register');
            }
        }
    }

    function set()
    {
        return view('Public-pages/login');
    }

    function go(Request $request)
    {
        $match = User::where('email', $request->email)->where('password', $request->password)->first();
        // $user = new User();
        if ($match) {

            //Store user info for profile view in session->put();
            session()->put('userId', $match->id);
            session()->put('name', $match->name);
            session()->put('email', $match->email);
            session()->put('password', $match->password);
            session()->put('role', $match->role);


            switch ($match->role) {
                case "Admin":
                    // return view('Admin-pages/dashboard');
                    return redirect()->route('admin-dashboard');
                    break;
                case "Guest":
                    // return view('Guest-pages/dashboard');
                    return redirect()->route('guest-dashboard');
                    break;
                case "Manager":
                    // return view('Manager-pages/dashboard');
                    return redirect()->route('manager-dashboard');
                    break;
                default:
                    // return view('Public-pages/register');
                    return redirect()->route('register');
            }
        } else {
            return view('Public-pages/login');
        }
    }

    function adminAddRoom2(Request $request)
    {
        $valid = validator::make($request->all(), [
            'name' => "required",
            'price' => "required",
            'type' => "required",
            'description' => "required",
        ]);
        if ($valid) {
            $room = new Room();
            $room->name = $request->name;
            $room->price = $request->price;
            $room->type = $request->type;
            $room->description = $request->description;

            $room->status = 'false'; //by default false means room is available for booking

            $room->save();
            return back()->with('success','Add room successfully!');

        }
        else{
            return view('Admin-pages/add');
        }
    }
}
