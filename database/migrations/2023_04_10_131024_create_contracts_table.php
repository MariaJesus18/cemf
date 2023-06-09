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

            $table->unsignedBigInteger('student_id')->default();
            $table->foreign('student_id')->references('id')->on('students');


            $table->unsignedBigInteger('modality_id');
            $table->foreign('modality_id')->references('id')->on('modalitys');

            $table->unsignedBigInteger('unit_id');
            $table->foreign('unit_id')->references('id')->on('units');


            $table->unsignedBigInteger('covenant_id');
            $table->foreign('covenant_id')->references('id')->on('covenants');


            $table->string('value');

            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');


            $table->date('firstpaymentdate');

            $table->unsignedBigInteger('responsible_id');
            $table->foreign('responsible_id')->references('id')->on('responsibles');

            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('id')->on('shifts');


            $table->unsignedBigInteger('serie_id');
            $table->foreign('serie_id')->references('id')->on('series');


            // $table->unsignedBigInteger('subscription_id'); //valor da taxa de inscrição
            // $table->foreign('subscription_id')->references('id')->on('subscritions');

            $table->string('discount');
            $table->string('registrationFee');



            $table->unsignedBigInteger('formpayment_id'); //forma de pagamento
            $table->foreign('formpayment_id')->references('id')->on('payment_methods');



            $table->unsignedBigInteger('creatoruser_id');
            $table->foreign('creatoruser_id')->references('id')->on('users');

            $table->unsignedBigInteger('editoruser_id')->default();
            $table->foreign('editoruser_id')->references('id')->on('users');
            $table->boolean('status');
            $table->string('observation');
            $table->softDeletes();
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
