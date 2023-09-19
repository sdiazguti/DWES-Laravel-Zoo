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
        Schema::table('cuidadores', function (Blueprint $table) {
            $table->unsignedBigInteger('id_titulacion1');
            $table->unsignedBigInteger('id_titulacion2');
            //$table->foreign('id_titulacion1')->references('id')->on('titulaciones')->onDelete('cascade');
            //$table->foreign('id_titulacion2')->references('id')->on('titulaciones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuidadores', function (Blueprint $table) {
            //
        });
    }
};
