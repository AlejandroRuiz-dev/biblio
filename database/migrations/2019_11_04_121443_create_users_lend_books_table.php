<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLendBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_lend_books', function (Blueprint $table) {
            $table->primary(['id_user, id_book']);
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_book')->references('id')->on('books');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_book');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_lend_books');
    }
}
