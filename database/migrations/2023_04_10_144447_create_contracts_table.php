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

            $table->bigInteger('studend_id');
            $table->foreign('studend_id')->references('id')->on('studends');


            $table->bigInteger('modalitiy_id');
            $table->foreign('modalitiy_id')->references('id')->on('modalities');

            $table->bigInteger('unit_id');
            $table->foreign('units_id')->references('id')->on('units');


            $table->bigInteger('convenants_id');
            $table->foreign('units_id')->references('id')->on('units');

            $table->string('value');

            $table->bigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');


            $table->date('firstpaymentdate');

            $table->bigInteger('responsiblepayment_id');
            $table->foreign('responsiblepayment_id')->references('id')->on('responsibles');

            $table->bigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');


            $table->bigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');


            $table->bigInteger('subscription_id');//valor da taxa de inscrição
            $table->foreign('subscription_id')->references('id')->on('subscritions');



            $table->bigInteger('formpayment_id');//forma de pagamento
            $table->foreign('formpayment_id')->references('id')->on('formpayments');


            $table->bigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');

            $table->bigInteger('creatoruser_id');
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->bigInteger('editoruser_id');
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
