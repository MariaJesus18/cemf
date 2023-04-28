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

            $table->unsignedBigInteger('student'); //idstudent
            $table->foreign('student')->references('id')->on('students');

            $table->unsignedBigInteger('supplier'); //idsupplier
            $table->foreign('supplier')->references('id')->on('suppliers');

            $table->unsignedBigInteger('cash_accounts'); //idocashAccount
            $table->foreign('cash_accounts')->references('id')->on('cash_accounts');

            $table->unsignedBigInteger('type_releases'); //idtype
            $table->foreign('type_releases')->references('id')->on('type_releases');

            $table->unsignedBigInteger('category'); //idcategory
            $table->foreign('category')->references('id')->on('launch_categorys');

            $table->unsignedBigInteger('payment_methods'); //idformapgto
            $table->foreign('payment_methods')->references('id')->on('payment_methods');

            $table->date('expiration');
            $table->date('lowDate');
            $table->unsignedBigInteger('originalValue');
            $table->unsignedBigInteger('surcharge');
            $table->boolean('discountType');
            $table->unsignedBigInteger('discount');
            $table->unsignedBigInteger('postingAmount');
            $table->unsignedBigInteger('barcode');
            $table->string('historico');
            $table->string('installment');

            $table->unsignedBigInteger('id_creatorUser'); //id_creatorUser
            $table->foreign('id_creatorUser')->references('id')->on('users');

            $table->unsignedBigInteger('id_userChange'); //id_userChange
            $table->foreign('id_userChange')->references('id')->on('users');

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
        Schema::dropIfExists('launchs');
    }
};
