<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h3>Login Page</h3>
    <form action="insert" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="username" placeholder="Username"> <span style="color: red">@error('username'){{$message}} @enderror </span><br><br>
        <input type="text" name="name" placeholder="name"> <span style="color: red">@error('name'){{$message}} @enderror </span><br><br>
        <input type="password" name="password" placeholder="Password"> <span style="color: red">@error('password'){{$message}} @enderror </span><br><br>
        <input type="email" name="email" placeholder="email"> <span style="color: red">@error('email'){{$message}} @enderror </span><br><br>
        <input type="file" name="image" placeholder="Image"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach ($data as $row)
               <tr>
                   <td>{{$row['id']}}</td>
                   <td>{{$row['username']}}</td>
                   <td>{{$row['name']}}</td>
                   <td>{{$row['email']}}</td>
                   <td><img src="{{Storage::url($row->image) }}"width="100px" height="100px"> </td>
                   <td><a href="{{'delete/'.$row['id']}}">Delete</a></td>
                   <td><a href="{{'edit/'.$row['id']}}">Update</a></td>
               </tr>
            @endforeach
    </table>
    
</body>
</html>