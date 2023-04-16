<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    
<h1>Hardware update</h1>

{{ $user->hardware_name }}

<form action="/hardwaredata/{{$user->id}}" method="post">
    @csrf
    @method('PUT')
<input type="text" name="hardware_name" value="{{ $user->hardware_name}}"><br>
    <input type="submit" value="update">
</form>



</body>
</html>