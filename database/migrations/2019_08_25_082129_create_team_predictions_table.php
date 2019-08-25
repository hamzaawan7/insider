<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamPredictionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_predictions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('league_id')->unsigned();
            $table->bigInteger('team_id')->unsigned();
            $table->double('percentage')->default(25);
            $table->timestamps();
        });

        Schema::table('team_predictions', function (Blueprint $table) {
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
        Schema::dropIfExists('team_predictions');
    }
}
