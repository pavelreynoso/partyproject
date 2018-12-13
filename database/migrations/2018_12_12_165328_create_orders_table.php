<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->double('total_price',13,2);
            $table->integer('payment_method_id')->unsigned();
            $table->string('status');
            $table->integer('phone');
            $table->integer('id_estado');
            $table->string('estado');
            $table->integer('id_municipio');
            $table->string('municipio');
            $table->string('ciudad')->nullable();
            $table->string('zona')->nullable();
            $table->integer('cp');
            $table->string('asentamiento');
            $table->string('tipo');
            $table->dateTimeTz('ordered_at');
            $table->dateTimeTz('delivery_date');
            $table->engine = 'InnoDB';
            $table->timestamps();
        });
        Schema::table('orders',function ($table) {
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
