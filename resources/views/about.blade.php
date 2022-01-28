<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="data" method="post">
        @csrf
        <input type="text" name="username" placeholder="Username"> <span style="color: red">@error('username'){{$message}} @enderror </span><br><br>
        <input type="password" name="password" placeholder="Password"> <span style="color: red">@error('password'){{$message}} @enderror </span><br><br>
        <input type="submit" value="Submit">
        </form>

</body>
</html>