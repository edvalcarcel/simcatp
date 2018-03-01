<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGraficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('graficas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("mov_horno_id")->unsigned();
            $table->foreign("mov_horno_id")->references('id')->on('mov_hornos');
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
        Schema::dropIfExists('graficas');
    }
}
