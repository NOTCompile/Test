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
            $table->varchar('codigo_item');
            $table->varchar('componente');
            $table->varchar('estado_operatividad');
            $table->varchar('comentario_operatividad');

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
