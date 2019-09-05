<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewcalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcalendars', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('appointment')->nullable();
            $table->text('location')->nullable();
            $table->integer('time')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('newcalendars');
    }
}
