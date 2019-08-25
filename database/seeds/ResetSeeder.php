<?php

use Illuminate\Database\Seeder;

class ResetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('leagues')->update([
            'current_week_id' => 1,
            'next_week_id' => 1,
            'status' => false,
        ]);

        DB::table('matches')->update([
            'home_team_score' => 0,
            'visitor_team_score' => 0,
            'status' => false,
        ]);

        DB::table('standings')->update([
            'games_played' => 0,
            'wins' => 0,
            'lost' => 0,
            'draws' => 0,
            'goals_scored' => 0,
            'goals_against' => 0,
            'goal_difference' => 0,
            'points' => 0,
            'recent_form' => null,
        ]);

        DB::table('team_predictions')->update([
            'percentage' => 25,
        ]);

        DB::table('team_strengths')->where('team_id', 1)->update([
            'defense' => rand(81, 95),
            'mid' => rand(81, 95),
            'attack' => rand(81, 95),
        ]);

        DB::table('team_strengths')->where('team_id', 2)->update([
            'defense' => rand(81, 95),
            'mid' => rand(81, 95),
            'attack' => rand(81, 95),
        ]);

        DB::table('team_strengths')->where('team_id', 3)->update([
            'defense' => rand(81, 95),
            'mid' => rand(81, 95),
            'attack' => rand(81, 95),
        ]);

        DB::table('team_strengths')->where('team_id', 4)->update([
            'defense' => rand(81, 95),
            'mid' => rand(81, 95),
            'attack' => rand(81, 95),
        ]);
    }
}
