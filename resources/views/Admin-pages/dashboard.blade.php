<html>

<head></head>

<body>
    @extends('Admin-pages/navbar')
    @section('content')
    <h1>Your are login as a admin</h1>
    <p>{{ now()->toDateTimeString() }}</p>
    @endsection
</body>

</html>