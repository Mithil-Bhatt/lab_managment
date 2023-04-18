<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@foreach ($complains as $complain)
    <tr>
        <td>{{ $complain->id }}</td>
        <td>{{ $complain->feedback }}</td>
        <td>{{ $complain->Computer_no }}</td>
        <td>{{ $complain->lab_no }}</td>
        <td>{{ $complain->hardware_name }}</td>
        <td>{{ $complain->software_name }}</td>
    </tr>
@endforeach
</body>
</html>