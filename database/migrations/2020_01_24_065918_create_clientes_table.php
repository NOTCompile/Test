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
            $table->string('codigo_cliente');
            $table->string('nombre_cliente',100);
            $table->string('sexo_cliente',20);
            $table->string('empresa_cliente',100);
            $table->integer('edad_cliente')->nullable();
            $table->string('correo_cliente',100)->nullable();
            $table->string('direccion_cliente',200)->nullable();
            $table->integer('celular_cliente');
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
        Schema::dropIfExists('clientes');
    }
}
