<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prueba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prueba', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('Interno');
            $table->string('Conductor');
            $table->date('Fecha');
            $table->string('Estado');
            $table->integer('Sensor');
            $table->integer('Bruto');
            $table->integer('Gastos');
            $table->integer('Neto_Entregar');
            $table->integer('Diferencia');
            $table->longtext('Observaciones');
            $table->string('Foto');
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
        //
    }
}
