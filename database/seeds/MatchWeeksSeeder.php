<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchWeeksSeeder extends Seeder
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
                'week' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'week' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'week' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'week' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'week' => '5',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'week' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ];

        DB::table('match_weeks')->insert($data);
    }
}
