<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>

<body>


    <h1>hardware data</h1>
    <form action="/hardwaredata" method="POST">
        @csrf
        <input type="text" name="hardware_name" placeholder="hardware_name" value="{{ old('roll_no')}}">
        @error('hardware_name')
        {{ $message }}
        @enderror
        <br>
       
        <input type="submit" value="submit">
    </form>
    <br>


    @foreach($userdata as $user)
    {{ $user->id}} {{ $user->hardware_name}}

    <a href="/hardwaredata/{{$user->id}}/edit">Edit</a><br>
    
    <form action="hardwaredata/{{$user->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="delete">
     </form>
     <br>

    @endforeach



</body>

</html>