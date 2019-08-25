<?php


namespace App\Simulation;


class League
{
    protected $league;
    private $teams;
    private $matches;
    private $match_week;
    protected $team_standings;
    protected $team_predictions;

    public function __construct()
    {
        $league = \App\League::find(1);
        $this->league = $league;
        $this->match_week = $league->current_week_id;
        foreach ($league->teams as $team) {
            $this->teams[] = new Team($team);
        }
        foreach ($league->nextMatchWeek->matches as $match) {
            $this->matches[] = new Match($match);
        }
        foreach ($league->standings as $team_standing) {
            $this->team_standings[] = new TeamStanding($team_standing);
        }
        foreach ($league->teamPredictions as $team_prediction) {
            $this->team_predictions[] = new TeamPrediction($team_prediction);
        }
    }

    public function runSimulation()
    {
        if ($this->match_week == 6) {
            $this->leagueCompleted();
            return;
        }
        foreach ($this->matches as $match) {
            $match->play();
        }
        foreach ($this->team_standings as $team_standing) {
            $team_standing->updateStats();
        }
        foreach ($this->team_predictions as $team_prediction) {
            $team_prediction->updatePredictions();
        }
        $this->roundPredictions();
        $this->updateWeek();
    }

    protected function checkWinner($match, $team_id)
    {
        if ($match->home_team_score == $match->visitor_team_score) {
            return "D";
        } else {
            if ($match->home_team_score > $match->visitor_team_score) {
                return ($match->home_team_id == $team_id) ? "W" : "L";
            } else if ($match->home_team_score < $match->visitor_team_score) {
                return ($match->home_team_id == $team_id) ? "L" : "W";
            }
        }
    }

    private function updateWeek()
    {
        $this->match_week = $this->league->next_week_id;
        $this->league->current_week_id = $this->league->next_week_id;
        if ($this->league->next_week_id < 6) {
            $this->league->next_week_id = $this->league->next_week_id + 1;
        }
        $this->league->save();
    }

    private function roundPredictions()
    {
        $total_percentage = $this->league->teamPredictions->sum('percentage');
        if ($total_percentage > 100) {
            $predictions = \App\TeamPrediction::where('percentage', '<>', 0)->get();
            $total = count($predictions);
            $subtraction_percent = ($total_percentage - 100) / $total;
            foreach ($predictions as $prediction) {
                $prediction->percentage = $prediction->percentage - $subtraction_percent;
                if($prediction->percentage < 0){
                    $prediction->percentage = 0;
                }
                $prediction->save();
            }
        }
    }

    private function leagueCompleted()
    {
        $this->league->status = 1;
        $this->league->save();
    }
}
