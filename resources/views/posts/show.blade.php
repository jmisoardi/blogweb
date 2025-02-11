<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Isoardi</title>
</head>
<body>
    <h1>Estamos en la vista Show </h1>

    @if($post)
        <p>El post tiene una categoria {{$post}}</p>
    @else
        <p>No se proporcionó ningún post.</p>
    @endif
    
</body>
</html>