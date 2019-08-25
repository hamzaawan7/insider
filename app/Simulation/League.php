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
        foreach ($this->league->teamPredictions as $prediction) {
            if ($prediction->percentage < 0) {
                $subtraction_percent = $prediction->percentage / 3;
                $other_predictions = \App\TeamPrediction::where('team_id', '<>', $prediction->team_id)->get();
                foreach ($other_predictions as $other_prediction) {
                    $other_prediction->percentage = $other_prediction->percentage - $subtraction_percent;
                    $other_prediction->save();
                }
                $prediction->percentage = 0;
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
