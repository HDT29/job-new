<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InforWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infor_work', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('desired_jobs');
            $table->string('career_job');
            $table->string('level');
            $table->integer('salary_present');
            $table->integer('salary_desires');
            $table->string('position');
            $table->integer('user_id');
            $table->string('zone');
            $table->string('career');
            $table->date('study_time');
            $table->string('school_name');
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
        Schema::dropIfExists('infor_work');
    }
}
