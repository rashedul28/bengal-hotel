<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    function root()
    {
        return view('Public-pages/index');
    }
    function about()
    {
        return view('Public-pages/about-us');
    }
    function blog()
    {
        return view('Public-pages/blog');
    }
    function contact()
    {
        return view('Public-pages/contact');
    }
    function elements()
    {
        return view('Public-pages/elements');
    }
    function rooms()
    {
        return view('Public-pages/rooms');
    }
    function services()
    {
        return view('Public-pages/services');
    }


    function admin()
    {
        return view('Admin-pages/dashboard');
    }
    function guest()
    {
        return view('Guest-pages/dashboard');
    }
    function manager()
    {
        return view('Manager-pages/dashboard');
    }
    function adminAddRoom()
    {
        return view("Admin-pages/add");
    }
    function adminViewRoom()
    {
        $room = Room::paginate(4);
        return view('Admin-pages/rooms')->with('room', $room);
    }

    function adminroomsdetails($id)
    {
        $find = Room::findOrFail($id);
        if ($find) {
            return view('Admin-pages/rooms-details')
                ->with('name', $find->name)
                ->with('type', $find->type)
                ->with('price', $find->price)
                ->with('description', $find->description);
        } else {
            return redirect()->route('admin-viewroom');
        }
    }
    function guestViewRoom()
    {
        $room = Room::paginate(4);
        return view('Guest-pages/rooms')->with('room', $room);
    }

    function guestroomsdetails($id)
    {
        $find = Room::findOrFail($id);
        // echo $find;
        if ($find) {
            return view('Guest-pages/rooms-details')
                ->with('roomId', $id)
                ->with('name', $find->name)
                ->with('type', $find->type)
                ->with('price', $find->price)
                ->with('description', $find->description);
        } else {
            return redirect()->route('guest-viewroom');
        }
    }
    function managerViewRoom()
    {
        $room = Room::paginate(4);
        return view('Manager-pages/rooms')->with('room', $room);
    }

    function managerroomsdetails($id)
    {
        $find = Room::findOrFail($id);
        // echo $find;
        if ($find) {
            return view('Manager-pages/rooms-details')
                ->with('name', $find->name)
                ->with('type', $find->type)
                ->with('price', $find->price)
                ->with('description', $find->description);
        } else {
            return redirect()->route('manager-viewroom');
        }
    }

    function adminEditRoom($id)
    {
        $find = Room::findOrFail($id);
        if ($find) {
            return view('Admin-pages/edit-rooms')
                ->with('name', $find->name)
                ->with('type', $find->type)
                ->with('price', $find->price)
                ->with('description', $find->description);
        } else {
            return redirect()->route('admin-viewroom');
        }
    }

    function adminEditRoom2(Request $request, $id)
    {
        $find = Room::findOrFail($id);
        if ($find) {

            $valid = validator::make($request->all(), [
                'name' => "required",
                'price' => "required",
                'type' => "required",
                'description' => "required",
            ]);
            if ($valid) {
                $find->name = $request->name;
                $find->price = $request->price;
                $find->type = $request->type;
                $find->description = $request->description;

                $find->save();
                return redirect()->route('admin-viewroom');
            } else {
                return redirect()->route('admin-edit-room');
            }
        } else {
            return redirect()->route('admin-viewroom');
        }
    }

    function adminDeleteRoom($id)
    {
        $find = Room::findOrFail($id);
        if ($find) {
            $find->delete();
            return back()->with('sucess', 'successfully deleted');
        } else {
            return back()->with('error', ' room id not found');
        }
    }

    function profileView()
    {
        $value = Booking::where('user_id', session('userId'))->get();
        return view('Guest-pages/profile')->with('aaa', $value);
        // return $value;
    }


    function guestBookingRoom($id)
    {
        $find = Room::findOrFail($id);
        if ($find) {
            return view('Guest-pages/booking-page')
                ->with('roomId', $find->id)
                ->with('roomName', $find->name)
                ->with('type', $find->type)
                ->with('price', $find->price);
        }
    }


    function guestBookingRoom2(Request $request)
    {
        $valid = validator::make($request->all(), [
            'roomId' => 'required',
            'userId' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'name' => 'required',
            'phone' => 'phone',
        ]);
        if ($valid) {
            $book = new Booking();
            $room = new Room();

            $book->room_id = $request->roomId;
            $book->user_id = $request->userId;
            $book->checkin = $request->checkin;
            $book->checkout = $request->checkout;
            $book->name = $request->name;
            $book->phone = $request->phone;

            // $room->status = 'true';
            // $room->save();



            $book->save();
            return redirect()->route('profile-view');
        } else {
            return back();
        }
    }

    function booking($id)
    {
        $find = Booking::findOrFail($id);
        return view('Guest-pages/profile');
    }

    function bookingDetails(Request $request)
    {
        $find = Booking::findOrFail($request->id);
        if ($find) {
            return view('Guest-pages/booking-details')
                ->with('roomid', $find->room_id)
                ->with('userid', $find->user_id)
                ->with('bookid', $find->id)
                ->with('name', $find->name)
                ->with('checkin', $find->checkin)
                ->with('checkout', $find->checkout);
        } else {
            return view('Guest-pages/profile');
        }
    }

    function bookingCancel(Request $request)
    {
        $find = Booking::findOrFail($request->id);
        if ($find) {
            $find->delete();
            return back()->with('success', 'Canceled Succesffully');
        } else {
            return back()->with('error', 'try again');
        }
    }

    function bookedRoom()
    {
        $room = Booking::all();
        return view('Admin-pages/booked-room')->with('bookedroom', $room);
    }

    function freeRoom()
    {
        return view('Admin-pages/free-room');
    }

    function logout()
    {
        session()->flush();
        return redirect()->route('set');
    }
}
