<?php

use App\Http\Controllers\C_Articulos;
use App\Models\Articulos;
use App\Models\Categorias;
use Illuminate\Http\Request;
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
    $categorias=Categorias::getCategorias();
    return view('categorias',['categorias'=>$categorias]);
});
Route::any('/adm', function () {
    return view('menu-administrador');
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
Route::any('/ps', function () {
    $articulos=Articulos::getArticulos(0);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'suelo','titulo'=>'Pinturas para suelo']);
});
Route::any('/ppls', function () {
    $articulos=Articulos::getArticulos(1);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'plasticas','titulo'=>'Pinturas Plasticas']);
});
Route::any('/pf', function () {
    $articulos=Articulos::getArticulos(2);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'fachada','titulo'=>'Pinturas para fachadas']);
});
Route::any('/pps', function () {
    $articulos=Articulos::getArticulos(3);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'piscina','titulo'=>'Pinturas para piscinas']);
});
Route::any('/pm', function () {
    $articulos=Articulos::getArticulos(4);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'madera','titulo'=>'Pinturas para madera']);
});
Route::any('/pmt', function () {
    $articulos=Articulos::getArticulos(5);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'metal','titulo'=>'Pinturas para metal']);
});
Route::any('/pazu', function () {
    $articulos=Articulos::getArticulos(6);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'azulejos','titulo'=>'Pinturas para azulejos']);
});
Route::any('/pesp', function () {
    $articulos=Articulos::getArticulos(7);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'especiales','titulo'=>'Pinturas especiales']);
});
Route::any('/psp', function () {
    $articulos=Articulos::getArticulos(8);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'spray','titulo'=>'Pinturas en spray']);
});
Route::any('/dis', function () {
    $articulos=Articulos::getArticulos(9);
    return view('articulos',['articulos'=>$articulos,'categoria'=>'disolventes','titulo'=>'Disolventes']);
});
Route::any('/info_articulo', function (Request $req) {
    $articulo=Articulos::getArticulo($req->get('codigo'));
    return view('info_articulo',['art'=>$articulo]);
});
Route::any('/Ofertas', function () {
    $ofertas=Articulos::getOfertas();
    return view('articulos',['articulos'=>$ofertas,'titulo'=>'Ofertas']);
});
Route::any('/Destacados', function () {
    $ofertas=Articulos::getDestacados();
    return view('articulos',['articulos'=>$ofertas,'titulo'=>'Destacados']);
});
Route::any('/Nuevos', function () {
    $nuevos=Articulos::getNuevos();
    return view('articulos',['articulos'=>$nuevos,'titulo'=>'Nuevos']);
});
Route::resource('/carrito', 'CartController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
