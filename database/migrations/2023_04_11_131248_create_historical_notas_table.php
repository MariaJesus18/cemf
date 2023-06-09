<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historical_notas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_id')->nullable(); //idcontract
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->unsignedBigInteger('student_id')->nullable(); //idstudent
            $table->foreign('student_id')->references('id')->on('students');
            $table->unsignedBigInteger('school_id')->nullable(); //idschool
            $table->foreign('school_id')->references('id')->on('schools');
            $table->unsignedBigInteger('serie_id'); //idseries
            $table->foreign('serie_id')->references('id')->on('series');
            $table->unsignedBigInteger('period_id'); //idperiod
            $table->foreign('period_id')->references('id')->on('periods');
            $table->unsignedBigInteger('subject_id'); //idsubject
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->unsignedBigInteger('creatoruser_id'); //creatoruser_id
            $table->foreign('creatoruser_id')->references('id')->on('users');
            $table->unsignedBigInteger('year');
            $table->unsignedBigInteger('note');
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
        Schema::dropIfExists('historical_notas');
    }
};
