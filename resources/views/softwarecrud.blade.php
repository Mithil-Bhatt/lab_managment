<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>

<body>


    <h1>user data</h1>
    <form action="/softwaredata" method="POST">
        @csrf
        <input type="text" name="softwarename" placeholder="soft_warename" value="{{ old('roll_no')}}">
        @error('roll_no')
        {{ $message }}
        @enderror
        <br>
       
        <input type="submit" value="submit">
    </form>
    <br>


    @foreach($userdata as $user)
    {{ $user->id}} {{ $user->software_name}}

    <a href="/softwaredata/{{$user->id}}/edit">Edit</a><br>
    
    <form action="softwaredata/{{$user->id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="delete">
     </form>
     <br>

    @endforeach



</body>

</html>