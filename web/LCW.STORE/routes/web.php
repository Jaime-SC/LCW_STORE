<?php

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
Route::view("/","home")->name("home");

Route::view("/administrar_productos", "administrar_productos")->name("administrar_productos");

Route::view("/inventario", "inventario")->name("inventario");

Route::view("/proveedores", "proveedores")->name("proveedores");

Route::view("/envios", "envios")->name("****");