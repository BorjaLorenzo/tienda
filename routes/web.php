<?php

use App\Models\Categorias;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('principal');
});
Route::get('/inicio', function () {
    return view('principal');
});
Route::get('/adm', function () {
    return view('menu-administrador');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registrarse', function () {
    return view('registrarse');
});
Route::get('/categoria-conf', function () {
    return view('categoria-conf');
});
Route::get('/añadir-categoria', function () {
    return view('añadir-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::get('/eliminar-categoria', function () {
    return view('eliminar-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::get('/editar-categoria', function () {
    return view('editar-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::get('/añadir-producto', function () {
    return view('añadir-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
Route::get('/eliminar-producto', function () {
    return view('eliminar-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
Route::get('/editar-producto', function () {
    return view('editar-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
Route::get('/tabla', function () {
    return view('tabla',['array'=>Categorias::getRegistros()]);
});