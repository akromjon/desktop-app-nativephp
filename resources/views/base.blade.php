<!DOCTYPE html>
<html lang="en">
<head>
    <title>GOHR</title>
</head>
<body>
    <h1>GOHR</h1>
    <ul>
        <li><a href="{{route("home")}}">Home</a></li>
        <li><a href="{{route('users')}}">Users</a></li>
    </ul>
    @yield('content')
</body>
</html>
