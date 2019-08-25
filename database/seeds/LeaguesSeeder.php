<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LeaguesSeeder extends Seeder
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
                'name' => 'Premier League',
                'logo_path' => 'https://cdn.sportmonks.com/images/soccer/leagues/8.png',
                'current_week_id' => 1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('leagues')->insert($data);
    }
}
