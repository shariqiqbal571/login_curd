<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Dashboard</h1>

    <a href="{{url('/user/logout')}}">Logout</a>
    @if(session()->has('user'))
    <h1>{{session()->get('user')['name']}}</h1>
    <p>{{session()->get('user')['username']}}</p>
    <p>{{session()->get('user')['email']}}</p>
    @else
    <h1>No User</h1>
    @endif
</body>
</html>