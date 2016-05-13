<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkin', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('checkout_id');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('book_id')->on('books');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('checkout_date');
            $table->date('due_date');
            $table->date('handed_date');
            $table->double('late_charges');
            $table->string('note');

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
        Schema::drop('checkin');
    }
}
