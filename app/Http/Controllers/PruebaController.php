<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller{
    public function index($post=null, $categoria=null, $nombre=null){
        
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
        
    }    
    //Probando una nueva ruta con un controlador
    public function create(){
        return "¡Revisando la ruta Create!";
    }
    public function show(){
        return "¡Revisando la ruta Show!";
    }

}

