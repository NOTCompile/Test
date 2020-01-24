<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo_cliente');
            $table->string('nombre_cliente');
            $table->string('sexo_cliente');
            $table->string('empresa_cliente');
            $table->integer('edad_cliente');
            $table->string('correo_cliente');
            $table->string('direccion_cliente');
            $table->string('celular_cliente');
            $table->integer('telefono_cliente'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
