<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('league_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->integer('position');
            $table->integer('games_played')->default(0);
            $table->integer('wins')->default(0);
            $table->integer('lost')->default(0);
            $table->integer('draws')->default(0);
            $table->integer('goals_scored')->default(0);
            $table->integer('goals_against')->default(0);
            $table->string('goal_difference')->default(0);
            $table->integer('points')->default(0);
            $table->string('recent_form')->nullable();
            $table->timestamps();
        });

        Schema::table('standings', function (Blueprint $table) {
            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreign('league_id')
                ->references('id')
                ->on('leagues')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('standings');
    }
}
