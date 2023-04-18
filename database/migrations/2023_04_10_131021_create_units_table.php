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
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cnpj');
            $table->text('observation');
            $table->string('cpf');
            $table->string('telephone1');
            $table->string('telephone2');
            $table->string('road');
            $table->string('number');
            $table->string('neighborhood');
            $table->text('complement');
            $table->text('city');
            $table->text('state');

            $table->unsignedBigInteger('responsible_id');
            $table->foreign('responsible_id')->references('id')->on('responsibles');

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
        Schema::dropIfExists('units');
    }
};
