<html>

<head></head>

<body>
    @extends('Guest-pages/navbar')
    @section('content')
    <h1>You are loged in as a guest</h1>
    <p>{{ now()->toDateTimeString() }}</p>
    @endsection
</body>

</html>