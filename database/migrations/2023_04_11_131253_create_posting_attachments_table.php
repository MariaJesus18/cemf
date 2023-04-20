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
        Schema::create('posting_attachments', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('launch'); //idlancamentp
            // $table->foreign('launch')->references('id')->on('launchs');
            $table->string('title');
            $table->string('file');
            $table->dateTime('dateInclusion');
            $table->unsignedBigInteger('id_userCreator');
            $table->foreign('id_userCreator')->references('id')->on('users');

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
        Schema::dropIfExists('posting_attachments');
    }
};
