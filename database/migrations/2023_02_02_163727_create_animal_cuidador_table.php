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
        Schema::create('animal_cuidador', function (Blueprint $table) {
            $table->unsignedBigInteger('cuidador_id');
            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animales')->onDelete('cascade');
            $table->foreign('cuidador_id')->references('id')->on('cuidadores')->onDelete('cascade');
            $table->primary(array('animal_id','cuidador_id'));
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
        Schema::dropIfExists('animal_cuidador');
    }
};
