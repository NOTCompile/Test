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
            $table->string('codigo_producto');
            $table->string('imagen_producto');
            $table->string('nombre_producto');
            $table->string('empresa_producto');
            $table->string('ubicacion_producto');
            $table->string('periocidad_producto');
            $table->string('tipo_producto');
            $table->string('celular_producto');
            $table->string('hora_inicio_producto');
            $table->string('hora_fin_producto');
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
