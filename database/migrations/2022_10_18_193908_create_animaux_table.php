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
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string("ref");
            $table->string("age");
            $table->string("race");
            $table->string("type");
            $table->timestamps();
            $table->unsignedBigInteger('idLoc');
            $table->foreign('idLoc')
                -> references('id')
                -> on('locaux')
                -> onDelete('restrict')
                -> onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animaux');
    }
};
