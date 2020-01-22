<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('usuario', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('idusuario');
		    $table->string('nombre', 50);
		    $table->string('apellidos', 50);
		    $table->string('sexo', 1);
		    $table->integer('edad');
		    $table->string('correo', 100);
		    $table->string('tipo_usuario', 20);
		    
		    $table->primary('idusuario', 'tipo_usuario');
		
		    $table->timestamps();
		
		});

		Schema::create('cliente', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('idcliente');
		    $table->string('nombre', 50);
		    $table->string('apellidos', 50);
		    $table->string('empresa', 50);
		    $table->integer('edad');
		    $table->string('correo', 100);
		    $table->string('direccion', 250);
		    $table->integer('n_celular');
		    $table->integer('n_telefono');
		    
		    $table->primary('idcliente', 'empresa');
		
		    $table->timestamps();
		
		});

		Schema::create('productos', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('idproductos');
		    $table->string('imagen', 250);
		    $table->string('nombre', 100);
		    $table->string('empresa', 100)->unsigned();
		    $table->string('ubicacion', 250);
		    $table->string('periocidad', 20);
		    $table->string('tipo_producto', 50);
		    $table->dateTime('hora_inicio');
		    $table->dateTime('hora_fin');
		    $table->integer('idcliente')->unsigned();
		    $table->integer('idusuario')->unsigned();
		    
		    $table->primary('idproductos', 'idcliente', 'idusuario', 'empresa', 'tipo_producto');
		
		    $table->index('idusuario','fk_productos_usuario_idx');
		    $table->index('idcliente','fk_cliente_cliente_idx');
		    $table->index('empresa','fk_productos_cliente_idx');
		
		    $table->foreign('idusuario')
		        ->references('idusuario')->on('usuario');
		
		    $table->foreign('idcliente')
		        ->references('idcliente')->on('cliente');
		
		    $table->foreign('empresa')
		        ->references('empresa')->on('cliente');
		
		    $table->timestamps();
		
		});

		Schema::create('datos_equipo', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('iddatos_equipo');
		    $table->string('motor', 50)->unsigned();
		    $table->string('marca_motor', 50)->nullable();
		    $table->string('modelo_motor', 50)->nullable();
		    $table->string('n_serie_motor', 50)->nullable();
		    $table->string('potencia_motor', 50)->nullable();
		    $table->string('generador', 50)->unsigned();
		    $table->string('marca_generador', 50)->nullable();
		    $table->string('modelo_generador', 50)->nullable();
		    $table->string('n_serie_generador', 50)->nullable();
		    $table->string('potencia_generador', 50)->nullable();
		    $table->integer('n_mantenimientos');
		    
		    $table->primary('iddatos_equipo', 'n_mantenimientos', 'generador', 'motor');
		
		    $table->index('motor','fk_datos_equipo_productos_idx');
		    $table->index('generador','fk_datos_equipo_productos_idx1');
		
		    $table->foreign('generador')
		        ->references('tipo_producto')->on('productos');
		
		    $table->foreign('motor')
		        ->references('tipo_producto')->on('productos');
		
		    $table->timestamps();
		
		});

		Schema::create('mantenimiento', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('n_mantenimiento')->unsigned();
		    $table->integer('checklist_operatividad');
		    $table->integer('checklist_mtto');
		    
		    $table->primary('n_mantenimiento', 'checklist_operatividad', 'checklist_mtto');
		
		    $table->foreign('n_mantenimiento')
		        ->references('n_mantenimientos')->on('datos_equipo');
		
		    $table->timestamps();
		
		});

		Schema::create('checklist_operatividad', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('idchecklist_operatividad')->unsigned();
		    $table->decimal('item', 5, 1);
		    $table->string('componente', 50);
		    $table->string('comentarios', 250)->nullable();
		    
		    $table->primary('idchecklist_operatividad');
		
		    $table->foreign('idchecklist_operatividad')
		        ->references('checklist_operatividad')->on('mantenimiento');
		
		    $table->timestamps();
		
		});

		Schema::create('checklist_mtto', function(Blueprint $table) {
		    $table->engine = 'InnoDB';
		
		    $table->integer('idchecklist_mtto')->unsigned();
		    $table->decimal('item', 5, 1);
		    $table->string('componente', 50);
		    $table->string('comentarios', 50)->nullable();
		    
		    $table->primary('idchecklist_mtto');
		
		    $table->foreign('idchecklist_mtto')
		        ->references('checklist_mtto')->on('mantenimiento');
		
		    $table->timestamps();
		
		});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::drop('checklist_mtto');
		Schema::drop('checklist_operatividad');
		Schema::drop('mantenimiento');
		Schema::drop('datos_equipo');
		Schema::drop('productos');
		Schema::drop('cliente');
		Schema::drop('usuario');

    }
}
