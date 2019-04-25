<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unsigned();
            $table->integer('article_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->dateTimeTz('delivery_time');
            $table->string('description');
            $table->string('status');
            $table->engine='InnoDB';
            $table->timestamps();
        });
        Schema::table('order_article',function ($table) {
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_article');
    }
}
