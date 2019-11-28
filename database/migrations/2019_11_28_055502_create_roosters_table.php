<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roosters', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('color_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();

            $table->double('gram');
            $table->double('pound');
            $table->double('ounce');
            $table->integer('ring');

            $table->timestamps();

            $table->foreign('color_id')->references('id')->on('colors');
            $table->foreign('type_id')->references('id')->on('types');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roosters');
    }
}
