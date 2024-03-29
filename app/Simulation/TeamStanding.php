<?php


namespace App\Simulation;


use App\Standing;

class TeamStanding extends League
{
    private $team_standing;

    public function __construct($ts)
    {
        $this->team_standing = $ts;
    }

    public function updateStats()
    {
        $this->team_standing->games_played++;
        $match = $this->team_standing->team->latestMatch($this->team_standing->team_id);
        $result = $this->checkWinner($match, $this->team_standing->team_id);
        $this->updateTeamStats($result, $this->team_standing, $match);
        $this->team_standing->save();
    }

    private function updateTeamStats($result, $standing, $match)
    {
        switch ($result) {
            case "W":
                $standing->wins++;
                $standing->points = $standing->points + 3;
                $this->updateGoalsStats($standing, $match);
                break;
            case "L":
                $standing->lost++;
                $this->updateGoalsStats($standing, $match);
                break;
            case "D":
                $standing->draws++;
                $standing->points = $standing->points + 1;
                $this->updateGoalsStats($standing, $match);
                break;
        }
    }

    private function updateGoalsStats($standing, $match)
    {
        $goals_scored = ($match->home_team_id == $standing->team_id) ? $match->home_team_score : $match->visitor_team_score;
        $goals_against = ($match->home_team_id == $standing->team_id) ? $match->visitor_team_score : $match->home_team_score;
        $standing->goals_scored = $standing->goals_scored + $goals_scored;
        $standing->goals_against = $standing->goals_against + $goals_against;
        $standing->goal_difference = $standing->goal_difference + ($goals_scored - $goals_against);
    }
}
