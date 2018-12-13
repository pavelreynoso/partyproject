<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_methods_id')->unsigned();
            $table->string('card_name',50);
            $table->string('card_number',20);
            $table->date('expiration_date');
            $table->timestamps();
            $table->engine='InnoDB';
        });
        Schema::table('cards',function ($table) {
            $table->foreign('payment_methods_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
