<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorias extends Model
{
    public static function getCategorias(){
        $categorias=DB::table('categorias')->get();
        return $categorias;
    }
}
