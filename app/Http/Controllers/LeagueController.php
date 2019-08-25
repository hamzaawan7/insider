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
        $league = League::findorfail(1);
        return view('includes.matches', compact('league'));
    }

    public function updatePredictions()
    {
        $league = League::findorfail(1);
        return view('includes.predictions', compact('league'));
    }

    public function updateStandings()
    {
        $league = League::findorfail(1);
        return view('includes.standings', compact('league'));
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
