<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dagas', function (Blueprint $table) {
            $table->increments('id');
             $table->string('codigo');
              $table->string('seccion');
            $table->decimal('cod_daga');
            $table->string('grupo');
              $table->integer("grafica_id")->unsigned();
            $table->foreign("grafica_id")->references('id')->on('graficas')->onDelete('cascade');
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
        Schema::dropIfExists('dagas');
    }
}
