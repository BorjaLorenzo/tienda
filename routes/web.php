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
Route::any('/', function () {
    return view('principal');
});
Route::any('/inicio', function () {
    return view('principal');
});
Route::any('/adm', function () {
    return view('menu-administrador');
});
Route::any('/login', function () {
    return view('login');
});
Route::any('/registrarse', function () {
    return view('registrarse');
});
Route::any('/categorias', function () {
    $categorias=Categorias::getCategorias();
    return view('categorias',['categorias'=>$categorias]);
});
Route::any('/categoria-conf', function () {
    return view('categoria-conf');
});
Route::any('/añadir-categoria', function () {
    return view('añadir-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::any('/eliminar-categoria', function () {
    return view('eliminar-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::any('/editar-categoria', function () {
    return view('editar-categoria',['titulo'=>'Categorias','seccion'=>'categoria']);
});
Route::any('/añadir-producto', function () {
    return view('añadir-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
Route::any('/eliminar-producto', function () {
    return view('eliminar-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
Route::any('/editar-producto', function () {
    return view('editar-producto',['titulo'=>'Productos','seccion'=>'producto']);
});
// Route::any('/tabla', function () {
//     return view('tabla',['array'=>Categorias::getRegistros()]);
// });