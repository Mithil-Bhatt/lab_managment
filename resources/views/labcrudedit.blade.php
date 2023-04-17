<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>

<body>

    <h1>Lab update</h1>

    {{ $user->lab_no }} 

    <form action="/labdata/{{$user->lab_id}}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="lab_no" value="{{ $user->lab_no}}"><br>
        <input type="submit" value="update">
    </form>



</body>

</html>