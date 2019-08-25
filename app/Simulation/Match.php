<?php


namespace App\Simulation;


class Match extends League
{
    private $match_id;

    public function __construct($id)
    {
        $this->match_id = $id;
    }

    public function play()
    {
        $match = \App\Match::find($this->match_id);
        $match->home_team_score = $this->calculateTeamGoal($match->homeTeam, $match->visitorTeam, 1);
        $match->visitor_team_score = $this->calculateTeamGoal($match->visitorTeam, $match->homeTeam, 2);
        $match->status = 1;
        $match->save();
    }

    private function calculateTeamGoal($team1, $team2, $home_team)
    {
        $team1_attack = $team1->teamStrength->attack + 1;
        $team1_mid = $team1->teamStrength->mid;
        $team1_defense = $team1->teamStrength->defense;
        $team2_attack = $team2->teamStrength->attack;
        $team2_mid = $team2->teamStrength->mid;
        $team2_defense = $team2->teamStrength->defense + 1;
        $goal = ceil((floor($team1_attack - $team2_defense))
                + (floor($team1_mid - $team2_mid))
                + (floor($team1_defense - $team2_attack))) / 2;
        return ($goal >= 0) ? $goal : 0;
    }
}
