<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoCv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_cv', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('info_name');
            $table->string('avatar');
            $table->string('info_position');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('facebook');
            $table->string('gender');
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
        Schema::dropIfExists('info_cv');
    }
}
