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
    public static function getOfertas(){
        $ofertas=DB::table('articulos')->where('descuento','>',0)->get();
        return $ofertas;
    }
    public static function getDestacados(){
        $hoy=getdate();
        $fecha=''.$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"].'';
        $destacados=DB::table('articulos')->where('destacado','=',1)
        ->where('destacado_comienzo','<',$fecha)
        ->where('destacado_final','>',$fecha)->get();
        return $destacados;
    }
    public static function getNuevos(){
        $hoy=getdate();
        $fecha=''.$hoy["year"].'-'.$hoy["mon"].'-'.$hoy["mday"].' '.$hoy["hours"].':'.$hoy["minutes"].':'.$hoy["seconds"].'';
        $nuevos=DB::table('articulos')->where('created_at','<',$fecha)->orderBy('created_at')->get();
        return $nuevos;
    }
}
