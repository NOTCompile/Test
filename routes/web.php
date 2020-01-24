<?php

Route::get('/', 'PagesController@Inicio');

Route::get('inventario', 'PagesController@Inventario')->name('Inventario');

Route::get('producto', 'PagesController@Producto')->name('Producto');

Route::get('cliente', 'PagesController@Cliente')->name('Cliente');

Route::get('usuario/{tipo_usuario1?}', 'PagesController@Usuario')->name('Usuario');



//Route::view('Inventario', 'indice', [ 'id_producto' => 10]);

//Route::get('Inventario/{id_producto?}', function($id_producto = 'sin numero'){
//    return 'Estas en el Inventario del producto: '.$id_producto;
//})->where('id_producto', '[0-9]+');