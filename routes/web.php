<?php

Route::get('/', 'PagesController@Inicio')->name('Inicio');

//Producto
Route::get('/producto', 'PagesController@Producto')->name('Producto');

Route::get('/producto/{id_producto}', 'PagesController@Producto_Detalle')->name('producto.producto_detalle');

Route::get('/producto_agregar', 'PagesController@Producto_Agregar')->name('producto.producto_agregar');

Route::post('/producto_crear', 'PagesController@Producto_Crear')->name('producto.producto_crear');


//Cliente
Route::get('/cliente', 'PagesController@Cliente')->name('Cliente');


//Usuario
Route::get('/usuario', 'PagesController@Usuario')->name('Usuario');
