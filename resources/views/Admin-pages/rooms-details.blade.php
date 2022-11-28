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
    </style>
</head>

<body>
    @extends('Admin-pages/navbar');
    @section('content')
    <div class="details-container">
        <img src="/img/hotel-room.png" alt="Avatar" style="width:30%"><br>
        <h5>Name:</h5> {{$name}} <br>
        <h5>Price:</h5> Per night {{$price}} <br>
        <h5>Type:</h5> {{$type}} <br>
        <h5>About:</h5> {{$description}} <br>
    </div>
    @endsection
</body>

</html>