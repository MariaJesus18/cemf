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
        Schema::create('contract_disciplines', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('contract_id');
            $table->foreign('contract_id')->references('id')->on('contracts');

            $table->bigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            
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
        Schema::dropIfExists('contract_disciplines');
    }
};
