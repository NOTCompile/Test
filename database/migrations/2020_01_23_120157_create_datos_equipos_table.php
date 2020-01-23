<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_equipos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->integer('iddatos_equipo');
            $table->string('marca_motor', 50);
            $table->string('modelo_motor',50);
            $table->string('n_serie_motor',50);
            $table->string('potencia_motor',50);
            $table->string('marca_motor',50);
            $table->string('modelo_motor',50);
            $table->string('n_serie_generador',50);
            $table->string('potencia_generador',50);
            
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
        Schema::dropIfExists('datos_equipos');
    }
}
