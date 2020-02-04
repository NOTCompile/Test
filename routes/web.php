<?php

Route::get('/', 'PagesController@Login')->name('Login');

Route::get('/inicio', 'PagesController@Inicio')->name('Inicio');

Route::get('/joshua', 'PagesController@Joshua')->name('Joshua');

//Producto
Route::get('/producto', 'PagesController@Producto')->name('Producto');

Route::get('/producto/{id?}', 'PagesController@Producto_Detalle')->name('producto.producto_detalle');

Route::get('/producto_agregar', 'PagesController@Producto_Agregar')->name('producto.producto_agregar');

Route::post('/producto_crear', 'PagesController@Producto_Crear')->name('producto.producto_crear');

Route::get('/producto_editar/{id?}', 'PagesController@Producto_Editar')->name('producto.producto_editar');

Route::put('/producto_editar/{id?}', 'PagesController@Producto_Actualizar')->name('producto.producto_actualizar');

Route::delete('/producto_eliminar/{id?}', 'PagesController@Producto_Eliminar')->name('producto.producto_eliminar');


//Cliente
Route::get('/cliente', 'PagesController@Cliente')->name('Cliente');

Route::get('/cliente/{id?}', 'PagesController@Cliente_Detalle')->name('cliente.cliente_detalle');

Route::get('/cliente_agregar', 'PagesController@Cliente_Agregar')->name('cliente.cliente_agregar');

Route::post('/cliente_crear', 'PagesController@Cliente_Crear')->name('cliente.cliente_crear');

Route::get('/cliente_editar/{id?}', 'PagesController@Cliente_Editar')->name('cliente.cliente_editar');

Route::put('/cliente_editar/{id?}', 'PagesController@Cliente_Actualizar')->name('cliente.cliente_actualizar');

Route::delete('/cliente_eliminar/{id?}', 'PagesController@Cliente_Eliminar')->name('cliente.cliente_eliminar');


//Usuario
Route::get('/usuario', 'PagesController@Usuario')->name('Usuario');

Route::get('/usuario/{id?}', 'PagesController@Usuario_Detalle')->name('usuario.usuario_detalle');

Route::get('/usuario_agregar', 'PagesController@Usuario_Agregar')->name('usuario.usuario_agregar');

Route::post('/usuario_crear', 'PagesController@Usuario_Crear')->name('usuario.usuario_crear');

Route::get('/usuario_editar/{id}', 'PagesController@Usuario_Editar')->name('usuario.usuario_editar');

Route::put('/usuario_editar/{id?}', 'PagesController@Usuario_Actualizar')->name('usuario.usuario_actualizar');

Route::delete('/usuario_eliminar/{id?}', 'PagesController@Usuario_Eliminar')->name('usuario.usuario_eliminar');


