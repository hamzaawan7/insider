<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StandingsSeeder extends Seeder
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
                'league_id' => '1',
                'team_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => '1',
                'team_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => '1',
                'team_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => '1',
                'team_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('standings')->insert($data);
    }
}
