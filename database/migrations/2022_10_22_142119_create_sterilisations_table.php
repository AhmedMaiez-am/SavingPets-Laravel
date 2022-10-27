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
        Schema::create('sterilisations', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('responsable');
            $table->string('description');
            $table->date('date');           
            $table->unsignedBigInteger('vaccin_id');
            $table->foreign('vaccin_id')
                -> references('id')
                -> on('vaccins')
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
        Schema::dropIfExists('sterilisations');
    }
};
