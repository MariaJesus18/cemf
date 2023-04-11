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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->unsignedBigInteger('cnpj');
            $table->foreignId('responsible')->constrained('responsavels');
            $table->unsignedBigInteger('cpf');
            $table->unsignedBigInteger('phone1');
            $table->unsignedBigInteger('phone2');
            $table->unsignedBigInteger('cep');
            $table->string('street');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('city');
            $table->string('uf');
            $table->string('observation');
            $table->integer('id_creatorUser')->constrained('users');
            $table->integer('id_userChange')->constrained('users');
            $table->dateTime('dateCreated');
            $table->dateTime('changeDate');
            $table->boolean('status');
            
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
        Schema::dropIfExists('students');
    }
};
