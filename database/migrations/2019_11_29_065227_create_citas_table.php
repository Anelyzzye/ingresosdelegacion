<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable(); 
            $table->date('dia')->nullable();
            $table->time('hora')->nullable();
            $table->unsignedBigInteger('tipotramites_id')->nullable();
            $table->foreign('tipotramites_id')->references('id')->on('tipotramites');
            $table->boolean('statuscitas')->default(0);
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
        Schema::dropIfExists('citas');
    }
}
