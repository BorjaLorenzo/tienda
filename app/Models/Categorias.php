<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorias extends Model
{
    /**
     * Devuelve una coleccion de las categorias
     *
     * @return void
     */
    public static function getCategorias(){
        $categorias=DB::table('categorias')->get();
        return $categorias;
    }
    /**
     * Devuelve una categoria en funcion al ID
     *
     * @param [int] $id
     * @return void
     */
    public static function getCategoria($id){
        $articulos=DB::table('categorias')->where('id','=',$id)->get();
        return $articulos;
    }
}
