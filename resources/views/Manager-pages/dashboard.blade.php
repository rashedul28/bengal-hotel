<html>

<head></head>

<body>
    @extends('Manager-pages/navbar')
    @section('content')
    <h1>You are loged in as a manager</h1>
    <p>{{ now()->toDateTimeString() }}</p>
    @endsection
</body>

</html>