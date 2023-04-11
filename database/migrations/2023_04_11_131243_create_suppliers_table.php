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
            $table->unsignedBigInteger('contract');//idcontract
            $table->foreign('contract')->references('id')->on('contracts');
           $table->string('typeHolder');
           $table->string('name');
           $table->unsignedBigInteger('cnpj');
           $table->unsignedBigInteger('cpf');
           $table->unsignedBigInteger('phone1');
           $table->unsignedBigInteger('phone2');
           $table->unsignedBigInteger('cep');
           $table->string('email');
           $table->string('street');
           $table->string('number');
           $table->string('neighborhood');
           $table->string('complement');
           $table->string('city');
           $table->string('uf');
           $table->string('observation');

           $table->integer('id_userChange')->constrained('users');
           $table->integer('id_creatorUser')->constrained('users');
           
           $table->dateTime('dateCreated');
           $table->dateTime('changeDate');
           $table->boolean('status'); //atiov | inativo
          
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
