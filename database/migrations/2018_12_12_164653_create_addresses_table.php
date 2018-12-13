<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('id_estado');
            $table->string('estado');
            $table->integer('id_municipio');
            $table->string('municipio');
            $table->string('ciudad')->nullable();
            $table->string('zona')->nullable();
            $table->integer('cp');
            $table->string('asentamiento');
            $table->string('tipo');
            $table->engine = 'InnoDB';
        });
        Schema::table('addresses',function ($table) {
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
        Schema::dropIfExists('addresses');
    }
}
