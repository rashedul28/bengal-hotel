<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .card {
            box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            max-width: 100%;
            border-radius: 10px;
        }


        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.8);
        }

        img {
            border-radius: 5px 5px 0 0;
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
    @extends('Manager-pages/navbar');
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
                <h6>{{substr($rm->description,0,5)}}....<a href='/manager/rooms-details/{{$rm->id}}'>
                        Learn more
                    </a></h6>

            </div>
        </div>


        @endforeach

        
        {!! $room->links() !!}
    </div>
    

    @endsection

</body>

</html>