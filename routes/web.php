<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//IMPORTANTE: Las rutas se leen de arriba hacía abajo, por lo que si se coloca una ruta con un parámetro opcional al final, no se podrá acceder a las rutas que están arriba de ella, ya que el sistema siempre tomará la primera ruta que coincida con la URL ingresada.

//Ruta de prueba para verificar que la configuración de Laravel está funcionando correctamente. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php.
Route::get('/prueba', function () {
    return ('¡Esta es una nueva ruta funcionando!');
});

//Ruta de prueba para verificar que la configuración de Laravel está funcionando correctamente. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php.

//Get (Siempre se usa para obtener información)
//Post (Siempre se usa para enviar información)
//Put (Siempre se usa para actualizar información)
//Patch (Siempre se usa para actualizar información)
//Delete (Siempre se usa para eliminar información)

Route::get('/post/post-1', function () {
    return ('¡Esta es una nueva ruta funcionando-1!');
});
Route::get('/post/post-2', function () {
    return ('¡Esta es una nueva ruta funcionando-2!');
});
Route::get('/post/post-3', function () {
    return ('¡Esta es una nueva ruta funcionando-3!');
});


//DISTINTAS FORMAS DE DEFINIR RUTAS

//Otra forma de definir rutas

/* Route::get('/post/{id}', function ($id) {
    return ('¡Esta es una nueva ruta funcionando!'.' '. $id);
}); */
 

//Otra forma de definir rutas con varios parámetros

/* Route::get('/post/{id}/{nombre}', function ($id, $nombre) {
    return ('¡Esta es una nueva ruta funcionando!'.' '. $id.' '. $nombre);
}); */


//Otra forma de definir rutas con varios parámetros y uno opcional con el signo de interrogación es decir {nombre?}

Route::get('/post/{post?}/{categoria?}/{nombre?}',function($post=null, $categoria=null, $nombre=null){

//Cuando se usan las condicionales en la ruta se debe armar de forma inversa.    
    if($nombre){
        return ("¡Seleccion  ( {$post} -- {$categoria} -- {$nombre})!");
    }
    if($categoria){
        return ("¡Esta es una nueva ruta funcionando de la categoria ( {$post} --- {$categoria})!");
    }
    if($post){
        return ("¡Usted esta en la categoria ({$post})!");
    }
    return ("¡Usted esta en el inicio!");
});