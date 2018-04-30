<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('email')->primary()->unique();
            $table->string('name');
            $table->string('password');
            $table->integer('roles_id')->default(2);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('roles_id')->references('id')->on('roles');
        });

        DB::table('users')->insert(
            array(
                'email' => 'name@domain.com',
                'verified' => true
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
