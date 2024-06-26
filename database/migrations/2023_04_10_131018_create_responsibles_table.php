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
        Schema::create('responsibles', function (Blueprint $table) {
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
            $table->string('relative');
            $table->string('invoicing');
            $table->string('email');
            $table->string('cep');


            // $table->unsignedBigInteger('studend_id');
            // $table->foreign('studend_id')->references('id')->on('students');

            $table->unsignedBigInteger('creatoruser_id');
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('editoruser_id')->nullable();
            $table->foreign('editoruser_id')->references('id')->on('users');

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
        Schema::dropIfExists('responsibles');
    }
};
