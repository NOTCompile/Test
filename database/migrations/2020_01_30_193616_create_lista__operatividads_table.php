<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaOperatividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista__operatividads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_item');
            $table->string('componente');
            $table->string('estado_operatividad');
            $table->string('comentario_operatividad');

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
        Schema::dropIfExists('lista__operatividads');
    }
}
