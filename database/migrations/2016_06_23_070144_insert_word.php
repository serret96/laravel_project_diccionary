<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertWord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inserts_words', function(Blueprint $table){
           $table->increments('id');
           $table->string('words_ebrenques','120')->unique();
           $table->string('descriptionts');
           $table->string('types');
            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Inserts_words');
    }
}
