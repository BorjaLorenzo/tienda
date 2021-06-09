<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class C_User extends Controller
{
    /**
     * Muestra los ajustes del usuario
     *
     * @return void
     */
    public static function showAjustes(){
        return view("configuracion");
    }
    /**
     * Muestra un mensaje de confirmacion antes de eliminar el usuario
     *
     * @return void
     */
    public static function showConfirmarEliminar(){
        return view('confirmarEliminar');
    }
    /**
     * Muestra el apartado de modificar los datos del usuario
     *
     * @return void
     */
    public static function showModificar(){
        $usuario=Auth::id();
        $datos=User::getUsuario($usuario);
        return view('showModificar',['datos'=>$datos]);
    }
    /**
     * Realiza la validacion y la modificacion del os datos del usuario
     *
     * @param Request $request
     * @return void
     */
    public static function modificar(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'usuario' => ['required','string','max:255'],
            'apellidos' => ['required','string','max:255'],
            'dni' => ['required','string','max:255'],
            'direccion' => ['required','string','max:255'],
            'provincia' => ['required','string','max:255'],
            'poblacion' => ['required','string','max:255'],
            'cp' => ['required','digits_between:0,5'],
            'telefono' => ['required','string','max:255']
        ]);
        if ($validator->fails()) {
            return redirect('showModificar')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            User::modUsuario($request,Auth::id());
            return redirect("ajustes");
        }
    }
    /**
     * Elimina al usuario
     *
     * @param Request $request
     * @return void
     */
    public static function eliminar(Request $request){
        $usuario=User::findOrFail(Auth::id());
        $usuario->delete();
        return redirect('/');
    }
}
