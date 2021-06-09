<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_User extends Controller
{
    public static function showAjustes(){
        return view("configuracion");
    }
    public static function showConfirmarEliminar(){
        return view('confirmarEliminar');
    }
    public static function showModificar(){
        $usuario=Auth::id();
        $datos=User::getUsuario($usuario);
        return view('showModificar',['datos'=>$datos]);
    }
    public static function modificar($valores){
        // User::modUsuario($valores,Auth::id());
        return view("test",['valor'=>$valores]);
    }
}
