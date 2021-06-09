<?php

use App\Http\Controllers\C_Articulos;
use App\Http\Controllers\C_Categorias;
use App\Http\Controllers\C_User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return C_Articulos::showDestacados();
});
Route::get('/categorias', function () {
    return C_Categorias::showCategorias();
});
Route::get('/ps', function () {
    return C_Articulos::showArticulos(0,'suelos','Pinturas para suelo');
});
Route::get('/ppls', function () {
    return C_Articulos::showArticulos(1,'plasticas','Pinturas plasticas');
});
Route::get('/pf', function () {
    return C_Articulos::showArticulos(2,'fachada','Pinturas para fachadas');
});
Route::get('/pps', function () {
    return C_Articulos::showArticulos(3,'piscina','Pinturas para piscinas');
});
Route::get('/pm', function () {
    return C_Articulos::showArticulos(4,'madera','Pinturas para madera');
});
Route::get('/pmt', function () {
    return C_Articulos::showArticulos(5,'metal','Pinturas para metal');
});
Route::get('/pazu', function () {
    return C_Articulos::showArticulos(6,'azulejos','Pinturas para azulejos');
});
Route::get('/pesp', function () {
    return C_Articulos::showArticulos(7,'especiales','Pinturas especiales');
});
Route::get('/psp', function () {
    return C_Articulos::showArticulos(8,'spray','Pinturas en spray');
});
Route::get('/dis', function () {
    return C_Articulos::showArticulos(9,'disolventes','Disolventes');
});
Route::get('/info_articulo', function (Request $req) {
    return C_Articulos::infoArticulo($req->get('codigo'));
});
Route::get('/Ofertas', function () {
    return C_Articulos::showOfertas();
});
Route::get('/Destacados', function () {
    return C_Articulos::showDestacados();
});
Route::get('/Nuevos', function () {
    return C_Articulos::showNuevos();
});
// Route::post('/eliminarCarrito', function () {
   
// });
Route::get('/ajustes', function () {
   return C_User::showAjustes();
})->middleware('auth');
Route::get('/confirmarEliminar', function () {
    return C_User::showConfirmarEliminar();
 })->middleware('auth');
Route::get('/showModificar', function () {
    return C_User::showModificar();
})->middleware('auth');
Route::post('/modificar', function () {
    return C_User::modificar();
})->middleware('auth');


Route::resource('/carrito', 'CartController')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
