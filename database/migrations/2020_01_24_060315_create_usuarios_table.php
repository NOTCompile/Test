<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_usuario');
            $table->string('imagen_usuario',200)->nullable();
            $table->string('nombre_usuario',150);
            $table->string('sexo_usuario',20);
            $table->integer('edad_usuario');
            $table->string('correo_usuario',200);
            $table->string('contraseña_usuario');
            $table->string('tipo_usuario',30);
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
        Schema::dropIfExists('usuarios');
    }
}
