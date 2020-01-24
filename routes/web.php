<?php

Route::get('/', 'PagesController@Inicio');

Route::get('inventario', 'PagesController@Inventario')->name('Inventario');

Route::get('producto', 'PagesController@Producto')->name('Producto');

Route::get('cliente', 'PagesController@Cliente')->name('Cliente');

Route::get('usuario', 'PagesController@Usuario')->name('Usuario');
