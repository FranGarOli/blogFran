<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post; 

class Writer extends Model
{
    //un writer tiene 1 o muchos posts
    public function posts(){
        return $this->hasMany(Post::class);
    }
    
    //NECESARIO PARA CREAR DATOS DE PRUEBA - use HasFactory;
}
