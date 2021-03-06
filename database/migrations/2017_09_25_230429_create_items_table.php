<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
             $table->string('codigo');
              $table->string('color_hilo');
            $table->decimal('hilo');
             $table->string('seccion');
            $table->decimal('daga');
            $table->string('ubicacion');
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
        Schema::dropIfExists('items');
    }
}
