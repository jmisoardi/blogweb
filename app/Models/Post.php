<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Tenemos de definir la tabla a la que pertenece el modelo, siempre!!!
    protected $table = 'posts';
}
