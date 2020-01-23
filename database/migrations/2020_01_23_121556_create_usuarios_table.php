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
            $table->engine = 'InnoDB';

            $table->integer('idusuario', 10);
            $table->string('nombre', 100);
            $table->enum('sexo', ['Femenino', 'Masculino']);
            $table->integer('edad', 2);
            $table->string('correo', 100);
            $table->enum('tipo_usuario', ['Administrador', 'Tecnico', 'Secretaria', 'Cleinte']);
            
            
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
