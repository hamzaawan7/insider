<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('league_id')->unsigned();
            $table->string('name');
            $table->string('short_code');
            $table->string('logo_path');
            $table->timestamps();
        });

        Schema::table('teams', function (Blueprint $table) {
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
        Schema::dropIfExists('teams');
    }
}
