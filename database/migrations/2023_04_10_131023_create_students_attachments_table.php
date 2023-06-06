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
        Schema::create('students_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student'); //idstudent
            $table->foreign('student')->references('id')->on('students');
            $table->string('title');
            $table->string('file');
            $table->unsignedBigInteger('creatoruser_id'); //idid_userCreator
            $table->foreign('creatoruser_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('students_attachments');
    }
};
