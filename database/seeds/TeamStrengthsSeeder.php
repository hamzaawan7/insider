<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamStrengthsSeeder extends Seeder
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
                'defense' => rand(85, 92),
                'mid' => rand(85, 92),
                'attack' => rand(85, 92),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '2',
                'defense' => rand(85, 92),
                'mid' => rand(85, 92),
                'attack' => rand(85, 92),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '3',
                'defense' => rand(85, 92),
                'mid' => rand(85, 92),
                'attack' => rand(85, 92),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'team_id' => '4',
                'defense' => rand(85, 92),
                'mid' => rand(85, 92),
                'attack' => rand(85, 92),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('team_strengths')->insert($data);
    }
}
