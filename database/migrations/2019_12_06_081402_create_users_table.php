<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('apellidopat')->nullable();
            $table->string('apellidomat')->nullable();
            $table->string('calle')->nullable();
            $table->integer('numeroext')->nullable();
            $table->integer('numeroint')->nullable();
            $table->integer('cpostal')->nullable();
            $table->string('colonia')->nullable();
            $table->unsignedBigInteger('tipociud')->nullable();
            $table->foreign('tipociud')->references('id')->on('tipo_ciudadanos');
            $table->string('email', 50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
