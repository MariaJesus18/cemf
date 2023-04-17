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
            $table->unsignedBigInteger('contract'); //idcontract
            $table->foreign('contract')->references('contract_id')->on('contracts');
            $table->unsignedBigInteger('student'); //idstudent
            $table->foreign('student')->references('id')->on('students');
            $table->unsignedBigInteger('school'); //idschool
            $table->foreign('school')->references('id')->on('schools');
            $table->unsignedBigInteger('series'); //idseries
            $table->foreign('series')->references('id')->on('series');
            $table->unsignedBigInteger('period'); //idperiod
            $table->foreign('period')->references('id')->on('periods');
            $table->unsignedBigInteger('subject'); //idsubject
            $table->foreign('subject')->references('id')->on('subjects');
            $table->unsignedBigInteger('id_userCreator'); //id_userCreator
            $table->foreign('id_userCreator')->references('id')->on('users');
            $table->unsignedBigInteger('year');
            $table->dateTime('creationDate');
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
