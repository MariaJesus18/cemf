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
          
            $table->unsignedBigInteger('cpf');
            $table->unsignedBigInteger('telephone1');
            $table->unsignedBigInteger('telephone2');
            $table->unsignedBigInteger('cep');
            $table->string('road');
            $table->string('number');
            $table->string('neighborhood');
            $table->string('complement');
            $table->string('city');
            $table->string('uf');
            $table->string('observation');
            $table->string('email');

            $table->unsignedBigInteger('creatoruser_id');
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('editoruser_id')->nullable();
            $table->foreign('editoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('responsible')->nullable();
            $table->foreign('responsible')->references('id')->on('responsibles');

            $table->boolean('status');

            $table->timestamps();
            $table->softDeletes();
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
