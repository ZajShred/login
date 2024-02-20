<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\cliente\CatalogoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-info', [LocationController::class,'getUserInfo']);
Route::view('/cliente/catalogo','/cliente.catalogo');
Route::view('/cliente/detalle','/cliente.detalle');

Route::get('/clientes/productos',[CatalogoController::class, 'mostrarProductos']);
Route::get('/clientes/productos/detalle/{id}',[CatalogoController::class,'detalleProducto']);
