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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_id')->default(1);//temporário
            $table->foreign('contract_id')->references('id')->on('contracts');
            $table->string('typeHolder');
            $table->string('name');
            $table->unsignedBigInteger('cnpj');
            $table->unsignedBigInteger('cpf');
            $table->unsignedBigInteger('telephone1');
            $table->unsignedBigInteger('telephone2');
            $table->unsignedBigInteger('cep');
            $table->string('email');
            $table->string('road');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('city');
            $table->string('uf');
            $table->string('observation');

            $table->boolean('status')->default(true); //atiov | inativo

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
        Schema::dropIfExists('suppliers');
    }
};
