<?php   
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    
    class InicioController extends Controller{
        public function index(){
            return view('posts.index');
        }

        public function create(){
            return view('posts.create');
        }

        public function show($post) {
            
            //Esta son dos formas de pasar datos a la vista
            //La primera con una variable definida
            /* return  view('posts.show',[
                'post' => '--Sofia Belen Castillo'
                ]); */
            //La segunda variable determinada en la URL
            return  view('posts.show', compact('post'));
        }
    
    
    
    
    
    }