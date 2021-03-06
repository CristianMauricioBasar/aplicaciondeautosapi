<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiltrarporsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filtrarpors', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre', 14);
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
        Schema::dropIfExists('filtrarpors');
    }
}
