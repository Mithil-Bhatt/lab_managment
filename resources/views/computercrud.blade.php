<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>computer crud</title>
</head>

<body>


    <h1>computer data</h1>
    <form action="/computerdata" method="POST">
        @csrf
        <input type="text" name="Computer_no" placeholder="computer_no" value="{{ old('Computer_no')}}">
        @error('computer_no')
        {{ $message }}
        @enderror
        <br>
        <input type="text" name="lab_id" placeholder="lab_id" value="{{ old('lab_id')}}">
        @error('computer_no')
        {{ $message }}
        @enderror
        <br>

        <input type="submit" value="submit">
    </form>
    <br>

    

    @foreach($userdata as $user)
    {{ $user->computer_id}} {{ $user->Computer_no}} {{ $user->lab_id}}

    
    <a href="/computerdata/{{$user->computer_id}}/edit">Edit</a><br>
    
    <form action="computerdata/{{$user->computer_id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="delete">
     </form>
     <br>

    @endforeach


</body>

</html>