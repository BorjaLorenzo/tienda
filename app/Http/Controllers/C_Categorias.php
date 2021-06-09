<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class C_Categorias extends Controller
{
    /**
     * Muestra todas las categorias
     *
     * @return void
     */
    public static function showCategorias(){
        $categorias=Categorias::getCategorias();
        return view('categorias',['categorias'=>$categorias]);
    }
}
