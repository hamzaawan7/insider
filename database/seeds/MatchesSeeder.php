<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'league_id' => 1,
                'week_id' => 1,
                'home_team_id' => 1,
                'visitor_team_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 1,
                'home_team_id' => 2,
                'visitor_team_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 2,
                'home_team_id' => 1,
                'visitor_team_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 2,
                'home_team_id' => 2,
                'visitor_team_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 3,
                'home_team_id' => 1,
                'visitor_team_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 3,
                'home_team_id' => 3,
                'visitor_team_id' => 4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 4,
                'home_team_id' => 4,
                'visitor_team_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 4,
                'home_team_id' => 3,
                'visitor_team_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 5,
                'home_team_id' => 3,
                'visitor_team_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 5,
                'home_team_id' => 4,
                'visitor_team_id' => 2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 6,
                'home_team_id' => 2,
                'visitor_team_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'week_id' => 6,
                'home_team_id' => 4,
                'visitor_team_id' => 3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('matches')->insert($data);
    }
}
