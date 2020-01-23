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
            $table->engine = 'InnoDB';
            $table->integer('idproductos');
            $table->string('imagen');
            $table->string('nombre');
            $table->string('empresa', 100);
            $table->integer('edad',2);
            $table->string('ubicacion');
            $table->enum('periocidad',['Anual','Bimestral']);
            $table->enum('tipo_producto', ['Motor', 'Generador', 'Motor y Generador']);
            $table->timestamp('fecha');
            $table->dateTime('hora_inicio');
            $table->dateTime('hora_fin');
            
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
