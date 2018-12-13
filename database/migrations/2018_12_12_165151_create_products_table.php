<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provider_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('description');
            $table->double('price',10,2);
            $table->time('preparation_time');
            $table->boolean('approval');
            $table->integer('discount');
            $table->integer('quantity_available')->unsigned();
            $table->timestamps();
            $table->engine='InnoDB';
        });
        Schema::table('products',function ($table) {
            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('category_id')->references('id')->on('services_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
