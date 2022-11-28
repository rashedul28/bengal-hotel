<html>

<head>
    <style>
        .main {
            margin: 10px;
        }

        .button-cancel {
            background-color: red;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
        }

        .button-details {
            background-color: #1f8dd6;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    @extends('Guest-pages/navbar')
    @section('content')
    <div class="main">
        <img src="/img/profile.png" alt=""><br>
        User Id: {{session('userId')}} <br>
        Name: {{session('name')}} <br>
        Email: {{session('email')}} <br>
        You are login as a {{session('role')}} <br>

        <h3>Your booked rooms</h3>
        <table border="1">
            <tr>
                <td>Room Id</td>
                <td>User Id</td>
                <td>Booked by name</td>
                <td>Phone</td>
                <td>Check-In</td>
                <td>Check-Out</td>
                <td colspan="2">Action</td>
            </tr>
            @foreach($aaa as $a)
            <tr>
                <td>{{$a->room_id}}</td>
                <td>{{$a->user_id}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->phone}}</td>
                <td>{{$a->checkin}}</td>
                <td>{{$a->checkout}}</td>
                <td><a href="/guest/profile/delete/{{$a->id}}"><input type="button" class="button-cancel" value="Cancel"></a></td>
                <td><a href="/guest/profile/booking-details/{{$a->id}}"><input type="button" class="button-details" value="Details"></a></td>
            </tr>
            @endforeach
        </table>

    </div>
    @endsection
</body>

</html>