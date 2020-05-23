<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Projet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema:: create('projets', function(Blueprint $table){
            $table->increments('id_projet');
            $table->integer('id_apprenant')->unsigned();
            $table->foreign ('id_apprenant','auteur')->references('id_apprenant')->on('apprenants')->onDelete('cascade');
            $table->text('titre');
            $table->text('lien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema:: drop('projets');
    }
}
