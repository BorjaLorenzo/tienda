<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articulos extends Model
{
    public static function getArticulos($id){
        $articulos=DB::table('articulos')->where('categorias_id','=',$id)->get();
        return $articulos;
    }
    public static function getArticulo($codigo){
        $articulo=DB::table('articulos')->where('codigo','=',$codigo)->first();
        return $articulo;
    }
}
