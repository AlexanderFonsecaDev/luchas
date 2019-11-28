<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoosterTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooster_team', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('rooster_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();

            $table->timestamps();

            $table->foreign('rooster_id')->references('id')->on('roosters');
            $table->foreign('team_id')->references('id')->on('teams');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooster_team');
    }
}
