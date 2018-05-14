<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create('autorship', function (Blueprint $table) {
//            $table->integer('author_id')->unsigned();
//            $table->bigInteger('book_id')->unsigned();
//
//
//            $table->foreign('author_id')->references('id')->on('authors');
//            $table->foreign('book_id')->references('isbn')->on('books');
//        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autorship');
    }
}
