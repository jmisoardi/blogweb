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

        <div class="max-w-4xl mx-auto px-4">
            {{-- <h1>¡Usted señor jair esta en el inicio! </h1> --}}
            
            {{-- Utilizamos x-alert para mostrar un mensaje de alerta, ya que manejamos la alerta en components/alert.blade.php --}}
            {{-- <x-alert> --}}
                {{-- <x-slot name="title">Actualizar los datos!! </x-slot> --}}
                {{-- Tenga en cuenta los cambios realizados.     --}}
            {{-- </x-alert>    --}}
            
            {{-- Segunda forma de utilizar x-alert  --}}
                <x-alert type="dark">
                    <x-slot name="title">
                        Titulo de Alerta!! 
                    </x-slot>
                    
                    Tenga en cuenta los cambios realizados.
                </x-alert>
               {{--  <x-alert type="danger">
                    <x-slot name="danger">
                        Titulo de Alerta!! 
                    </x-slot>
                    
                    Tenga en cuenta los cambios realizados.
                </x-alert>

                <x-alert type="success">
                    <x-slot name="success">
                        Titulo de Alerta!! 
                    </x-slot>
                    Tenga en cuenta los cambios realizados.
                </x-alert>

                <x-alert type="warning">
                    <x-slot name="warning">
                        Titulo de Alerta!! 
                    </x-slot>

                    Tenga en cuenta los cambios realizados.
                </x-alert>

                <x-alert type="dark">
                    <x-slot name="dark">
                        Titulo de Alerta!! 
                    </x-slot>

                    Tenga en cuenta los cambios realizados.
                </x-alert>
 --}}


        </div>

    </body>


</html>