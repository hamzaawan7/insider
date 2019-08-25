<?php


namespace App\Simulation;


class League
{
    protected $league_id;
    private $match_week;
    protected $team_standings;
    private $teams;
    private $matches;

    public function __construct()
    {
        $league = \App\League::find(1);
        $this->league_id = $league->id;
        $this->match_week = $league->current_week_id;
        foreach ($league->teams as $team) {
            $this->teams[] = new Team($team->id);
        }
        foreach ($league->currentMatchWeek->matches as $match) {
            $this->matches[] = new Match($match->id);
        }
        foreach ($league->standings as $team_standing) {
            $this->team_standings[] = new TeamStanding($team_standing->id);
        }
    }

    public function runSimulation()
    {
        foreach ($this->matches as $match) {
            $match->play();
        }
        foreach ($this->team_standings as $team_standing) {
            $team_standing->updateStats();
        }
        $this->updateWeek();
    }

    private function updateWeek()
    {
        $league = \App\League::find($this->league_id);
        $league->current_week_id = $league->next_week_id;
        if ($league->next_week_id < 6) {
            $league->next_week_id = $league->next_week_id + 1;
        }
        $league->save();
    }
}
