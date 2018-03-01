<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovHornosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mov_hornos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("tipo_mov_horno_id")->unsigned();
            $table->foreign("tipo_mov_horno_id")->references('id')->on('tipo_mov_hornos');
            $table->integer("horno_id")->unsigned();
            $table->foreign("horno_id")->references('id')->on('hornos');
             $table->date('fecha_inicio');
             $table->date('fecha_fin');
            $table->dateTime('fecha_inicio_hora');
             $table->dateTime('fecha_fin_hora');
              $table->integer("id_cargue")->nullable();

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
        Schema::dropIfExists('mov_hornos');
    }
}
