<html>
<div style="text-align: center">
<head>
    <h1>Welcome {{$user = Auth::user()->user_name}}</h1>
</head>
<body>
<a href="{{route('user.logout')}}" type="button" class="btn btn-primary">Logout</a>
</body>
</div>
</html>
