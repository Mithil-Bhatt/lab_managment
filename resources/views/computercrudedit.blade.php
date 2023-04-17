<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    
<h1>computer update</h1>

{{ $user->computer_no }}

<form action="/computerdata/{{$user->computer_id}}" method="post">
    @csrf
    @method('PUT')
<input type="text" name="Computer_no" value="{{ $user->Computer_no}}"><br>
<input type="text" name="lab_id" value="{{ $user->lab_id}}"><br>
    <input type="submit" value="update">
</form>



</body>
</html>