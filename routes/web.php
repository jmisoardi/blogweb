<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta de prueba para verificar que la configuración de Laravel está funcionando correctamente. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php.
Route::get('/prueba', function () {
    return ('¡Esta es una nueva ruta funcionando!');
});
