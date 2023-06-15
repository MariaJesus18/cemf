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
        Schema::create('launchs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('contract'); //idmodalidade
            // $table->foreign('contract')->references('id')->on('contracts');

            $table->foreignId('contract_id')->constrained('contracts')->onDeleteCascade('cascade');

            $table->unsignedBigInteger('student')->nullable(); //idstudent
            $table->foreign('student')->references('id')->on('students');

            $table->unsignedBigInteger('supplier')->nullable(); //idsupplier
            $table->foreign('supplier')->references('id')->on('suppliers');

            $table->unsignedBigInteger('cash_accounts')->nullable(); //idocashAccount
            $table->foreign('cash_accounts')->references('id')->on('cash_accounts');

            $table->unsignedBigInteger('type_releases')->nullable(); //idtype
            $table->foreign('type_releases')->references('id')->on('type_releases');

            $table->unsignedBigInteger('category')->nullable(); //idcategory
            $table->foreign('category')->references('id')->on('launch_categorys');

            $table->unsignedBigInteger('payment_methods')->nullable(); //idformapgto
            $table->foreign('payment_methods')->references('id')->on('payment_methods');

            $table->date('expiration')->nullable();
            $table->date('lowDate')->nullable();
            $table->unsignedBigInteger('originalValue')->nullable();
            $table->unsignedBigInteger('surcharge')->nullable();
            $table->boolean('discountType')->nullable();
            $table->unsignedBigInteger('discount')->nullable();
            $table->unsignedBigInteger('postingAmount')->nullable();
            $table->unsignedBigInteger('barcode')->nullable();
            $table->string('historico')->nullable();
            $table->string('installment')->nullable();

            $table->unsignedBigInteger('id_creatorUser')->nullable(); //id_creatorUser
            $table->foreign('id_creatorUser')->references('id')->on('users');

            $table->unsignedBigInteger('id_userChange')->nullable(); //id_userChange
            $table->foreign('id_userChange')->references('id')->on('users');

            $table->dateTime('dateCreated')->nullable();
            $table->dateTime('changeDate')->nullable();
            $table->boolean('status')->nullable(); //atiov | inativo

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
        Schema::dropIfExists('launchs');
    }
};
