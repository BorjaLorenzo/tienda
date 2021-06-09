<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articulos extends Model
{
    /**
     * Devuelve los articulos de una categoria
     *
     * @param [int] $id
     * @return void
     */
    public static function getArticulos($id){
        $articulos=DB::table('articulos')->where('categorias_id','=',$id)->paginate(4);
        return $articulos;
    }
    /**
     * Devuelve un articulo en funcion del codigo de articulo
     *
     * @param [string] $codigo
     * @return void
     */
    public static function getArticulo($codigo){
        $articulo=DB::table('articulos')->where('codigo','=',$codigo)->first();
        return $articulo;
    }
    /**
     * Devuelve un articulo en funcion de su ID
     *
     * @param [int] $id
     * @return void
     */
    public static function getArticuloById($id){
        $articulo=DB::table('articulos')->where('id','=',$id)->first();
        return $articulo;
    }
    /**
     * Devuelve una coleccion de los articulos en oferta
     *
     * @return void
     */
    public static function getOfertas(){
        $ofertas=DB::table('articulos')->where('descuento','>',0)->paginate(3);
        return $ofertas;
    }
    /**
     * Devuelve una coleccion de los articulos destacados
     *
     * @return void
     */
    public static function getDestacados(){
        $hoy=getdate();
        $fecha=''.$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"].'';
        $destacados=DB::table('articulos')->where('destacado','=',1)
        ->where('destacado_comienzo','<',$fecha)
        ->where('destacado_final','>',$fecha)->paginate(6);
        return $destacados;
    }
    /**
     * Devuelve una coleccion de los articulos nuevos
     *
     * @return void
     */
    public static function getNuevos(){
        $hoy=getdate();
        $fecha=''.$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"].' '.$hoy["hours"].':'.$hoy["minutes"].':'.$hoy["seconds"].'';
        $nuevos=DB::table('articulos')->where('created_at','<',$fecha)->orderBy('created_at')->paginate(6);
        return $nuevos;
    }
}
