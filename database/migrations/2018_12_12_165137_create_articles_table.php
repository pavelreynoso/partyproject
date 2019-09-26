<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('category_id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->double('price',10,2);
            $table->string('preparation_time');
            $table->boolean('approval');
            $table->smallInteger('discount');
            $table->timestamps();
            $table->softDeletes();
            $table->engine='InnoDB';
        });
        Schema::table('articles',function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('articles_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
