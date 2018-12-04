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
            $table->increments('id');
            $table->integer('id_profile');

            $table->string('name', 32);
            $table->string('username', 32);
            $table->string('email', 320);
            $table->string('password', 64);
            $table->string('address', 50);
            $table->string('phone', 20);
            $table->string('username',20);

            // required for Laravel 4.1.26
            $table->string('remember_token', 100)->nullable();
        });
        Schema::table('users',function($table) {
            $table->foreign('id_profile')->references('id')->on('profile');
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
