<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    
<h1>Student update</h1>

{{ $user->name }}

<form action="/data/{{$user->id}}" method="post">
    @csrf
    @method('PUT')
<input type="text" name="username" value="{{ $user->username}}"><br>
    <input type="text" name="name" value="{{ $user->name }}"><br>
    <input type="text" name="email" value="{{ $user->email }}"><br>
    <input type="text" name="password" value="{{ $user->password }}"><br>
    <input type="submit" value="update">
</form>



</body>
</html>