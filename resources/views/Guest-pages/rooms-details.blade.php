<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .details-container {
            margin-left: 50px;
        }

        .button-edit {
            background-color: blueviolet;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline;
            font-size: 14px;
            cursor: pointer;
            width: 50%;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    @extends('Guest-pages/navbar');
    @section('content')
    <div class="details-container">
        <img src="/img/hotel-room.png" alt="Avatar" style="width:30%"><br>
        <h5>Room Id</h5> {{$roomId}} <br>
        <h5>Name:</h5> {{$name}} <br>
        <h5>Price:</h5> Per night {{$price}} <br>
        <h5>Type:</h5> {{$type}} <br>
        <h5>About:</h5> {{$description}} <br>
        <a href="/guest/room-booking/{{$roomId}}"><input type="button" class="button-edit" value="Get it"></a>
    </div>
    @endsection
</body>

</html>