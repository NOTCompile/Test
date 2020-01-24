<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->string('nombre_producto');
            $table->string('empresa_prodcuto');
            $table->string('ubicacion_producto');
            $table->string('periocidad');
            $table->string('tipo_producto');
            $table->string('celular');
            $table->string('hora_inicio');
            $table->string('hora_fin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
