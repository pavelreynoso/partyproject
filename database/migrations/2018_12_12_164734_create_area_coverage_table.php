<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaCoverageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_coverage', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
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
            $table->timestamps();
        });
        Schema::table('area_coverage',function ($table) {
            $table->foreign('provider_id')->references('id')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_coverage');
    }
}
