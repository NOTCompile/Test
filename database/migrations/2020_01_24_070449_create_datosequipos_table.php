<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosequiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosequipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_equipo');
            $table->string('marca_motor');
            $table->string('modelo_motor');
            $table->string('nserie_motor');
            $table->string('potencia_motor');
            $table->string('marca_generador');
            $table->string('modelo_generador');
            $table->string('nserie_generador');
            $table->string('potencia_generador');
            
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
        Schema::dropIfExists('datosequipos');
    }
}
