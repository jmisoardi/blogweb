<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laravel 11 | Post</title>
    
    {{-- Esto es el CDN de Tailwind CSS para poder utilizar el framework --}}
    <script src="https://cdn.tailwindcss.com"></script>

</head>
    <body>
        
        <header></header>
        {{-- Se utiliza el componente x-app-layout para mostrar el contenido de la vista que es variable. --}}
        {{$slot}}

        <footer></footer>

    </body>
</html>