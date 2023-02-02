<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Writer; 

class Post extends Model
{
    //-PARA METER DATOS INVENTADOS - use HasFactory;

    //un post tiene solo (belongsTo) un escritor
    public function writer(){
        return $this->belongsTo(Writer::class);
    }

    //necesario para el slug
    public function getRouteKeyName(){
        return 'slug'; 
    }
}
