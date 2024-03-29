<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('accesorios',function (Blueprint $table){
      $table->id();
      $table->String('nombre');
      $table->String('descripcion');
      $table->integer('precio');
      $table->integer('cantidad');
      $table->foreignId('categoria')->constrained();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accesorios');
    }
};
