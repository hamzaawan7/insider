<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MatchWeeksSeeder::class);
        $this->call(LeaguesSeeder::class);
        $this->call(TeamsSeeder::class);
        $this->call(MatchesSeeder::class);
        $this->call(TeamPredictionsSeeder::class);
        $this->call(TeamStrengthsSeeder::class);
        $this->call(StandingsSeeder::class);

        //$this->call(ResetSeeder::class);
    }
}
