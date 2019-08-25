<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('league_id')->unsigned();
            $table->bigInteger('week_id')->unsigned();
            $table->bigInteger('home_team_id')->unsigned();
            $table->bigInteger('visitor_team_id')->unsigned();
            $table->integer('home_team_score')->default(0);
            $table->integer('visitor_team_score')->default(0);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });

        Schema::table('matches', function (Blueprint $table) {
            $table->foreign('league_id')
                ->references('id')
                ->on('leagues')
                ->onDelete('cascade');

            $table->foreign('home_team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreign('visitor_team_id')
                ->references('id')
                ->on('teams')
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
        Schema::dropIfExists('matches');
    }
}
