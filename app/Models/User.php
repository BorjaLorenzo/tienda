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

    public static function getUsuario($id)
    {
        return DB::table('users')->where('id', '=', $id)->get();
    }
    public static function delUsuario($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
    }
    public static function modUsuario($arr,$id)
    {
        DB::table('users')->where('id', '=', $id)->update([
            'name' => $arr->name,
            'email' => $arr->email,
            'password' => Hash::make($arr->password),
            'usuario' => $arr->usuario,
            'telefono' => $arr->telefono,
            'apellidos' => $arr->apellidos,
            'nif' => $arr->nif,
            'direccion' => $arr->direccion,
            'cp' => $arr->cp,
            'poblacion' => $arr->poblacion,
            'provincia' => $arr->provincia
        ]);
    }
}
