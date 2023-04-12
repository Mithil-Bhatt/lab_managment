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
    <form action="/data" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" value="{{ old('roll_no')}}">
        @error('roll_no')
        {{ $message }}
        @enderror
        <br>
        <input type="text" name="username" placeholder="username" value="{{ old('name')}}">
        @error('name')
        {{ $message }}
        @enderror
        <br>
        <input type="text" name="email" placeholder="email">
        @error('name')
        {{ $message }}
        @enderror
        <br>
        <input type="password" name="password" placeholder="password">
        @error('name')  
        {{ $message }}
        @enderror
        <br>
        <input type="submit" value="submit">
    </form>
    <br>

</body>

</html>