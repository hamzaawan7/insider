<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamPredictionsSeeder extends Seeder
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
                'team_id' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('team_predictions')->insert($data);
    }
}
