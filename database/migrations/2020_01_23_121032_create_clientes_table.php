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
            $table->engine = 'InnoDB';

            $table->integer('idcliente');
            $table->string('nombre', 100);
            $table->string('empresa', 100);
            $table->integer('edad',2);
            $table->enum('sexo', ['Femenino','Masculino']);
            $table->string('correo', 100);
            $table->string('direccion', 250);
            $table->integer('n_celular', 9);
            $table->integer('n_telefono', 9);  

            $table->bigIncrements('id');
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
