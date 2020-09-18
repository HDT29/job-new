<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('phone_number');
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('status')->nullable();
            $table->string('language')->nullable();
            $table->string('code')->nullable()->index();
            $table->timestamp('time_code')->nullable();
            $table->integer('id_zone');
            $table->string('remember_token', 255)->nullable();
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
