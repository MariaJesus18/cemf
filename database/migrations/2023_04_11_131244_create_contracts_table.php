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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('studend_id');
            $table->foreign('studend_id')->references('id')->on('studends');


            $table->unsignedBigInteger('modalitiy_id');
            $table->foreign('modalitiy_id')->references('id')->on('modalities');

            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');


            $table->unsignedBigInteger('convenant_id');
            $table->foreign('convenant_id')->references('id')->on('convenants');


            $table->string('value');

            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');


            $table->date('firstpaymentdate');

            $table->unsignedBigInteger('responsiblepayment_id');
            $table->foreign('responsiblepayment_id')->references('id')->on('responsibles');

            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');


            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');


            $table->unsignedBigInteger('subscription_id'); //valor da taxa de inscrição
            $table->foreign('subscription_id')->references('id')->on('subscritions');



            $table->unsignedBigInteger('formpayment_id'); //forma de pagamento
            $table->foreign('formpayment_id')->references('id')->on('formpayments');


            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');

            $table->unsignedBigInteger('creatoruser_id');
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('editoruser_id');
            $table->foreign('editoruser_id')->references('id')->on('users');


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
        Schema::dropIfExists('contracts');
    }
};
