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


Route::get('/', [C_Articulos::class, 'showDestacados']);
Route::get('/categorias', [C_Categorias::class, 'showCategorias']);
Route::get('/Ofertas', [C_Articulos::class, 'showOfertas']);
Route::get('/Destacados', [C_Articulos::class, 'showDestacados']);
Route::get('/Nuevos', [C_Articulos::class, 'showNuevos']);
Route::get('/confirmarEliminar', [C_User::class, 'showConfirmarEliminar'])->middleware('auth');
Route::get('/showModificar', [C_User::class, 'showModificar'])->middleware('auth');
Route::get('/ajustes', [C_User::class, 'showAjustes'])->middleware('auth');
Route::post('/modificar', [C_User::class, 'modificar'])->middleware('auth');
Route::post('/eliminar', [C_User::class, 'eliminar'])->middleware('auth');

Route::get('/{codigo}/{id}/{categoria}/{titulo}', 'C_Articulos@showArticulos');
Route::get('info_articulo/{codigo}', 'C_Articulos@infoArticulo');

Route::resource('/carrito', 'CartController')->middleware('auth');
Route::post('/vaciar', 'CartController@clear')->middleware('auth');
Route::post('/addArticulo', 'CartController@store')->middleware('auth');
Route::post('/eliminarArticuloCarrito', 'CartController@destroy')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
