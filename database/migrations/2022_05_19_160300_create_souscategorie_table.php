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
        Schema::create('souscategorie', function (Blueprint $table) {
            $table->increments('idSouscat');
            $table->string('titreSC');
            $table->timestamps();
            $table->integer('idCat_');
            $table->foreign('idCat_')->references('idCat')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('souscategorie');
    }
};
