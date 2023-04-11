s<?php

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
        Schema::create('launch_categorys', function (Blueprint $table) {
            $table->id();
            $table->string('categoryType');
           // $table->unsignedBigInteger('categoryType');//idcategoria
            //$table->foreign('categoriapai')->references('id')->on('categorias');
            $table->string('title');
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
        Schema::dropIfExists('launch_categorys');
    }
};
