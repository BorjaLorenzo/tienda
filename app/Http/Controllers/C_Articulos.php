<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;

class C_Articulos extends Controller
{
    public static function showArticulos($id,$categoria,$titulo){
        $articulos=Articulos::getArticulos($id);
        return view('articulos',['articulos'=>$articulos,'categoria'=>$categoria,'titulo'=>$titulo]);
    }
    public static function showOfertas(){
        $articulos=Articulos::getOfertas();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Ofertas']);
    }
    public static function showNuevos(){
        $articulos=Articulos::getNuevos();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Nuevos']);
    }
    public static function showDestacados(){
        $articulos=Articulos::getDestacados();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Destacados']);
    }
    public static function infoArticulo($codigo){
        $articulo=Articulos::getArticulo($codigo);
        return view('info_articulo',['art'=>$articulo]);
    }
}
