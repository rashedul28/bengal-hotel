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
    @extends('Guest-pages/navbar');
    @section('content')
    {{$checkout}}
    {{$checkin}}
    {{$name}}
    {{$userid}}
    {{$roomid}}
    {{$bookid}}
    @endsection
</body>

</html>