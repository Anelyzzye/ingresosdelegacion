<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('diaingreso');
            $table->unsignedBigInteger('citas_id')->nullable();
            $table->foreign('citas_id')->references('id')->on('citas');
            $table->unsignedBigInteger('tipotr_id')->nullable();
        
            $table->foreign('tipotr_id')->references('id')->on('tipotramites');
            $table->unsignedBigInteger('porcentaje_id')->nullable();
            $table->foreign('porcentaje_id')->references('id')->on('porcentaje_donados');
            $table->integer('total')->nullable();
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
        Schema::dropIfExists('ingresos');
    }
}
