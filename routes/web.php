<?php

Route::get('/', 'PagesController@Inicio')->name('Inicio');

Route::get('/producto', 'PagesController@Producto')->name('Producto');

Route::get('/producto/{id_producto}', 'PagesController@Producto_Detalle')->name('producto.detalle');

Route::get('/agregar_producto ', 'PagesController@Producto_Agregar')->name('producto.agregar');

Route::get('/cliente', 'PagesController@Cliente')->name('Cliente');

Route::get('/usuario', 'PagesController@Usuario')->name('Usuario');
