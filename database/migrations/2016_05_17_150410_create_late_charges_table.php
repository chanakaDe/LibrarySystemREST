<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('late_charges', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('checkin_id')->unsigned();
            $table->foreign('checkin_id')->references('id')->on('checkins')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('book_id')->on('books')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->double('charge');


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
        Schema::drop('late_charges');
    }
}
