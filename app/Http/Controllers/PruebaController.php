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
    public function create($variable=null){
        
        if($variable){
            return ("¡Revisando la ruta de ({$variable})!");
        }
        return ("Esta es la ruta Create de Jair");
    }
    /* public function show(){
        return "¡Revisando la ruta Show!";
    } */
    
    //Prueba del repositorio en la Laptop para ver si se sube al repo!! 
}

