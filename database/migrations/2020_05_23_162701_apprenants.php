<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Apprenants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema:: create('apprenants', function(Blueprint $table){
        $table->increments('id_apprenant');
        $table->text('nom');
        $table->text('prenom');
        $table->text('date_naiss');
        $table->text('ville_origine');
        $table->text('formation');
        $table->integer('contact')->unsigned();
    });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema:: drop('apprenants');
    }
}
