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
        Schema::create('cash_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bankCode');
            $table->unsignedBigInteger('agency');
            $table->unsignedBigInteger('checkingAccount');
            $table->unsignedBigInteger('typecc');
            $table->string('bankName');
            // $table->string('title');
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
        Schema::dropIfExists('cash_accounts');
    }
};
