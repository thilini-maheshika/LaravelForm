<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update page </title>
</head>
<body>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$update['id']}}"> <br><br>
        <input type="text" name="username" placeholder="Username" value="{{$update['username']}}"> <span style="color: red">@error('username'){{$message}} @enderror </span><br><br>
        <input type="text" name="name" placeholder="name" value="{{$update['name']}}"> <span style="color: red">@error('name'){{$message}} @enderror </span><br><br>
        <input type="password" name="password" placeholder="Password" value="{{$update['password']}}"> <span style="color: red">@error('password'){{$message}} @enderror </span><br><br>
        <input type="email" name="email" placeholder="email" value="{{$update['email']}}"> <span style="color: red">@error('email'){{$message}} @enderror </span><br><br>
        <input type="submit" value="Submit"><br><br>
    </form>
</body>
</html>