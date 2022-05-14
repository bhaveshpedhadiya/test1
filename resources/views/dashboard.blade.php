<html>
<head>
    <title>Dashboard</title>
</head>

<body>
    @if(Auth::check())
    <h1>{{Auth::user()->name}}</h1>
    <p><a href="{{url('logout')}}">Logout</a></p>
    <p><a href="{{url('products')}}">product</a><p>
    @endif
</body>

</html>