<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('dni');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('celular');
            $table->integer('celular_acompanate');
            $table->date('fecha_parto');
            $table->string('historia');
            $table->string('historia_familiar');
            $table->boolean('bienvenida');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('madres');
    }
}
