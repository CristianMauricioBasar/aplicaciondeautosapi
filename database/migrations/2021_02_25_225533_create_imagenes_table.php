<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('titulo', 25);
          $table->string('imagen', 70);
          $table->text('descripcion');
          $table->Biginteger('auto_id')->unsigned();
          $table->foreign('auto_id')->references('id')->on('autos');
          $table->timestamp('creado')->useCurrent();
          $table->timestamp('actualizado')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagenes');
    }
}
