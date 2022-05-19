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
        Schema::create('sujet', function (Blueprint $table) {
            $table->increments('idSujet');
            $table->string('titre');
            $table->boolean('resolu');
            $table->timestamps();
            $table->integer('idUser_');
            $table->foreign('idUser_')->references('idUser')->on('users');
            $table->integer('idSouscat_');
            $table->foreign('idSouscat_')->references('idSouscat')->on('souscategorie');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sujet');
    }
};
