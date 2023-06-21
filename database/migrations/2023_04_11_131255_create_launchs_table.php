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

            $table->foreignId('contract')->constrained('contracts')->onDeleteCascade('cascade');
            $table->foreignId('unit')->constrained('units')->onDeleteCascade('cascade');

            $table->unsignedBigInteger('student')->nullable(); //idstudent
            $table->foreign('student')->references('id')->on('students');

            $table->unsignedBigInteger('supplier')->nullable(); //idsupplier
            $table->foreign('supplier')->references('id')->on('suppliers');

            $table->unsignedBigInteger('cashAccounts')->nullable(); //idocashAccount
            $table->foreign('cashAccounts')->references('id')->on('cash_accounts');

            $table->unsignedBigInteger('type')->nullable(); //idtype
            $table->foreign('type')->references('id')->on('type_releases');

            $table->unsignedBigInteger('category')->nullable(); //idcategory
            $table->foreign('category')->references('id')->on('launch_categorys');

            $table->unsignedBigInteger('paymentMethod')->nullable(); //idformapgto
            $table->foreign('paymentMethod')->references('id')->on('payment_methods');

            $table->date('expiration')->nullable();
            $table->date('lowDate')->nullable();
            $table->unsignedBigInteger('originalValue')->nullable();
            $table->unsignedBigInteger('surcharge')->nullable();
            $table->boolean('discountType')->nullable();
            $table->unsignedBigInteger('discount')->nullable();
            $table->unsignedBigInteger('postingAmount')->nullable();
            $table->unsignedBigInteger('barcode')->nullable();
            $table->string('historic')->nullable();
            $table->string('installment')->nullable();

            $table->unsignedBigInteger('creatoruser_id')->nullable(); //creatoruser_id
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('editoruser_id')->nullable(); //editoruser_id
            $table->foreign('editoruser_id')->references('id')->on('users');

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
