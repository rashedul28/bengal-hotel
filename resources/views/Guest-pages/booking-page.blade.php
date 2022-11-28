<html>

<head>
    <style type="text/css">
        .form-style-1 {
            margin: 10px auto;
            max-width: 400px;
            padding: 20px 12px 10px 20px;
            font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
        }

        .form-style-1 li {
            padding: 0;
            display: block;
            list-style: none;
            margin: 10px 0 0 0;
        }

        .form-style-1 label {
            margin: 0 0 3px 0;
            padding: 0px;
            display: block;
            font-weight: bold;
        }

        .form-style-1 input[type=text],
        .form-style-1 input[type=date],
        .form-style-1 input[type=datetime],
        .form-style-1 input[type=number],
        .form-style-1 input[type=search],
        .form-style-1 input[type=time],
        .form-style-1 input[type=url],
        .form-style-1 input[type=email],
        textarea,
        select {
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            border: 1px solid #BEBEBE;
            padding: 7px;
            margin: 0px;
            outline: none;
        }

        .form-style-1 input[type=text]:focus,
        .form-style-1 input[type=date]:focus,
        .form-style-1 input[type=datetime]:focus,
        .form-style-1 input[type=number]:focus,
        .form-style-1 input[type=search]:focus,
        .form-style-1 input[type=time]:focus,
        .form-style-1 input[type=url]:focus,
        .form-style-1 input[type=email]:focus,
        .form-style-1 textarea:focus,
        .form-style-1 select:focus {
            -moz-box-shadow: 0 0 8px #88D5E9;
            -webkit-box-shadow: 0 0 8px #88D5E9;
            box-shadow: 0 0 8px #88D5E9;
            border: 1px solid #88D5E9;
        }

        .form-style-1 .field-divided {
            width: 49%;
        }

        .form-style-1 .field-long {
            width: 100%;
        }

        .form-style-1 .field-select {
            width: 100%;
        }

        .form-style-1 .field-textarea {
            height: 100px;
        }

        .form-style-1 input[type=submit],
        .form-style-1 input[type=reset],
        /* .form-style-1 input[type=back], */
        .form-style-1 input[type=button] {
            background: #4B99AD;
            padding: 8px 15px 8px 15px;
            border: none;
            color: #fff;
        }

        .form-style-1 input[type=submit]:hover,
        .form-style-1 input[type=reset]:hover,
        /* .form-style-1 input[type=back]:hover, */
        .form-style-1 input[type=button]:hover {
            background: #4691A4;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .form-style-1 .required {
            color: red;
        }
    </style>
</head>

<body>
    @extends('Guest-pages/navbar')
    @section('content')
    <div class='middle'>
        <form method="post">
            @csrf
            <ul class="form-style-1">
                <li><label>Room Id<span class="required">*</span></label>
                    <input type="text" name="roomId" class="field-divided" value="{{$roomId}}" placeholder="Room Id" required readonly />
                <li>
                <li><label>Room Name<span class="required">*</span></label>
                    <input type="text" name="roomName" class="field-divided" value="{{$roomName}}" placeholder="Room Name" required readonly />
                </li>
                <li>
                    <label>Price <span class="required">*</span></label>
                    <input type="text" name="price" class="field-long" value="{{$price}}" required readonly />
                </li>
                <li>
                    <label>Type <span class="required">*</span></label>
                    <input type="text" name="type" class="field-long" value="{{$type}}" required readonly />
                </li>

                <li>
                    <label>Check In <span class="required">*</span></label>
                    <input type="date" name="checkin" class="field-long" required />
                </li>
                <li>
                    <label>Check Out <span class="required">*</span></label>
                    <input type="date" name="checkout" class="field-long" required />
                </li>



                <li><label>User Id<span class="required">*</span></label>
                    <input type="text" name="userId" class="field-divided" value="{{session('userId')}}" placeholder="User Id" required readonly />
                <li>
                    <fieldset>
                        <legend>
                            ***
                        </legend>
                <li><label>Guest name<span class="required">*</span></label>
                    <input type="text" name="name" class="field-divided" placeholder="Guest name" required />
                <li>
                <li><label>Phone<span class="required">*</span></label>
                    <input type="text" name="phone" class="field-divided" placeholder="Phone" required />
                <li>
                <li>
                    <input type="submit" value="Submit" name="submit" />
                    <input type="reset" value="Clear form" name="reset" />
                    <a href="{{route('guest-viewroom')}}"><input type="button" name="back" value="Back"></a>
                </li>
            </ul>
            </fieldset>
        </form>
    </div>
    @endsection
</body>

</html>