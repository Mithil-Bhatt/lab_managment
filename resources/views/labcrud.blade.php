<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>

<body>


    <h1>lab data</h1>
    <form action="/labdata" method="POST">
        @csrf
        <input type="text" name="lab_no" placeholder="lab_no" value="{{ old('lab_no')}}">
        @error('lab_no')
        {{ $message }}
        @enderror
        <br>

        <input type="submit" value="submit">
    </form>
    <br>


    @foreach($userdata as $user)    
    {{ $user->lab_id}} {{ $user->lab_no}}

    <a href="/labdata/{{$user->lab_id}}/edit">Edit</a><br>

    <form action="/labdata/{{$user->lab_id}}" method="POST">
        @method('DELETE')
        @csrf
        <input type="submit" value="delete">
    </form>
    <br>

    @endforeach

</body>

</html>