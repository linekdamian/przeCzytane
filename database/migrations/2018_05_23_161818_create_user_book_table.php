<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_user', function (Blueprint $table) {
            $table->string('user_name');
            $table->bigInteger('book_isbn')->unsigned();

            $table->integer('rating')->nullable();
            $table->text('review')->nullable();
            $table->boolean('favorite')->nullable();
            $table->timestamps();

            $table->primary(['user_name', 'book_isbn']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_user');
    }
}
