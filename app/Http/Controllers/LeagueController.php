<?php

namespace App\Http\Controllers;

use App\League;
use App\Simulation\LeagueFactory;

class LeagueController extends Controller
{
    public function index($play_all = false)
    {
        $league = League::findorfail(1);
        return view('leagues.index', compact('play_all', 'league'));
    }

    public function updateMatches()
    {
        return view('includes.matches');
    }

    public function updatePredictions()
    {
        return view('includes.predictions');
    }

    public function updateStandings()
    {
        return view('includes.standings');
    }

    public function nextWeek(){
        $this->simulate();
        return redirect('league');
    }

    public function simulate()
    {
        $factory = LeagueFactory::build();
        $factory->runSimulation();
    }
}
