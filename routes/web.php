<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inventario', function () {
    return view('inventario');
})->name('Inventario');

Route::get('producto', function () {
    return view('producto');
})->name('Producto');

Route::get('cliente', function () {
    return view('cliente');
})->name('Cliente   ');

//Route::view('Inventario', 'indice', [ 'id_producto' => 10]);

//Route::get('Inventario/{id_producto?}', function($id_producto = 'sin numero'){
//    return 'Estas en el Inventario del producto: '.$id_producto;
//})->where('id_producto', '[0-9]+');