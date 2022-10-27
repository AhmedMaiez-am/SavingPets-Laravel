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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('date_acceptation');
            $table->string('position');
            $table->string('nom');
            $table->string('prenom');
            $table->string('description');
            $table->string('email');
            $table->string('phone');
            $table->string('status');
            $table->string('depart');
            $table->unsignedBigInteger('id_dep');
            $table->foreign('id_dep')
                ->references('id')
                ->on('departements')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
};