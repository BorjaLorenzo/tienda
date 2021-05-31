<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;
use App\Models\Categorias;

class C_Articulos extends Controller
{
    public static function showArticulo($codigo,$categoria){
        $articulo=Articulos::getArticulo($codigo);
        return view('info_articulo',['art'=>$articulo,'categoria'=>$categoria]);
    }
}
