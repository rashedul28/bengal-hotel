<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    @extends('Admin-pages/navbar')
    @section('content')
    <h3>Booked rooms...</h3>
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
        @foreach($bookedroom as $a)
        <tr>
            <td>{{$a->room_id}}</td>
            <td>{{$a->user_id}}</td>
            <td>{{$a->name}}</td>
            <td>{{$a->phone}}</td>
            <td>{{$a->checkin}}</td>
            <td>{{$a->checkout}}</td>
            <td><a href=""><input type="button" class="button-cancel" value="Sent confirmation mail"></a></td>
            <td><a href=""><input type="button" class="button-details" value="Details"></a></td>
        </tr>
        @endforeach
    </table>
    @endsection()
</body>

</html>