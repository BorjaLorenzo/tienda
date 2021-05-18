<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorias extends Model
{
    use HasFactory;

    public static function getRegistros(){
        return DB::table('categorias')->get();
    }
}
