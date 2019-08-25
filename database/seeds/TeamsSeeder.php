<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
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
                'name' => 'Arsenal',
                'short_code' => 'ARS',
                'logo_path' => 'https://cdn.sportmonks.com/images//soccer/teams/19/19.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'name' => 'Chelsea',
                'short_code' => 'CHE',
                'logo_path' => 'https://cdn.sportmonks.com/images//soccer/teams/18/18.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'name' => 'Liverpool',
                'short_code' => 'LIV',
                'logo_path' => 'https://cdn.sportmonks.com/images//soccer/teams/8/8.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'league_id' => 1,
                'name' => 'Manchester United',
                'short_code' => 'MUN',
                'logo_path' => 'https://cdn.sportmonks.com/images//soccer/teams/14/14.png',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ];

        DB::table('teams')->insert($data);
    }
}
