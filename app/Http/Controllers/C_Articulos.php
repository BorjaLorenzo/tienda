<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulos;

class C_Articulos extends Controller
{
    /**
     * Muestra los articulos de una categoria
     *
     * @param [string] $codigo
     * @param [int] $id
     * @param [string] $categoria
     * @param [string] $titulo
     * @return void
     */
    public static function showArticulos($codigo,$id,$categoria,$titulo){
        $articulos=Articulos::getArticulos($id);
        return view('articulos',['articulos'=>$articulos,'categoria'=>$categoria,'titulo'=>$titulo]);
    }
    /**
     * Muestra los articulos en oferta
     *
     * @return void
     */
    public static function showOfertas(){
        $articulos=Articulos::getOfertas();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Ofertas']);
    }
    /**
     * Muestra los articulos nuevos
     *
     * @return void
     */
    public static function showNuevos(){
        $articulos=Articulos::getNuevos();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Nuevos']);
    }
    /**
     * Muestra los productos desctados
     *
     * @return void
     */
    public static function showDestacados(){
        $articulos=Articulos::getDestacados();
        return view('articulos',['articulos'=>$articulos,'titulo'=>'Destacados']);
    }
    /**
     * Muestra toda la informacion de compra del producto seleccionado
     *
     * @param [string] $codigo
     * @return void
     */
    public static function infoArticulo($codigo){
        $articulo=Articulos::getArticulo($codigo);
        return view('info_articulo',['art'=>$articulo]);
    }
}
