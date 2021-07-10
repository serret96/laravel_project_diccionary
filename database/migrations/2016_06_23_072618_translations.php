<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Translations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Translations', function (Blueprint $table){
           
            $table->increments('id');
            $table->string('translate');
            $table->integer('id_words')->unsigned();
            $table->string('updated_at');
            $table->string('created_at');
           $table->foreign('id_words')->references('id')->on('Inserts_words')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Translations');
    }
}
