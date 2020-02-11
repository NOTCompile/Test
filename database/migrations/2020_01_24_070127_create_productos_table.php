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
            $table->string('codigo_producto',10);            
            $table->string('nombre_producto',200);
            $table->string('empresa_producto',50);
            $table->string('ubicacion_producto',200);
            $table->string('periocidad_producto',20);
            $table->string('tipo_producto',20);
            $table->integer('celular_producto');
            $table->time('hora_inicio_producto')->nullable();
            $table->time('hora_fin_producto')->nullable();
            $table->string('imagen_producto',200)->nullable();

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
        Schema::dropIfExists('productos');
    }
}
