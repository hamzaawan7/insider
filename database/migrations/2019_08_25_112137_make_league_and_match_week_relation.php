<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeLeagueAndMatchWeekRelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('leagues', function (Blueprint $table) {
            $table->foreign('current_week_id')
                ->references('id')
                ->on('match_weeks')
                ->onDelete('cascade');
            $table->foreign('next_week_id')
                ->references('id')
                ->on('match_weeks')
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
        //
    }
}
