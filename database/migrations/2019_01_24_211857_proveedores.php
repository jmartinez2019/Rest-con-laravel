<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('proveedores', function (Blueprint $table) {
          $table->integer('id')->primary();
          $table->string('nombre');
          $table->string('apellido');
          $table->string('ciudad');
          $table->string('telefono');
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
          Schema::dropIfExists('proveedores');
    }
}
