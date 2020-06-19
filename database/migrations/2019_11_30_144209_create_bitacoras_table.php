<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ingresos_id')->nullable();
            $table->foreign('ingresos_id')->references('id')->on('ingresos');
            $table->unsignedBigInteger('egresos_id')->nullable();
            $table->foreign('egresos_id')->references('id')->on('egresos');
            $table->integer('saldofinal')->nullable();
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
        Schema::dropIfExists('bitacoras');
    }
}
