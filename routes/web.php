<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PruebaController;
use App\Models\Post;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', [HomeController::class, 'index']);

//IMPORTANTE: Las rutas se leen de arriba hacía abajo, por lo que si se coloca una ruta con un parámetro opcional al final, no se podrá acceder a las rutas que están arriba de ella, ya que el sistema siempre tomará la primera ruta que coincida con la URL ingresada.

//Ruta de prueba para verificar que la configuración de Laravel está funcionando correctamente. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php.
/* Route::get('/prueba', function () {
    return ('¡Esta es una nueva ruta funcionando!');
}); */

//Ruta de prueba para verificar que la configuración de Laravel está funcionando correctamente. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php. Para ello, vamos a crear una nueva ruta en el archivo routes/web.php.

//Get (Siempre se usa para obtener información)
//Post (Siempre se usa para enviar información)
//Put (Siempre se usa para actualizar información)
//Patch (Siempre se usa para actualizar información)
//Delete (Siempre se usa para eliminar información)

/* Route::get('/post/post-1',[HomeController::class, 'index']); */



/* Route::get('/post/post-2', function () {
    return ('¡Esta es una nueva ruta funcionando-2!');
});
Route::get('/post/post-3', function () {
    return ('¡Esta es una nueva ruta funcionando-3!');
}); */


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

/* Route::get('/post/{post?}/{categoria?}/{nombre?}',function($post=null, $categoria=null, $nombre=null){

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
 */
    //Distintas formas de definir rutas con controladores
    Route::get('/post/{post?}/{categoria?}/{nombre?}',[PruebaController::class, 'create']);
    Route::get('/create', [PruebaController::class, 'create']);
    
    
    Route::get('/index',[InicioController::class, 'index']);
    
    Route::get('/create',[InicioController::class, 'create']);
    
    Route::get('/show/{post}', [InicioController::class, 'show']);

    // En este ejemplo creamos una ruta, y una instancia de la clase Post, la cual es un modelo que representa una tabla en la base de datos. Luego, asignamos valores a los atributos de la instancia, y finalmente, guardamos la instancia en la base de datos.
    Route::get('/prueba', function () {
            
        //Crear nuevo registro
        /* $posts = new Post();
        
        $posts->title = 'Mauro Garro'; 
        $posts->content = '¡Bienvenido a mi blog!';
        $posts->categoria = '¡Aula virtual!';        
        
        $posts->save(); */
       
    
        //Buscar registro por id
        /* $posts= Post::find(1); */

        //Buscar registro, con una condicional, en este caso es por "title" y va a buscar el primer registro que encuentre, con el metodo "first()"
        /* $posts = Post::where('title', 'Jair Manuel Isoardi')->first();
        
        $posts->title = 'Jair Ramon Isoardi'; */
        
        
        //IMPORTANTE BUSQUEDA DE REGISTROS

        //1º-FORMA-Trae todos los registros, ambos son iguales
        /*  $posts = Post::all();*/
        /*  $posts = Post::get();*/

        //2º-FORMA- Trae todos los registros que cumplan con la condición
        /*  $posts = Post::where('id','>=','1')->get(); */
        
        //3º-FORMA-Trae todos los registros que cumplan con la condición
        /*  $posts = Post::where('id','>=','1')
                        ->where ('title','Sofia Castillo')
                        ->get(); */
        
        //4º-FORMA-Trae todos los registros que cumplan con la condición, en este caso ordenados por id de forma descendente
        /*  $posts = Post::orderby('id','desc')
                        ->get(); */

        //5º-FORMA-Ordena los registros, hace un select, y toke(toma 2 registros) y los trae
        /* $posts = Post::orderby('id','asc')
                        ->select('id','title','content','categoria') 
                        ->take(2)                               
                        ->get(); */

        
        //6º-FORMA-Elimina registro.
        /* $posts = Post::find(1);
        $posts->delete(); */
        
        
     /* return $posts; */
    });