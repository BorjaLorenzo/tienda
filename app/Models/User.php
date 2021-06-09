<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'usuario',
        'apellidos',
        'nif',
        'direccion',
        'provincia',
        'poblacion',
        'cp',
        'telefono',
        'usuario'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Devuelve el usuario con el ID indicado por parametro
     *
     * @param [int] $id
     * @return void
     */
    public static function getUsuario($id)
    {
        return DB::table('users')->where('id', '=', $id)->get();
    }
    /**
     * Borra el usuario con el ID indicado por parametro
     *
     * @param [int] $id
     * @return void
     */
    public static function delUsuario($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }
    /**
     * Modifica el usuario en funcion al id, recibe una coleccion con los nuevos datos
     *
     * @param [Request] $arr
     * @param [int] $id
     * @return void
     */
    public static function modUsuario($arr,$id)
    {
        DB::table('users')->where('id', '=', $id)->update([
            'name' => $arr->input('name'),
            'email' => $arr->input('email'),
            'password' => Hash::make($arr->input('password')),
            'usuario' => $arr->input('usuario'),
            'telefono' => $arr->input('telefono'),
            'apellidos' => $arr->input('apellidos'),
            'nif' => $arr->input('dni'),
            'direccion' => $arr->input('direccion'),
            'cp' => $arr->input('cp'),
            'poblacion' => $arr->input('poblacion'),
            'provincia' => $arr->input('provincia')
        ]);
    }
}
