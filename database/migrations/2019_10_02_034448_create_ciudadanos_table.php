<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCiudadanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres');
            $table->string('apellidopat');
            $table->string('apellidomat');
            $table->string('calle');
            $table->integer('numeroext');
            $table->integer('numeroint')->nullable();
            $table->integer('cpostal');
            $table->string('colonia');
            $table->string('email', 50)->unique()->nullable();
            $table->string('password', 255)->nullable();
            $table->unsignedBigInteger('tipociudadanos_id')->nullable();
            $table->foreign('tipociudadanos_id')->references('id')->on('tipo_ciudadanos');
            $table->boolean('status');
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
        Schema::dropIfExists('ciudadanos');
    }
}
