<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .button-edit {
            background-color: green;
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

        a{
            text-decoration: none;
        }

        .button-delete {
            background-color: red;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline;
            font-size: 14px;
            cursor: pointer;
            width: 100%
        }

        .card {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            max-width: 100%;
            border-radius: 0;
        }


        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.8);
        }

        img {
            border-radius: 0 0 0 0;
        }

        .container {
            padding: 5px 15px;
        }

        .card-container {
            margin-left: 20px;
            gap: 2rem;
            display: grid;
            grid-template-columns: repeat(4, 2fr);

        }

        @media screen and (max-width: 920px) {
            .card-container {
                margin-left: 20px;
                gap: 2rem;
                grid-template-columns: repeat(3, 2fr);

            }
        }

        @media screen and (max-width: 768px) {
            .card-container {
                margin-left: 20px;
                gap: 2rem;
                grid-template-columns: repeat(2, 2fr);

            }
        }
    </style>
</head>

<body>
    @extends('Admin-pages/navbar');
    @section('content')

    <span style="margin-left: 20px; font-size: 35px;">Rooms</span>
    <div class="card-container">

        @foreach($room as $rm)

        <div class="card">

            <img src="/img/hotel-room.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h3>
                    <b>
                        {{$rm->name}}
                    </b>
                </h3>
                <h4>
                    <b>
                        Price:
                    </b>
                    {{$rm->price}}৳
                </h4>
                <h6>{{substr($rm->description,0,30)}}....<a href='/admin/rooms-details/{{$rm->id}}'>
                        Learn more
                    </a></h6>

            </div>
            <a href="/admin/rooms/edit/{{$rm->id}}"><input type="button" class="button-edit" value="Edit"></a>
            <a href="/admin/rooms/delete/{{$rm->id}}"><input type="button" class="button-delete" value="Delete"></a>


        </div>


        @endforeach

        {!! $room->links() !!}
    </div>



    @endsection

</body>

</html>